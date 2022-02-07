<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

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
Auth::routes();

Route::get('/', [App\Http\Controllers\MainController::class, 'home'])->name('home');

// USER SHOP
Route::get('/shop', [App\Http\Controllers\ShopController::class, 'index'])->name('shop.index');

// USER ARTICLE
Route::get('/articles', [App\Http\Controllers\MainController::class, 'index'])->name('articles');
Route::get('/articles/{article:slug}', [App\Http\Controllers\MainController::class, 'show'])->name('article');

// ADMIN ARTICLE
Route::get('/admin/articles', [App\Http\Controllers\ArticleController::class, 'index'])->middleware('admin')->name('articles.index');
Route::get('/admin/articles/create', [App\Http\Controllers\ArticleController::class, 'create'])->middleware('admin')->name('articles.create');
Route::post('/admin/articles/store', [App\Http\Controllers\ArticleController::class, 'store'])->middleware('admin')->name('articles.store');
Route::delete('/admin/articles/{article:id}/delete', [App\Http\Controllers\ArticleController::class, 'delete'])->middleware('admin')->name('articles.delete');
Route::get('/admin/articles/{article:id}/edit', [App\Http\Controllers\ArticleController::class, 'edit'])->middleware('admin')->name('articles.edit');
Route::put('/admin/articles/{article:id}/update', [App\Http\Controllers\ArticleController::class, 'update'])->middleware('admin')->name('articles.update');
