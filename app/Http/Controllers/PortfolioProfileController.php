<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PortfolioProfileController extends Controller
{
    public function edit()
    {
        $profile = Profile::first();

        return view('profile.information', compact('profile'));
    }

    public function update(Request $request)
    {
        $profile = Profile::first();

        $data = $request->validate([
            'full_name' => ['required', 'string', 'max:255'],
            'bio' => ['nullable', 'string'],
            'linkedin' => ['nullable', 'url'],
            'github' => ['nullable', 'url'],
            'gmail' => ['nullable', 'email'],
            'image' => ['nullable', 'image', 'max:2048'],
        ]);

        if ($request->hasFile('image')) {
            if ($profile && $profile->image_path) {
                $publicUrl = rtrim(env('CLOUDFLARE_PUBLIC_URL'), '/');
                $oldPath = str_replace($publicUrl . '/', '', $profile->image_path);

                Storage::disk('r2')->delete($oldPath);
            }
            $newPath = $request->file('image')->store('profiles', 'r2');

            $data['image_path'] = rtrim(env('CLOUDFLARE_PUBLIC_URL'), '/') . '/' . $newPath;
        }

        if ($profile) {
            $profile->update($data);
        } else {
            Profile::create($data);
        }

        return back()->with('success', 'Profile updated successfully.');
    }
}