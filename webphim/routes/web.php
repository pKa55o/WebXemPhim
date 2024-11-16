<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', [IndexController::class, 'index']) -> name('homepage');
Route::get('/danh-muc', [IndexController::class, 'category']) -> name('category');
Route::get('/the-loai', [IndexController::class, 'genre']) -> name('genre');
Route::get('/quoc-gia', [IndexController::class, 'country']) -> name('country');
Route::get('/phim', action: [IndexController::class, 'movie']) -> name('movie');
Route::get('/xem-phim', [IndexController::class, 'watch']) -> name('watch');
Route::get('/tap-phim', [IndexController::class, 'episode']) -> name('episode');

Auth::routes();

Route::get('/home', [HomeController::class, 'home']) -> name('home');