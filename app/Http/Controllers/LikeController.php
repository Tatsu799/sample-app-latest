<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class LikeController extends Controller
{
    // function like(Request $request, $id)
    // {
    //     // 投稿のidからいいねを押す投稿を探す
    //     $post = Post::findOrFail($id);

    //     if (!$post->isLikedBy($request->user())) {
    //         $post->likes()->create([
    //             'user_id' => $request->user()->id,
    //         ]);
    //     }

    //     return back();
    // }

    function like(Request $request, $id)
    {
        // 投稿のidからいいねを押す投稿を探す
        $post = Post::findOrFail($id);

        // dd($request->user());
        if (!$post->isLikedBy($request->user())) {
            $post->likes()->create([
                'user_id' => $request->user()->id,
            ]);
        }

        // return response()->json([
        //     'message' => 'Like created successfully!',
        //     'redirect' => route('posts.index'),
        // ], 201);
        return back();
    }

    function unlike(Request $request, $id)
    {
        // 投稿のidからいいねを押す投稿を探す
        $post = Post::findOrFail($id);

        $like = $post->likes()->where('user_id', $request->user()->id)->first();
        if ($like) {
            $like->delete();
        }

        return back();
    }
}
