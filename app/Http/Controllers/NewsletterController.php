<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NewsletterSubscription;

class NewsletterController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'newsletter_email' => ['required','email','max:255','unique:newsletter_subscriptions,email'],
        ]);

        NewsletterSubscription::create([
            'email' => $data['newsletter_email'],
        ]);
        if ($request->expectsJson() || $request->ajax()) {
            return response()->json(['message' => 'Thanks! You are subscribed.'], 201);
        }
        return back()->with('newsletter_status', 'Thanks! You are subscribed.');
    }
}
