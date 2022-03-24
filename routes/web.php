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

Route::group(
    ['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']],
    function () {
        \UniSharp\LaravelFilemanager\Lfm::routes();
    }
);

Route::get('/', function () {
    $themes = Website::all()->first();
    $themes2 = 'front.b';
    if (Website::all()->count() != 0) {
        $gallery = Gallery::orderBy('created_at', 'desc')->paginate(9);
        $news = News::orderBy('date', 'desc')->paginate(9);
        return view($themes2 . '.pages.index', compact('gallery', 'news'));
    } else {
        return view($themes->themes_front . '.pages.setup');
    }
})->name('root')->middleware('data_web');

Route::group(['middleware' => 'data_web'], function () {
    Route::get('/news-detail/{id}', [FrontController::class, 'newsdetail'])->name('news.detail');
    Route::get('/news-author/{id}', [FrontController::class, 'newsbyauthor'])->name('news.author');
    Route::get('/news-search', [FrontController::class, 'newsbysearch'])->name('news.search');
    Route::get('/newsall', [FrontController::class, 'newsall'])->name('news.all');
    Route::get('/photos', [FrontController::class, 'galleryall'])->name('photo.all');
    Route::post('/setup', [FrontController::class, 'setup'])->name('setup-first');
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
    Route::post('sendCentang', [RoleController::class, 'changeAccess']);
});
