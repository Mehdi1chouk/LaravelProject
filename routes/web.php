<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\Auth\LoginController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', [RegisterController::class, 'create'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);





    

Route::get('/login', [LoginController::class, 'create'])->name('login');
Route::post('/login', [LoginController::class, 'store']);
Route::post('/logout', [LoginController::class, 'destroy'])->name('logout');


Route::get('/dashboard', function () {return view('dashboard');})->name('dashboard');

Route::get('/dashboardadmin', function () {return view('dashboardadmin');})->name('dashboardadmin');

Route::resource("admin/products", ProductController::class)->names('index');
Route::resource("admin/products", ProductController::class)->names('create');
Route::resource("admin/products", ProductController::class)->names('store');
Route::get('admin/products/{product}/edit', [ProductController::class, 'edit'])->name('edit');
Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('destroy');
Route::put('/products/{product}', [ProductController::class, 'update'])->name('update');

Route::get('/{category}', [ProductController::class, 'productsByCategory'])->name('category');
Route::get('/products/{product}', [ProductController::class, 'show'])->name('details');


Route::get('/products/{product}/payment', [ProductController::class, 'payment'])->name('paiement');
Route::post('/orders/{productId}', [PaymentController::class, 'store'])->name('payment.store');







