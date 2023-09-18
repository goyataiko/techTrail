<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use App\Models\PortfolioCategory;
use App\Models\PortfolioImage;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $table = Portfolio::get();
        // return view('admin.portfolio.index');
        return view('admin.portfolio.index', compact('table'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category = PortfolioCategory::get();
        return view('admin.portfolio.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $create = new Portfolio;
        $create->title = $request->title;
        $create->category_id = $request->category_id;
        $create->tool = $request->tool;
        $create->work_detail = $request->work_detail;
        $create->site_link = $request->site_link;
        $create->plan_link = $request->plan_link;
        $create->description = $request->description;
        $create->created_at = $request->created_at;
        $create->status = $request->status;

        // dd($create);
        $create->save();

        // dd($request->all());


        // 복수 이미지
        $this_id = $create->id;
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('public/images/portfolio_images/'.$this_id);
                $portfolio_image = new PortfolioImage;
                $portfolio_image->portfolio_id = $this_id;
                $portfolio_image->image_path = $path;
                $portfolio_image->save();
            }
        }

        toastr()->success('Created successfully!');
        return redirect('/admin/portfolio');
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
        $category = PortfolioCategory::all();
        $table = Portfolio::find($id);

        return view('admin.portfolio.edit', compact('category', 'table'));
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
