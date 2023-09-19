<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Hero;
use App\Models\Portfolio;
use App\Models\PortfolioCategory;
use App\Models\TyperTitle;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $hero = Hero::first();
        $typerTitles = TyperTitle::all();

        $portfolio_category = PortfolioCategory::all();

        //모든 포트폴리오 보이도록 할때는 이것 이용
        // $selectedPortfolios = Portfolio::where('status', 2)->get();
        
        //카테고리별로 n개씩 보이도록 설정
        $selectedPortfolios = collect();
        foreach ($portfolio_category as $category) {
            $portfoliosInCategory = Portfolio::where('category_id', $category->id)
                ->where('status', 2)
                ->orderBy('created_at', 'desc')
                ->take(3)
                ->get();
        
            $selectedPortfolios = $selectedPortfolios->merge($portfoliosInCategory);
        }

        // dd($selectedPortfolios);

        return view('frontend.home', compact(
            'hero',
            'typerTitles',

            'portfolio_category',
            'selectedPortfolios',
        ));
    }
}
