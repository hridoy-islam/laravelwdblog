<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Frontend;
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
    return view('frontend.index');
})->name('home');

Route::get('/blog', [Frontend::class, 'index'])->name('blog');
Route::get('/blog/{slug}', [Frontend::class, 'single'])->name('singlepost');
Route::get('/searchblog', [Frontend::class, 'searchblog'])->name('search.blog');
Route::get('/category/{slug}', [Frontend::class, 'bycategory'])->name('category.slug');

Route::get('/about', [Frontend::class, 'about'])->name('about');
Route::get('/shop', [Frontend::class, 'shop'])->name('shop');
Route::get('/shop/{productname}', [Frontend::class, 'singleProduct'])->name('singleproduct');
Route::get('/cart', [Frontend::class, 'cart'])->name('cart');
Route::get('/checkout', [Frontend::class, 'checkout'])->name('checkout');
Route::get('/contact', [Frontend::class, 'contact'])->name('contact');

Route::get('/login', [Frontend::class, 'showlogin'])->name('customerlogin');


Route::prefix('admin')->group(function () {
    Route::get('/', [AuthController::class, 'index'])->name('login');
    Route::get('/register', [AuthController::class, 'registerview']);
    Route::get('/forgot', [AuthController::class, 'forgotview']);
});

Route::group(['middleware' => 'auth', 'prefix' => 'dashboard'], function(){

    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('category', CategoryController::class);
    Route::resource('author', AuthorController::class);
    Route::resource('post', PostController::class);
    Route::resource('product', ProductController::class);
    Route::resource('brand', BrandController::class);
});
