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

Route::get('/', [MainController::class, 'home'])->name('home');

// USER SHOP
Route::get('/shop', [ShopController::class, 'index'])->name('shop.index');

// USER ARTICLE
Route::get('/articles', [MainController::class, 'index'])->name('articles');
Route::get('/articles/{article:slug}', [MainController::class, 'show'])->name('article');

// ADMIN ARTICLE

Route::prefix('admin')->middleware('admin')->group(function() {

    Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index');
    Route::get('/articles/create', [ArticleController::class, 'create'])->name('articles.create');
    Route::post('/articles/store', [ArticleController::class, 'store'])->name('articles.store');
    Route::get('/articles/{article:id}/edit', [ArticleController::class, 'edit'])->name('articles.edit');
    Route::put('/articles/{article:id}/update', [ArticleController::class, 'update'])->name('articles.update');
    Route::delete('/articles/{article:id}/delete', [ArticleController::class, 'delete'])->name('articles.delete');

});