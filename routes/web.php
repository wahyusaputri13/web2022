<?php

use App\Http\Controllers\CredentialController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\GalleryController;
use Illuminate\Support\Facades\Route;
use App\Models\News;
use App\Models\Gallery;
use App\Models\Website;
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
    if (Website::all()->count() != 0) {
        $gallery = Gallery::orderBy('created_at', 'desc')->paginate(9);
        $news = News::orderBy('date', 'desc')->paginate(9);
        return view('front.pages.index', compact('gallery', 'news'));
    } else {
        return view('front.pages.setup');
    }
})->name('root')->middleware('data_web');

Route::group(['middleware' => 'data_web'], function () {
    Route::get('/news-detail/{id}', [FrontController::class, 'newsdetail'])->name('news.detail');
    Route::get('/newsall', [FrontController::class, 'newsall'])->name('news.all');
    Route::get('/photos', [FrontController::class, 'galleryall'])->name('photo.all');
    Route::post('/setup', [FrontController::class, 'setup'])->name('setup-first');
});

Route::middleware(['auth:sanctum', 'verified', 'data_web'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::group(['middleware' => ['auth', 'data_web']], function () {
    Route::resource('gallery', GalleryController::class);
    Route::resource('menu', MenuController::class);
    Route::resource('website', WebsiteController::class);
    Route::resource('news', NewsController::class);
    Route::resource('myprofile', CredentialController::class);
});
