<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use App\Models\PortfolioCategory;
use App\Models\PortfolioImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


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
        $request->validate([
            'title' => ['string', 'max:30', 'nullable'],
            'category_id' => ['numeric'],
            'tool' => ['string', 'nullable'],
            'work_detail' => ['string', 'nullable'],
            'site_link' => ['url', 'nullable'],
            'plan_link' => ['url', 'nullable'],
            'github' => ['url', 'nullable'],
            'description' => ['string', 'nullable'],
            'created_at' => ['date'],
            'status' => ['numeric'],
            'image' => ['image', 'max:3000'],
        ]);

        $create = new Portfolio;
        $create->title = $request->title;
        $create->category_id = $request->category_id;
        $create->tool = $request->tool;
        $create->work_detail = $request->work_detail;
        $create->site_link = $request->site_link;
        $create->plan_link = $request->plan_link;
        $create->github = $request->github;
        $create->description = $request->description;
        $create->created_at = $request->created_at;
        $create->status = $request->status;

        // dd($create);
        $create->save();

        // dd($request->all());


        // 복수 이미지
        $this_id = $create->id;
        if ($request->hasFile('images')) {
            // 배열을 'originalName' 기준으로 이름순으로 정렬합니다.
            $images = $request->file('images');
            usort($images, function ($a, $b) {
            return strcmp($a->getClientOriginalName(), $b->getClientOriginalName());
            });
            
            foreach ($images as $image) {
                $path = $image->store('public/images/portfolio_images/' . $this_id);
                $portfolio_image = new PortfolioImage;
                $portfolio_image->name = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
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
        return view('frontend.portfolio-detail', compact('id'));
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
        $request->validate([
            'title' => ['string', 'max:30', 'nullable'],
            'category_id' => ['numeric'],
            'tool' => ['string', 'nullable'],
            'work_detail' => ['string', 'nullable'],
            'site_link' => ['url', 'nullable'],
            'plan_link' => ['url', 'nullable'],
            'github' => ['url', 'nullable'],
            'created_at' => ['date'],
            'status' => ['numeric'],
            'image' => ['image', 'max:3000'],
        ]);
        
        $portfolio = Portfolio::find($id);

        if ($request->hasFile('images')) {
            // 배열을 'originalName' 기준으로 이름순으로 정렬합니다.
            $images = $request->file('images');
            usort($images, function ($a, $b) {
            return strcmp($a->getClientOriginalName(), $b->getClientOriginalName());
            });
            
            
            //이미지 있는지 확인 후 있으면, 이미지 삭제
            $FolderPath = 'public/images/portfolio_images/' . $id;
            Storage::deleteDirectory($FolderPath);

            // 이미지 레코드 삭제
            foreach ($portfolio->images as $image) {
                $image->delete();
            }

            //새로운 파일 레코드 추가
            // foreach ($request->file('images') as $image) {
            foreach ($images as $image) {
                // dd($images,$image );
                $path = $image->store('public/images/portfolio_images/' . $id);
                $portfolio_image = new PortfolioImage;
                $portfolio_image->name = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
                $portfolio_image->portfolio_id = $id;
                $portfolio_image->image_path = $path;
                $portfolio_image->save();
            }
        };

        //여타 post 데이터 업데이트
        $inserted_data = $request->all();
        unset($inserted_data['_token']);
        unset($inserted_data['_method']);
        Portfolio::find($id)->update($inserted_data);

        toastr()->success('Updated successfully!', 'Congrats');
        return back();
        return redirect('admin/portfolio');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //폴더채로 이미지 삭제
        $FolderPath = 'public/images/portfolio_images/' . $id;
        Storage::deleteDirectory($FolderPath);

        //이미지 DB 포함 모든 DB삭제
        Portfolio::find($id)->delete();

        toastr()->success('Deleted successfully!');
        return back();
    }
}
