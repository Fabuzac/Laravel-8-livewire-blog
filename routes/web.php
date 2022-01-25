<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [App\Http\Controllers\MainController::class, 'home']);

Route::get('/articles', [App\Http\Controllers\MainController::class, 'index'])->name('articles');

Route::get('/articles/{slug}', [App\Http\Controllers\MainController::class, 'show'])->name('article');

