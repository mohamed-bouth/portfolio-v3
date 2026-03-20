<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::latest()->paginate(10);

        return view('projects.index', compact('projects'));
    }

    public function create()
    {
        return view('projects.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'github' => ['nullable', 'url'],
            'live' => ['nullable', 'url'],
            'tech' => ['nullable', 'string'],
            'image' => ['nullable', 'image', 'max:2048'],
        ]);

        if ($request->hasFile('image')) {
            $newPath = $request->file('image')->store('projects', 'r2');
            $data['image_path'] = rtrim(env('CLOUDFLARE_PUBLIC_URL'), '/') . '/' . $newPath;
        }

        $data['tech'] = $this->normalizeTech($request->input('tech'));

        Project::create($data);

        return redirect()
            ->route('projects.index')
            ->with('success', 'Project created successfully.');
    }

    public function edit(Project $project)
    {
        return view('projects.edit', compact('project'));
    }

    public function update(Request $request, Project $project)
    {
        $data = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'github' => ['nullable', 'url'],
            'live' => ['nullable', 'url'],
            'tech' => ['nullable', 'string'],
            'image' => ['nullable', 'image', 'max:2048'],
        ]);

        if ($request->hasFile('image')) {
            if ($project->image_path) {
                $publicUrl = rtrim(env('CLOUDFLARE_PUBLIC_URL'), '/');
                $oldPath = str_replace($publicUrl . '/', '', $project->image_path);

                if ($oldPath) {
                    Storage::disk('r2')->delete($oldPath);
                }
            }

            $newPath = $request->file('image')->store('projects', 'r2');
            $data['image_path'] = rtrim(env('CLOUDFLARE_PUBLIC_URL'), '/') . '/' . $newPath;
        }

        $data['tech'] = $this->normalizeTech($request->input('tech'));

        $project->update($data);

        return redirect()
            ->route('projects.index')
            ->with('success', 'Project updated successfully.');
    }

    public function destroy(Project $project)
    {
        if ($project->image_path) {
            $publicUrl = rtrim(env('CLOUDFLARE_PUBLIC_URL'), '/');
            $oldPath = str_replace($publicUrl . '/', '', $project->image_path);

            if ($oldPath) {
                Storage::disk('r2')->delete($oldPath);
            }
        }

        $project->delete();

        return redirect()
            ->route('projects.index')
            ->with('success', 'Project deleted successfully.');
    }

    private function normalizeTech(?string $techInput): array
    {
        if (!$techInput) {
            return [];
        }

        return collect(explode(',', $techInput))
            ->map(fn ($item) => trim($item))
            ->filter()
            ->values()
            ->all();
    }
}