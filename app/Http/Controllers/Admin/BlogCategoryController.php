<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use Str;

class BlogCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $model = BlogCategory::get();
        return view('admin.blog.blog-category.index', compact('model'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => ['required', 'max:30'],
        ]);

        $create = new BlogCategory;
        $create->name = $request->name;
        $create->slug = Str::slug($request->name);
        $create->save();

        toastr()->success('Created successfully!');
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
        $request->validate([
            'name' => ['required', 'max:30'],
        ]);

        $update = BlogCategory::findorFail($id);
        $update->name = $request->name;
        $update->slug = Str::slug($request->name);
        $update->save();

        toastr()->success('Updated successfully!', 'Congrats');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        BlogCategory::find($id)->delete();

        toastr()->success('Deleted successfully!');
        return back();
    }
}
