<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\BlogImage;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $table = Blog::get();
        return view('admin.blog.index', compact('table'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category = BlogCategory::get();
        return view('admin.blog.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $create = new Blog;

        $create->title = $request->title;
        $create->category_id = $request->category_id;
        $create->description = $request->description;
        $create->created_at = $request->created_at;
        $create->status = $request->status;

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('public/images/blog_images/');
            $create->image = $path;
        }
        
        $create->save();

        toastr()->success('Created successfully!');
        return redirect('/admin/blog');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = Blog::find($id);
        return view('frontend.blog-detail', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
