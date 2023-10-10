<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PortfolioCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PortfolioCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $table = PortfolioCategory::get();
        return view('admin.portfolio.category.index', compact('table'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('test');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:30'],
        ]);

        $create = new PortfolioCategory;
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
            'name' => ['required', 'string', 'max:30'],
        ]);

        $update = PortfolioCategory::findorFail($id);
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
        PortfolioCategory::find($id)->delete();

        toastr()->success('Deleted successfully!');
        return back();
    }
}
