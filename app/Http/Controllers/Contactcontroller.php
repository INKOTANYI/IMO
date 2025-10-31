<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => ['required','string','max:255'],
            'email' => ['required','email','max:255'],
            'service' => ['required','string','max:255'],
            'message' => ['required','string','max:5000'],
        ]);

        Contact::create($data);
        if ($request->expectsJson() || $request->ajax()) {
            return response()->json(['message' => 'Thank you! Your message has been sent.'], 201);
        }
        return redirect()->to(route('home') . '#contact')
            ->with('status', 'Thank you! Your message has been sent.');
    }
}
