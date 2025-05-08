<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\AdminOrderController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use Illuminate\Http\Request;

// Halaman beranda & galeri
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/galeri', [ProductController::class, 'index']);

// Pemesanan
Route::get('/pemesanan', [OrderController::class, 'form'])->name('order.form');
Route::post('/pemesanan/preview', [OrderController::class, 'preview'])->name('order.preview');
Route::post('/pemesanan/submit', [OrderController::class, 'submit'])->name('order.submit');
Route::get('/pemesanan/sukses/{id}', [OrderController::class, 'success'])->name('order.success');

// Lacak pesanan
Route::get('/lacak', [OrderController::class, 'trackPage'])->name('order.trackPage');
Route::post('/lacak', [OrderController::class, 'track'])->name('order.track');
    
Route::get('/admin/login', [LoginController::class, 'showForm'])->name('admin.login');
Route::post('/admin/login', [LoginController::class, 'login'])->name('admin.login.submit');
Route::post('/admin/logout', [LogoutController::class, 'logout'])->name('admin.logout');

// Manajemen Pesanan
Route::prefix('admin/orders')->middleware('admin.only')->group(function () {
    Route::get('/', [AdminOrderController::class, 'index'])->name('admin.orders');
    Route::put('/{order}/status', [AdminOrderController::class, 'updateStatus'])->name('admin.orders.updateStatus');
    Route::put('/{id}/update', [AdminOrderController::class, 'update'])->name('admin.orders.update');
    Route::delete('/{id}', [AdminOrderController::class, 'destroy'])->name('admin.orders.destroy');
});

// Manajemen Galeri Produk
Route::prefix('admin/products')->middleware('admin.only')->group(function () {
    Route::get('/admin/products', [ProductController::class, 'adminIndex'])->name('admin.products');
    Route::post('/admin/products', [ProductController::class, 'store'])->name('admin.products.store');
    Route::delete('/admin/products/{id}', [ProductController::class, 'destroy'])->name('admin.products.destroy');
});
