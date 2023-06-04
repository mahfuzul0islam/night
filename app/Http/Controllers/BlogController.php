<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function create()
    {
        $categories = Category::all();
        return view('blog.create', compact('categories'));
    }
    public function store(Request $request)
    {
        // dd($request->all());
        $blog = new Blog;
        $blog->user_id = auth()->id();
        $blog->title = $request->title;
        $blog->image = $request->image->store('blog');
        $blog->body = $request->body;
        $blog->category_id = $request->category;
        $blog->save();  
        return redirect()->back();
    }
    public function blogs()
    {
        $blogs = Blog::all();
        return view('welcome', compact('blogs'));
    }
    public function welcome()
    {
        return view('blog');
    }
    public function delete($id)
    {
        $blog = Blog::where('id', $id)->first();
        $blog->delete();
        return redirect()->back();
    }
    public function edit($id)
    {
        $blog = Blog::where('id', $id)->first();
        $categories = Category::all();
        return view('blog.edit', compact('blog', 'categories'));
    }
    public function update(Request $request, $id)
    {
        $blog = Blog::where('id', $id)->first();
        $blog->user_id = auth()->id();
        $blog->title = $request->title;
        $blog->image = $request->image->store('blog');
        $blog->body = $request->body;
        $blog->category_id = $request->category;
        $blog->save();
        return redirect()->route('welcome');
    }
    public function dashbordblog()
    {
        $blogs = Blog::all();
        return view('dashbordblog', compact('blogs'));
        
    }
    public function profile ()
    {
        $user = auth()->user();
        return view("auth.profile",compact('user'));
    }
    public function profileupdate(Request $request)
    {
        $user = auth()->user();
        $user->name = $request->name;
        if ($request->has('image')) {
            $user->image = $request->image->store('image');
        }
        $user->bio = $request->bio;
        $user->number = $request->number;
        $user->save();
        return redirect()->back();

    }
}