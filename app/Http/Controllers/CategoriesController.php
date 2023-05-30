<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Str;

class CategoriesController extends Controller
{

    public function index()
    {
        $categories = Category::all();
        return view('category.index', compact('categories'));
    }
    public function delete($id)
    {
        $category = Category::where('id', $id)->first();
        $category->delete();
        return redirect()->back();
    }
    public function store(Request $request)
    {
        $category = new Category;
        $category->title = $request->title;
        $category->slug = Str::slug($request->title);
        $category->user_id = auth()->user()->id;
        $category->save();
        return redirect()->route('category.index');
    }       
    public function edit($id)
    {
        $category = Category::where('id', $id)->first();
        return view('category.edit', compact('category'));  
    }
    public function update(Request $request, $id)
    {
        $category = Category::where('id', $id)->first();
        $category->title = $request->title;
        $category->save();
        return redirect()->route('category.index');
    }
}