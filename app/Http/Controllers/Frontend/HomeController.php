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
        // $selectedPortfolios = Portfolio::all();
        
        $selectedPortfolios = collect();
        foreach ($portfolio_category as $category) {
            $portfoliosInCategory = Portfolio::where('category_id', $category->id)
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
