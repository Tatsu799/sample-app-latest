<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Models\Post;


class PostController extends Controller
{
    function index()
    {
        $posts = Post::orderby('created_at', 'desc')->get();
        // dd($posts);
        return view('post.index', compact('posts'));
        // return view('post.index');
    }

    function store(Request $request)
    {
        $validated = $request->validate([
            'text' => 'required|string',
        ]);

        $validated['user_id'] = Auth::id();
        // $request->user()->create($validated);
        // dd($validated);
        Post::create($validated);

        return redirect(route('posts.index'));
    }

    function getData()
    {
        $posts = Post::orderby('created_at', 'desc')->get();
        return response()->json($posts);
    }

    function edit(Post $post)
    {
        return view('post.edit', ['post' => $post]);
    }
    function update() {}

    function delete() {}
}
