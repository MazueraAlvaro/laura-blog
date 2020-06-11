<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class PostController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy("created_at", "desc")->paginate(5);
        return view("posts.index", ["posts" => $posts]);
    }
    
    public function show($id){
        $post = Post::where("id", $id)->with("comments")->first();

        return view("posts.show", ["post" => $post]);
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $post = Post::create($data);
        return redirect()->route("home");
    }
    
    public function create()
    {
        return view("posts.create");
    }
}
