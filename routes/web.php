<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

// Route::view('/', 'welcome');

// Route::view('dashboard', 'userdashboard')
//     ->middleware(['auth', 'verified'])
//     ->name('dashboard');

Route::get('/',[ProductController::class,'dashboard'])->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');



    Route::get('/transactions', [ProductController::class, 'transaction'])->name('transaction');
    Route::get('/products', [ProductController::class, 'index'])->name('products.index');
    Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
    Route::post('/products/store', [ProductController::class, 'store'])->name('products.store');
    // Route::post('/products/store', [ProductController::class, 'store'])->name('products.store');
    Route::get('/products/edit/{product}', [ProductController::class, 'edit'])->name('products.edit');
    Route::get('/products/sale/{product}', [ProductController::class, 'sale'])->name('products.sale');
    Route::post('/products/update/{product}', [ProductController::class, 'update'])->name('products.update');
    Route::get('/products/delete/{product}', [ProductController::class, 'destroy'])->name('products.delete');

require __DIR__.'/auth.php';
