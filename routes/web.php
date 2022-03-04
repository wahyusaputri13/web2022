<?php

use App\Http\Controllers\MenuController;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\GalleryController;
use Illuminate\Support\Facades\Route;
use App\Models\Website;
use App\Models\News;
use App\Models\Gallery;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $data = Website::first();
    $gallery = Gallery::orderBy('created_at', 'desc')->paginate(9);
    $news = News::orderBy('created_at', 'desc')->paginate(9);
    return view('front/index', compact('data', 'gallery', 'news'));
});

Route::get('/photos', function () {
    $data = Website::first();
    $gallery = Gallery::orderBy('created_at', 'desc')->paginate(9);
    return view('front/allgallery', compact('data', 'gallery'));
})->name('photo');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::group(['middleware' => 'auth'], function () {
    Route::resource('menu', MenuController::class);
    Route::resource('website', WebsiteController::class);
    Route::resource('gallery', GalleryController::class);
    Route::resource('news', NewsController::class);
});
