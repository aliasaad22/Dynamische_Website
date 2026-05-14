<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Mail;

class ContactController extends Controller
{
    public function create()
    {
        return view('contact.create');
    }

     public function submit(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);
        
        return back()->with('success', 'Thank you for your message!');
    }
}
