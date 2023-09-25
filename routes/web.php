<?php

use App\Http\Controllers\Admin\BlogCategoryController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\HeroController;
use App\Http\Controllers\Admin\PortfolioCategoryController;
use App\Http\Controllers\Admin\PortfolioController;
use App\Http\Controllers\Admin\TyperTitleController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Frontend\HomeController;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\Portfolio;
use App\Models\PortfolioCategory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/n1test-before', function () {
    DB::enableQueryLog();


    $blog_category = BlogCategory::all();

    $selectedBlogs = collect();
    foreach ($blog_category as $category) {
        $BlogsInCategory = Blog::where('category_id', $category->id)
            ->take(1)->get();

        $selectedBlogs = $selectedBlogs->merge($BlogsInCategory);
    }

    echo ('Result');
    dump($selectedBlogs->toArray());

    echo ('Query');
    dump(DB::getQueryLog());
});


Route::get('/n1test-after', function () {
    DB::enableQueryLog();

    $blog_category = BlogCategory::with('blogs')->get();

    $selectedBlogs = collect();
    foreach ($blog_category as $category) {
        $selectedBlogs = $selectedBlogs->merge($category->limited_blogs());
    }

    echo ('Result');
    dump($selectedBlogs->toArray());

    echo ('Query');
    dump(DB::getQueryLog());
});

Route::get('/n1test-2', function () {
    DB::enableQueryLog();

    $portfolio_category = PortfolioCategory::with(['portfolios' => function ($query) {
        $query->where('status', 2)
            ->orderBy('created_at', 'desc');
    }])->get();

    // dd($portfolio_category);

    foreach ($portfolio_category as $p) {
        dump($p->limited_portfolios()->toArray());
    }

    echo ('Result');
    dump($portfolio_category->toArray());

    echo ('Query');
    dump(DB::getQueryLog());
});





Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/portfolio', [HomeController::class, 'portfolio'])->name('portfolio');
Route::get('/portfolio/{id}', [HomeController::class, 'portfolio_detail'])->name('portfolio.detail');

Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
Route::get('/blog/{id}', [HomeController::class, 'blog_detail'])->name('blog.detail');

Route::post('/contact', [HomeController::class, 'contact'])->name('contact');

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

Route::group(['middleware' => ['auth'], 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::resource('hero', HeroController::class);
    Route::resource('typer-title', TyperTitleController::class);

    Route::resource('portfolio', PortfolioController::class);
    Route::resource('portfolio-category', PortfolioCategoryController::class);

    Route::resource('blog', BlogController::class);
    Route::resource('blog-category', BlogCategoryController::class);
});
