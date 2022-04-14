<?php

use App\Http\Controllers\CredentialController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\SubmenuController;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ThemesController;
use App\Http\Controllers\FrontMenuController;
use App\Http\Controllers\FrontSubmenuController;
use Illuminate\Support\Facades\Route;
use App\Models\News;
use App\Models\Gallery;
use App\Models\Website;
use App\Models\Themes;
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

Route::group(
    ['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']],
    function () {
        \UniSharp\LaravelFilemanager\Lfm::routes();
    }
);

Route::get('/', function () {
    $themes = Website::all()->first();
    if (Website::all()->count() != 0) {
        $gallery = Gallery::orderBy('created_at', 'desc')->paginate(12);
        $news = News::orderBy('date', 'desc')->paginate(9);
        return view('front.' . $themes->themes_front . '.pages.index', compact('gallery', 'news'));
    } else {
        $data = Themes::all();
        return view('front.setup', compact('data'));
    }
})->name('root')->middleware('data_web');

Route::group(['middleware' => 'data_web'], function () {
    Route::get('/news-detail/{id}', [FrontController::class, 'newsdetail'])->name('news.detail');
    Route::get('/news-author/{id}', [FrontController::class, 'newsbyauthor'])->name('news.author');
    Route::get('/news-search', [FrontController::class, 'newsbysearch'])->name('news.search');
    Route::get('/newsall', [FrontController::class, 'newsall'])->name('news.all');
    Route::get('/photos', [FrontController::class, 'galleryall'])->name('photo.all');
    Route::post('/setup', [FrontController::class, 'setup'])->name('setup-first');
    Route::get('/tentang-kami', [FrontController::class, 'tentangkami'])->name('tentang-kami');
    Route::get('/latar-belakang', [FrontController::class, 'latarbelakang'])->name('latar-belakang');
    Route::get('/tujuan', [FrontController::class, 'tujuan'])->name('tujuan');
    Route::get('/kampung-pancasila', [FrontController::class, 'kampungpancasila'])->name('kampung-pancasila');
    Route::get('/load-sql', [FrontController::class, 'loadsql'])->name('load-sql');
    Route::get('/hapus-string', [FrontController::class, 'hapusstring'])->name('hapus-string');
});

Route::middleware(['auth:sanctum', 'verified', 'data_web'])->get('/dashboard', function () {
    $themes = Website::all()->first();
    return view($themes->themes_back . '.pages.dashboard');
})->name('dashboard');

Route::group(['middleware' => ['auth', 'data_web']], function () {
    Route::resource('gallery', GalleryController::class);
    Route::resource('menu', MenuController::class);
    Route::resource('submenu', SubmenuController::class);
    Route::resource('settings', WebsiteController::class);
    Route::resource('news', NewsController::class);
    Route::resource('myprofile', CredentialController::class);
    Route::resource('role', RoleController::class);
    Route::resource('user', UserController::class);
    Route::resource('themes', ThemesController::class);
    Route::resource('frontmenu', FrontMenuController::class);
    Route::resource('frontsubmenu', FrontSubmenuController::class);
    Route::post('sendCentang', [RoleController::class, 'changeAccess']);
    Route::get('getAlamat', [WebsiteController::class, 'location']);
});
