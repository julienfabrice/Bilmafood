<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\AppController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\JamController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\QualityController;
use App\Http\Controllers\SocietyController;
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

Route::get('/',[AppController::class,'index'])->name('app.index');
Route::get('/products',[ProductController::class,'index'])->name('products.index');
Route::get('/society',[SocietyController::class,'index'])->name('society.index');
Route::get('/quality',[QualityController::class,'index'])->name('quality.index');
Route::get('/blog',[BlogController::class,'index'])->name('blog.index');
Route::get('/jam',[JamController::class,'index'])->name('jam.index');
Route::get('/account',[AccountController::class,'index'])->name('account.index');
Route::get('/category',[CategoryController::class,'index'])->name('category.index');
Route::get('/contact',[ContactController::class,'index'])->name('contact.index');
Route::get('/product/detail',[ProductController::class,'productDetails'])->name('product.productDetail');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
