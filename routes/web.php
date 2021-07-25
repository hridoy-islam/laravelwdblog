<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;

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
    return view('welcome');
});

Route::prefix('admin')->group(function () {
    Route::get('/', [AuthController::class, 'index'])->name('login');
    Route::get('/register', [AuthController::class, 'registerview']);
    Route::get('/forgot', [AuthController::class, 'forgotview']);
});



Route::prefix('dashboard')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('category', CategoryController::class);
    Route::resource('author', AuthorController::class);
    Route::resource('post', PostController::class);
    Route::resource('product', ProductController::class);
    Route::resource('brand', BrandController::class);

});
