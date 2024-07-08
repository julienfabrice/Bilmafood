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
use Illuminate\Support\Facades\Route;

Route::get('/', [AppController::class, 'index'])->name('app.index');
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/category', [CategoryController::class, 'index'])->name('category.index');
Route::get('/contactus', [ContactController::class, 'index'])->name('contact.index');
Route::get('/product/detail', [ProductController::class, 'productDetails'])->name('product.productDetail');

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

// Secured routes for admins
Route::middleware(['auth:admin'])->group(function () {
    Route::get('/adminbilma', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/adminbilma/product', [AdminProductController::class, 'index'])->name('admin.product');
    Route::get('/adminbilma/product/add', [AdminAddProductController::class, 'index'])->name('admin.addproduct');
    Route::get('/adminbilma/category/', [AdminCategoryController::class, 'index'])->name('admin.category');
});


Route::middleware(['auth:admin'])->group(function () {
    Route::get('/adminbilma', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/adminbilma/product', [AdminProductController::class, 'index'])->name('admin.product');
    Route::get('/adminbilma/product/add', [AdminAddProductController::class, 'index'])->name('admin.addproduct');
    Route::get('/adminbilma/category', [AdminCategoryController::class, 'index'])->name('admin.category');
    Route::get('/adminbilma/category/create', [AdminCategoryController::class, 'create'])->name('admin.createcategory');
    Route::post('/adminbilma/category/create', [AdminCategoryController::class, 'store'])->name('admin.storecategory');
    // Route::get('/adminbilma/category/{categorie}', [AdminCategoryController::class, 'show'])->name('admin.showcategory');
    Route::get('/adminbilma/category/{categorie}/edit', [AdminCategoryController::class, 'edit'])->name('admin.editcategory');
    Route::put('/adminbilma/category/{categorie}/edit', [AdminCategoryController::class, 'update'])->name('admin.updatecategory');
    Route::delete('/adminbilma/category/{categorie}', [AdminCategoryController::class, 'destroy'])->name('admin.destroycategory');
});

