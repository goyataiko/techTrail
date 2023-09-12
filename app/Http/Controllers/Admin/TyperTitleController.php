<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TyperTitle;
use Illuminate\Http\Request;

class TyperTitleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $model = TyperTitle::get();

        return view('admin.hero.typerTitle.index', compact('model'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.hero.typerTitle.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required', 'max:100'],
        ]);

        $create = new TyperTitle;
        $create->title = $request->title;
        $create->save();

        toastr()->success('Created successfully!');
        return redirect('admin/typerTitle');
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
        $title = TyperTitle::findorFail($id);
        return view('admin.hero.typerTitle.edit', compact('title'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => ['required', 'max:100'],
        ]);

        $update = TyperTitle::findorFail($id);
        $update->title = $request->title;
        $update->save();

        toastr()->success('Updated successfully!', 'Congrats');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        TyperTitle::find($id)->delete();

        toastr()->success('Deleted successfully!');
        return back();

    }
}
