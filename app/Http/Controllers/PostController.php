<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PostController extends Controller
{

    protected $posts;
    public function __construct()
    {
        $this->posts = DB::table("posts")
            ->join("users", 'users.id', '=', 'posts.user_id')
            ->orderBy("posts.created_at", "desc")
            ->select("users.id", "users.email", "users.name", "posts.*")
            ->get();
        // dd($this->posts);
    }
    public function posts()
    {
        return view('posts', ['posts' => $this->posts]);
    }
    public function post(Request $request, $slug)
    {
        $post = Post::where('slug', $slug)->get()[0];
        return view('post-detail', ['post' => $post]);
    }
    public function create(Request $request)
    {
        Log::info("Form fields", $request->all());
        $user_id = request()->user()->id;
        // Log::info("User id", $user_id);
        $formFields = $request->validate([
            "title" => ["required", "min:3"],
            "image" => ["required"],
            "content" => ["required"]
        ]);
        if ($request->has("image")) {
            $file = $request->file("image");
            $image = $file->store("images/posts", "public");
        }
        $formFields['user_id'] = $user_id;
        $formFields['image'] = $image;
        Post::create($formFields);
        Log::info("Post created", $formFields);
        return redirect("posts")->with("success", "Fill uploaded successfully.");
    }
}
