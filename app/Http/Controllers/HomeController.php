<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function __invoke()
    {
        $featuredPosts = Post::published()
            ->with('author')
            ->featured()
            ->latest('published_at')
            ->take(3)
            ->get();

        return view('pages.home', compact('featuredPosts'));
    }

    public function contact(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:5000',
        ]);

        Mail::to(config('mail.from.address'))->send(new ContactMail($validated));

        return back()->with('status', 'Message sent successfully. I will get back to you soon.');
    }
}
