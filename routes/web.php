<?php

use Illuminate\Support\Facades\Route; 
use App\Http\Controllers\HomeController; 
use App\Http\Controllers\ProductController; 
use App\Http\Controllers\CartController; 
use App\Http\Controllers\Admin\HomeController as AdminHome;
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

Route::get('/', [HomeController::class, 'index']);
Route::get('/product/{id}', [ProductController::class, 'show']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/cart', [App\Http\Controllers\CartController::class, 'index'])->name('cartIndex');

Route::post('/add-to-cart', [App\Http\Controllers\CartController::class, 'addToCart'])->name('addToCart');

Route::middleware(['role:admin'])->prefix('admin_panel')->group(function () {
    Route::get('/', [AdminHome::class, 'index']);
});