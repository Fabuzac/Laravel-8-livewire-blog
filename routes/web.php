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

Route::get('/articles', [App\Http\Controllers\MainController::class, 'index'])->name('articles');

Route::get('/articles/{slug}', [App\Http\Controllers\MainController::class, 'show'])->name('article');

Route::get('/shop', [App\Http\Controllers\ShopController::class, 'index'])->name('shop.index');



Route::get('/admin/articles', [App\Http\Controllers\ArticleController::class, 'index'])->middleware('admin')->name('articles.index');



// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
