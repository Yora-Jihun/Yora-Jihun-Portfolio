<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        $category = $request->query('category');

        $featuredPost = Post::published()
            ->with('author')
            ->pinned()
            ->latest('published_at')
            ->first();

        $posts = Post::published()
            ->with('author')
            ->when($featuredPost, function ($query, $featuredPost) {
                return $query->where('id', '!=', $featuredPost->id);
            })
            ->when($category, function ($query, $category) {
                return $query->where('category', $category);
            })
            ->paginate(9);

        return view('pages.blog', compact('posts', 'featuredPost', 'category'));
    }

    public function show($slug)
    {
        $post = Post::published()
            ->with('author')
            ->where('slug', $slug)
            ->firstOrFail();

        return view('pages.blog-post', compact('post'));
    }
}
