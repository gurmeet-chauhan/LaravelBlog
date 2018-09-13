<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;

class CommentsController extends Controller
{
    public function create(Request $request)
    {
        $comment = new Comment;
        $comment->name = $request->name;
        $comment->body = $request->body;
        $comment->post_id = $request->id;
        $comment->save();
        
        return back();
    }
}
