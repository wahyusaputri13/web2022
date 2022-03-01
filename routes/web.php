<?php

use App\Http\Controllers\MenuController;
use App\Http\Controllers\WebsiteController;
use Illuminate\Support\Facades\Route;
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
    $data = Website::first();
    return view('front/index', compact('data'));
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::group(['middleware' => 'auth'], function () {
    Route::resource('menu', MenuController::class);
    Route::resource('website', WebsiteController::class);
});
