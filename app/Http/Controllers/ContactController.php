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
        $validatedData = $request->validate([
            'name' => 'required|min:3|max:255',
            'email' => 'required|email',
            'message' => 'required|min:10',
        ]);
        $messages = [
            'name.required' => 'Please enter your name.',
            'name.min' => 'Your name must be at least 3 characters.',
            'name.max' => 'Your name cannot exceed 255 characters.',
            'email.required' => 'Please enter your email address.',
            'email.email' => 'Please enter a valid email address.',
            'message.required' => 'Please enter your message.',
            'message.min' => 'Your message must be at least 10 characters.',
        ];

       
   
        return back()->with('success', 'Thank you for your message!');
    }
}
