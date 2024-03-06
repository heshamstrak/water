<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/shop', [App\Http\Controllers\ShopController::class, 'index'])->name('shop');
Route::get('/shop/{product}/{slug}', [App\Http\Controllers\ShopController::class, 'single'])->name('shop.single');

//Cart Route
Route::post('/add/cart', [App\Http\Controllers\CartController::class, 'addToCart'])->name('add_to_cart');
Route::get('/cart', [App\Http\Controllers\CartController::class, 'index'])->name('view_cart');
Route::get('/cart/remove/{id}', [App\Http\Controllers\CartController::class, 'remove'])->name('cart.remove');
Route::post('/cart/update', [App\Http\Controllers\CartController::class, 'update'])->name('cart.update');

//Blog Route
Route::get('blog', [App\Http\Controllers\BlogController::class, 'index'])->name('blog.index');
Route::get('blog/{slug}/{blog}', [App\Http\Controllers\BlogController::class, 'blog'])->name('blog');

//Contact Us Route
Route::get('contact', [App\Http\Controllers\ContactController::class, 'index'])->name('contact');
Route::post('contact', [App\Http\Controllers\ContactController::class, 'sendMessage'])->name('contact.store');