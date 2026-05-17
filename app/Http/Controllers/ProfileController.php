<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    // Publiek profiel
    public function show(User $user)
    {
        return view('profile.show', compact('user'));
    }

    // Edit pagina (eigen gebruiker)
    public function edit()
    {
        return view('profile.edit', [
            'user' => Auth::user()
        ]);
    }

    // Update profiel
    public function update(Request $request)
    {
        $user = Auth::user();

        $validated = $request->validate([
            'username' => ['nullable', 'string', 'max:255'],
            'birthday' => ['nullable', 'date'],
            'about' => ['nullable', 'string', 'max:1000'],
            'profile_photo' => ['nullable', 'image', 'max:2048'],
        ]);

        // Foto upload
        if ($request->hasFile('profile_photo')) {

            // oude foto verwijderen (netjes)
            if ($user->profile_photo) {
                Storage::disk('public')->delete($user->profile_photo);
            }

            $validated['profile_photo'] =
                $request->file('profile_photo')->store('profile_photos', 'public');
        }

        $user->update($validated);

        return redirect()
            ->route('profile.edit')
            ->with('success', 'Profiel succesvol bijgewerkt');
    }
}