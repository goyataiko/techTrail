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
use App\Http\Controllers\Summernote;
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


Route::post('/insert-image-file', [Summernote::class, 'insertImageFile'])->name('summernote.insert-image-file')->middleware('auth');

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
