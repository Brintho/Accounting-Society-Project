<?php

use App\Http\Controllers\DemoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PriceController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/admin/home', 'list')->name('home.list');
    Route::get('/admin/home/create', 'create')->name('home.create');
    Route::post('/admin/home', 'store')->name('home.store');
    Route::get('/admin/home/{id}/edit', 'edit')->name('home.edit');
    Route::put('/admin/home/{id}', 'update')->name('home.update');
    Route::delete('/admin/home/{id}', 'delete')->name('home.delete');
});

Route::controller(PriceController::class)->group(function () {
    Route::get('/price', 'index')->name('price');

});

Route::controller(DemoController::class)->group(function () {
    Route::get('demo', 'index')->name('demo');
    Route::post('demo/store', 'store')->name('demo.store');

    // Admin routes
    Route::get('admin/demo', 'list')->name('demo.list');
    Route::get('admin/demo/{id}', 'show')->name('demo.show');
    Route::get('admin/demo/{id}/edit', 'edit')->name('demo.edit');
    Route::put('admin/demo/{id}', 'update')->name('demo.update');
    Route::delete('admin/demo/{id}', 'destroy')->name('demo.destroy');
    Route::patch('admin/demo/{id}/status', 'updateStatus')->name('demo.status.update');
});

// Frontend Order Routes
Route::controller(OrderController::class)->group(function () {
    Route::get('/order', 'create')->name('order.create');
    Route::post('/order', 'store')->name('order.store');
    Route::get('/order/success', function () {
        return view('frontend.order-success');
    })->name('order.success');
});

// Admin routes with auth middleware
Route::middleware('auth')->group(function () {
    Route::controller(OrderController::class)->group(function () {
        Route::get('/admin/orders', 'index')->name('orders.index');
        Route::get('/admin/orders/{order}', 'show')->name('orders.show');
        Route::patch('/admin/orders/{order}/status', 'updateStatus')->name('orders.status.update');
    });
});

Route::get('/client', function () {
    return view('frontend.client');
})->name('client');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
