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

}
