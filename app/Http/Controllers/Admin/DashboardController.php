<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Portfolio;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $portfolio= Portfolio::count();
        $blog= Blog::count();

        return view('admin.dashboard', compact('portfolio', 'blog'));
    }
}
