<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
class CommentController extends Controller
{
    public function store(Request $request)
    {
        $commentText = $request->get("comment");
        $post_id = $request->get("post_id");
    
        // $post = Post::findOrFail($post_id);
        $comment = new Comment;
        $comment->comment = $commentText;
        $comment->post()->associate($post_id);

        $comment->save();

        return back();
    }
}
