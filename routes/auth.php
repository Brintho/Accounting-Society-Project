<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrganizationTypeController;
use App\Http\Controllers\PriceController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::get('register', [RegisteredUserController::class, 'create'])
        ->name('register');

    Route::post('register', [RegisteredUserController::class, 'store']);

    Route::get('login', [AuthenticatedSessionController::class, 'create'])
        ->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store']);

    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
        ->name('password.request');

    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
        ->name('password.email');

    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
        ->name('password.reset');

    Route::post('reset-password', [NewPasswordController::class, 'store'])
        ->name('password.store');
});

Route::middleware('auth')->group(function () {
    Route::get('verify-email', EmailVerificationPromptController::class)
        ->name('verification.notice');

    Route::get('verify-email/{id}/{hash}', VerifyEmailController::class)
        ->middleware(['signed', 'throttle:6,1'])
        ->name('verification.verify');

    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
        ->middleware('throttle:6,1')
        ->name('verification.send');

    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
        ->name('password.confirm');

    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::put('password', [PasswordController::class, 'update'])->name('password.update');

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
        ->name('logout');

    Route::controller(PriceController::class)->group(function () {
        Route::get('price/list', 'list')->name('price.list');
        Route::get('create', 'create')->name('price.create');
        Route::post('store', 'store')->name('price.store');
        Route::get('price/{id}/edit', 'edit')->name('price.edit');
        Route::patch('price/{id}', 'update')->name('price.update');
        Route::get('price/{id}', 'delete')->name('price.delete');

    });
    Route::controller(HomeController::class)->group(function () {
        Route::get('home/list', 'list')->name('home.list');
        Route::get('home/create', 'create')->name('home.create');
        Route::post('home/store', 'store')->name('home.store');
        Route::get('home/{id}/edit', 'edit')->name('home.edit');
        Route::patch('home/{id}', 'update')->name('home.update');
        Route::get('home/{id}', 'delete')->name('home.delete');;
    });

    Route::controller(OrganizationTypeController::class)->group(function () {
        Route::get('/organizations', 'index')->name('organization.index');
        Route::get('/organizations/create', 'create')->name('organization.create');
        Route::post('/organizations/store', 'store')->name('organization.store');
        Route::get('/organizations/edit/{id}', 'edit')->name('organization.edit');
        Route::post('/organizations/update/{id}', 'update')->name('organization.update');
        Route::delete('/organizations/delete/{id}', 'destroy')->name('organization.destroy');
    });

    Route::controller(OrderController::class)->group(function () {
        Route::get('/orders', 'index')->name('orders.index');
        Route::get('/orders/{order}', 'show')->name('orders.show');
        Route::get('/orders/{order}/edit', 'edit')->name('orders.edit');
        Route::put('/orders/{order}', 'update')->name('orders.update');
        Route::delete('/orders/{order}', 'destroy')->name('orders.destroy');
    });

});
