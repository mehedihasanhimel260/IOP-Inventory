<?php

use App\Http\Controllers\backend\BrandController;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\ProductController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
//
// categories section
//
Route::get('/admin/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::post('/admin/categories', [CategoryController::class, 'store'])->name('categories.store');
Route::get('/admin/categories/create', [CategoryController::class, 'create'])->name('categories.create');
Route::get('/admin/categories/{id}', [CategoryController::class, 'destroy'])->name('categories.destroy');
Route::post('/admin/categories/{id}', [CategoryController::class, 'update'])->name('categories.update');
Route::get('/admin/categories/{id}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
//
// Brand section
//
Route::get('/admin/brand', [BrandController::class, 'index'])->name('brand.index');
Route::post('/admin/brand', [BrandController::class, 'store'])->name('brand.store');
Route::get('/admin/brand/create', [BrandController::class, 'create'])->name('brand.create');
Route::get('/admin/brand/{id}', [BrandController::class, 'destroy'])->name('brand.destroy');
Route::post('/admin/brand/{id}', [BrandController::class, 'update'])->name('brand.update');
Route::get('/admin/brand/{id}/edit', [BrandController::class, 'edit'])->name('brand.edit');
//
// Product section
//

Route::get('/admin/product', [ProductController::class, 'index'])->name('product.index');
Route::post('/admin/product', [ProductController::class, 'store'])->name('product.store');
Route::get('/admin/product/create', [ProductController::class, 'create'])->name('product.create');
Route::get('/admin/product/{id}', [ProductController::class, 'destroy'])->name('product.destroy');
Route::post('/admin/product/{id}', [ProductController::class, 'update'])->name('product.update');
Route::get('/admin/product/{id}/edit', [ProductController::class, 'edit'])->name('product.edit');
