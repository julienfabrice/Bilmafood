<?php

// routes/web.php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\Admin\AdminProductController;
use App\Http\Controllers\Admin\AdminAddProductController;
use App\Http\Controllers\Admin\AdminCategoryController;
use App\Http\Controllers\AppController;
use App\Http\Controllers\Auth\AdminAuthController;
use App\Http\Controllers\Auth\ClientAuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;

use App\Http\Controllers\BlogController;
use App\Http\Controllers\JamController;
use App\Http\Controllers\QualityController;
use App\Http\Controllers\SocietyController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CartController;

Route::get('/', [AppController::class, 'index'])->name('app.index');
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/category', [CategoryController::class, 'index'])->name('category.index');
Route::get('/contactus', [ContactController::class, 'index'])->name('contact.index');
Route::get('/product/detail/{product}', [ProductController::class, 'productDetails'])->name('product.productDetail');

Route::get('/society',[SocietyController::class,'index'])->name('society.index');
Route::get('/quality',[QualityController::class,'index'])->name('quality.index');
Route::get('/blog',[BlogController::class,'index'])->name('blog.index');
Route::get('/jam',[JamController::class,'index'])->name('jam.index');

// Client Routes

Route::get('login', [ClientAuthController::class, 'showLoginForm'])->name('client.login.form');
Route::post('login', [ClientAuthController::class, 'login'])->name('client.login');
Route::post('logout', [ClientAuthController::class, 'logout'])->name('client.logout');

// Client register

Route::get('register', [RegisterController::class, 'showRegisterForm'])->name('client.register.form');
Route::post('register', [RegisterController::class, 'registerClient'])->name('client.register');


// Secured routes for clients
Route::middleware(['auth:client'])->group(function () {
    Route::get('/account', [AccountController::class, 'index'])->name('account.index');
});

// Admin Routes
Route::get('/adminbilma/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('/adminbilma/login', [AdminAuthController::class, 'login']);
Route::post('/adminbilma/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

Route::middleware(['auth:admin'])->group(function () {
    Route::get('/adminbilma', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/adminbilma/product', [AdminProductController::class, 'index'])->name('admin.product');
    Route::get('/adminbilma/product/add', [AdminProductController::class, 'createproduct'])->name('admin.addproduct');
    Route::post('/adminbilma/product/add', [AdminProductController::class, 'storeproduct'])->name('admin.storeproduct');
    Route::get('/adminbilma/product/{product}/edit', [AdminProductController::class, 'editproduct'])->name('admin.editproduct');
    Route::put('/adminbilma/product/{product}/edit', [AdminProductController::class, 'updateproduct'])->name('admin.updateproduct');
    Route::delete('/adminbilma/product/{product}', [AdminProductController::class, 'destroyproduct'])->name('admin.destroyproduct');
    Route::get('/adminbilma/category', [AdminCategoryController::class, 'index'])->name('admin.category');
    Route::get('/adminbilma/category/create', [AdminCategoryController::class, 'create'])->name('admin.createcategory');
    Route::post('/adminbilma/category/create', [AdminCategoryController::class, 'store'])->name('admin.storecategory');
    // Route::get('/adminbilma/category/{categorie}', [AdminCategoryController::class, 'show'])->name('admin.showcategory');
    Route::get('/adminbilma/category/{categorie}/edit', [AdminCategoryController::class, 'edit'])->name('admin.editcategory');
    Route::put('/adminbilma/category/{categorie}/edit', [AdminCategoryController::class, 'update'])->name('admin.updatecategory');
    Route::delete('/adminbilma/category/{categorie}', [AdminCategoryController::class, 'destroy'])->name('admin.destroycategory');

});

//Card 

// routes/web.php

Route::get('/cart', 'CartController@index')->name('cart.index');
Route::post('/cart/add/{id}', 'CartController@add')->name('cart.add');

Route::post('/cart/remove/{id}', 'CartController@remove')->name('cart.remove');
Route::post('/cart/update/{id}', 'CartController@update')->name('cart.update');


