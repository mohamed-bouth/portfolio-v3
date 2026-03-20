<?php

namespace App\Http\Controllers;

use App\Models\Education;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    public function index()
    {
        $educations = Education::orderByDesc('start_year')->paginate(10);

        return view('education.index', compact('educations'));
    }

    public function create()
    {
        return view('education.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'institution' => ['required', 'string', 'max:255'],
            'degree' => ['required', 'string', 'max:255'],
            'location' => ['nullable', 'string', 'max:255'],
            'start_year' => ['required', 'digits:4', 'integer'],
            'end_year' => ['nullable', 'digits:4', 'integer', 'gte:start_year'],
            'description' => ['nullable', 'string'],
        ]);

        Education::create($data);

        return redirect()
            ->route('education.index')
            ->with('success', 'Education created successfully.');
    }

    public function edit(Education $education)
    {
        return view('education.edit', compact('education'));
    }

    public function update(Request $request, Education $education)
    {
        $data = $request->validate([
            'institution' => ['required', 'string', 'max:255'],
            'degree' => ['required', 'string', 'max:255'],
            'location' => ['nullable', 'string', 'max:255'],
            'start_year' => ['required', 'digits:4', 'integer'],
            'end_year' => ['nullable', 'digits:4', 'integer', 'gte:start_year'],
            'description' => ['nullable', 'string'],
        ]);

        $education->update($data);

        return redirect()
            ->route('education.index')
            ->with('success', 'Education updated successfully.');
    }

    public function destroy(Education $education)
    {
        $education->delete();

        return redirect()
            ->route('education.index')
            ->with('success', 'Education deleted successfully.');
    }
}