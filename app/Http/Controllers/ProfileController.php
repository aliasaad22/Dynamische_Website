<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    
    public function show(User $user)
    {
        return view('profile.show', compact('user'));
    }

    
    public function edit()
    {
        $user = Auth::user();
        return view('profile.edit', compact('user'));
    }

    
    public function update(Request $request)
    {
        $user = Auth::user();

        $validated = $request->validate([
            'username' => ['nullable', 'string', 'max:255'],
            'birthday' => ['nullable', 'date'],
            'about' => ['nullable', 'string'],
            'profile_photo' => ['nullable', 'image', 'max:2048'],
        ]);

        // Foto opslaan
        if ($request->hasFile('profile_photo')) {
            $path = $request->file('profile_photo')->store('profile_photos', 'public');
            $validated['profile_photo'] = $path;
        }

        $user->update($validated);

        return redirect()->route('profile.edit')->with('success', 'Profiel bijgewerkt');
    }
}
