<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function singleblog($id)
    {
        $blog = Blog::where('id', $id)->withCount('comments')->first();
        $comments = Comment::where('blog_id', $id)->get();
        return view('singleblog', compact('blog', "comments"));
    }
    public function store(Request $request, $id)
    {

        $blog = Blog::where('id', $id)->first();
        $comment = new Comment;
        $comment->user_id = auth()->id();
        $comment->comment = $request->comment;
        $comment->blog_id = $blog->id;
        $comment->save();
        return redirect()->back();
    }
}