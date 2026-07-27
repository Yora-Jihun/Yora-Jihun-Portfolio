<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function __construct()
    {
        //
    }

    public function index()
    {
        $posts = Post::with('author')->latest()->paginate(20);
        return view('admin.posts.index', compact('posts'));
    }

    public function create()
    {
        return view('admin.posts.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'excerpt' => 'nullable|string',
            'body' => 'required|string',
            'category' => 'string|max:100',
            'read_time' => 'integer|min:1',
            'cover_image' => 'nullable|image|max:2048',
            'featured' => 'boolean',
        ]);

        $data['slug'] = Str::slug($data['title']);
        $data['user_id'] = auth()->id();
        $data['is_published'] = true;
        $data['published_at'] = now();
        $data['featured'] = $request->has('featured');

        if ($request->hasFile('cover_image')) {
            $data['cover_image'] = $request->file('cover_image')->store('post-covers', 'public');
        }

        Post::create($data);

        return redirect()->route('admin.posts.index')->with('status', 'Post created successfully.');
    }

    public function edit(Post $post)
    {
        return view('admin.posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'excerpt' => 'nullable|string',
            'body' => 'required|string',
            'category' => 'string|max:100',
            'read_time' => 'integer|min:1',
            'cover_image' => 'nullable|image|max:2048',
            'featured' => 'boolean',
        ]);

        if ($data['title'] !== $post->title) {
            $data['slug'] = Str::slug($data['title']);
        }

        if ($request->hasFile('cover_image')) {
            $data['cover_image'] = $request->file('cover_image')->store('post-covers', 'public');
        } else {
            $data['cover_image'] = $post->cover_image;
        }

        $data['is_published'] = true;
        $data['published_at'] = now();
        $data['featured'] = $request->has('featured');

        $post->update($data);

        return redirect()->route('admin.posts.index')->with('status', 'Post updated successfully.');
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('admin.posts.index')->with('status', 'Post deleted successfully.');
    }
}
