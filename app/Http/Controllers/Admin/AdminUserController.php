<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;


class AdminUserController extends Controller
{
    public function create()
{
    return view('admin.users.create');
}
public function index()
{
    $users = User::all();
    return view('admin.users.index', compact('users'));
}

public function store(Request $request)
{
    $data = $request->validate([
        'name' => 'required',
        'username' => 'nullable',
        'email' => 'required|email|unique:users,email',
        'birthday' => 'nullable|date',
        'password' => 'required|min:6',
        'is_admin' => 'nullable|boolean',
    ]);

    $data['password'] = bcrypt($data['password']);
    $data['is_admin'] = $request->has('is_admin');

    User::create($data);

        return redirect()->route('admin.users.index')
            ->with('success', 'Gebruiker succesvol aangemaakt');
    }
        public function show(User $user)
    {
        return view('admin.users.show', compact('user'));
    }

        public function edit(User $user)
    {
        return view('admin.users.edit', compact('user'));
    }

        public function destroy(User $user)
    {
        $user->delete($user->id);

        return redirect()->route('admin.users.index')
            ->with('success', 'Gebruiker verwijderd');
    }
 

    public function update(Request $request, User $user)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'is_admin' => 'nullable|boolean',
        ]);

        $user->update([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'is_admin' => $request->has('is_admin'),
        ]);

        return redirect()->route('admin.users.index')
            ->with('success', 'Gebruiker bijgewerkt');
    }

}
