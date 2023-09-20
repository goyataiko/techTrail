<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogCategory;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        $category = BlogCategory::all();
        $table = Blog::find($id);

        return view('admin.blog.edit', compact('table', 'category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $blog = Blog::find($id);

        // dd($request->hasFile('image'));
        if ($request->hasFile('image')) {
            if ($blog->image) {
                Storage::delete($blog->image);
            }
            $path = $request->file('image')->store('public/images/blog_images/');
            $blog->image = $path;
        }

        $blog->title = $request->title;
        $blog->category_id = $request->category_id;
        $blog->description = $request->description;
        $blog->created_at = $request->created_at;
        $blog->status = $request->status;

        $blog->save();

        toastr()->success('Updated successfully!', 'Congrats');
        return redirect('admin/blog');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $blog = Blog::find($id);

        Storage::delete($blog->image);

        Blog::find($id)->delete();

        toastr()->success('Deleted successfully!');
        return back();
    }
}
