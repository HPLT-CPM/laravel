<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TestController;
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

Route::get('/', [MainController::class, 'showIndex'])->name('home');

Route::get('/array', [MainController::class, 'showArray'])->name('array');

Route::get('/array/shuffle', [MainController::class, 'shuffleArray'])->name('array.shuffle');
Route::get('/array/sort', [MainController::class, 'sortArray'])->name('array.sort');
Route::get('/array/filter', [MainController::class, 'filterArray'])->name('array.filter');

Route::get('/products',[ProductController::class, 'index'])->name('products.index');

Route::get('/products/create',[ProductController::class,'create'])->name('products.create');

Route::post('/products',[ProductController::class,'store'])->name('products.store');

Route::get('/products/{product}',[ProductController::class,'show'])->name('products.show');

Route::get('/product/{product}/edit',[ProductController::class,'edit'])->name('products.edit');

Route::put('/products/{product}',[ProductController::class, 'update'])->name('products.update');

Route::delete('/products/{product}',[ProductController::class, 'destroy'])->name('products.destroy');
