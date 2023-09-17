<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function posts()
    {
        $posts = \App\Models\Post::all();
        return view('posts', ['posts' => $posts]);
    }
    public function post(Request $request, $slug)
    {
        $post = \App\Models\Post::where('slug', $slug)->get();
        // return $post;
        return view('post-detail', ['post' => $post[0]]);
    }
}
