<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Mail\ContactMail;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\Hero;
use App\Models\Portfolio;
use App\Models\PortfolioCategory;
use App\Models\TyperTitle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function index()
    {
        $hero = Hero::first();
        $typerTitles = TyperTitle::all();

        //------------ portfolio관련 --------------//

        // n+1문제 관련, 
        // https://github.com/goyataiko/techTrail/issues/77

        $portfolio_category = PortfolioCategory::with(['portfolios' => function ($query) {
            $query->where('status', 2)
                ->orderBy('created_at', 'desc');
        }])->get();

        $selectedPortfolios = collect();
        foreach ($portfolio_category as $category) {
            $selectedPortfolios = $selectedPortfolios->merge($category->limited_portfolios());
        }

        // dd($selectedPortfolios);

        //------------ Blog 관련 --------------//

        $blogs = Blog::where('status', 2)->orderBy('created_at', 'desc')
            ->take(6)->get();


        return view('frontend.home', compact(
            'hero',
            'typerTitles',

            'portfolio_category',
            'selectedPortfolios',

            'blogs',
        ));
    }

    public function portfolio()
    {
        $category = PortfolioCategory::all();

        //모든 포트폴리오 보이도록 할때는 이것 이용
        $selectedPortfolios = Portfolio::where('status', 2)->get();

        return view('frontend.portfolio', compact(
            'category',
            'selectedPortfolios',
        ));
    }

    public function portfolio_detail(string $id)
    {
        $table = Portfolio::find($id);
        // dd($table);
        return view('frontend.portfolio-detail', compact('table'));
    }

    public function blog(Request $request)
    {
        $category_id = $request->id;
        $category = BlogCategory::all();

        $table = Blog::where('status', 2)->latest()->paginate(6);

        return view('frontend.blog', compact(
            'category',
            'table',
            'category_id',
        ));
    }

    public function blog_detail(string $id)
    {
        $category = BlogCategory::all();
        $table = Blog::find($id);
        $related = Blog::where('id', '!=', $table->id)->where('category_id', $table->category_id)
        ->where('status', 2)->orderBy('created_at', 'desc')->take(3)->get();
        
        // dd($table);
        return view('frontend.blog-detail', compact(
            'category',
            'table',
            'related',
        ));
    }


    public function contact(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email',],
            'name' => ['required', 'max:50',],
            'message' => ['required', 'max:2000',],
        ]);
        // dd($request->all());
        Mail::to($request->email)->send(new ContactMail($request->all()));

        toastr()->success('メールを送信しました。');
        return redirect('/#contact');
    }
}
