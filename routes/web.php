<?php

use App\Http\Controllers\backend\CategoryController;
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

Route::get('/admin/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::post('/admin/categories', [CategoryController::class, 'store'])->name('categories.store');
Route::get('/admin/categories/create', [CategoryController::class, 'create'])->name('categories.create');
Route::get('/admin/categories/{id}', [CategoryController::class, 'destroy'])->name('categories.destroy');
Route::post('/admin/categories/{id}', [CategoryController::class, 'update'])->name('categories.update');
Route::get('/admin/categories/{id}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
