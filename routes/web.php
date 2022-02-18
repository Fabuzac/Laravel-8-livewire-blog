<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ArticleController;

/*
|--------------------------------------------------------------------------
| Web Routes                                                              |
|--------------------------------------------------------------------------
| These routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
*/

Auth::routes();

// HOME
Route::get('/', [MainController::class, 'home'])->name('home');

// GUEST SHOP
Route::get('/shop', [ShopController::class, 'index'])->name('shop.index');

// GUEST ARTICLE
Route::get('/articles', [MainController::class, 'index'])->name('articles');
Route::get('/articles/{article:slug}', [MainController::class, 'show'])->name('article');

// ADMIN ARTICLE
Route::prefix('admin')->middleware('admin')->group(function() {

    Route::resource('articles', ArticleController::class)->except([
        'show'
    ]);

});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
