<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\MainnewController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\OfficeController;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/

Route::prefix('admin')->group(static function () {

    // Guest routes
    Route::middleware('guest:admin')->group(static function () {
        // Auth routes
        Route::get('login', [\App\Http\Controllers\Admin\Auth\AuthenticatedSessionController::class, 'create'])->name('admin.login');
        Route::post('login', [\App\Http\Controllers\Admin\Auth\AuthenticatedSessionController::class, 'store']);
        // Forgot password
        Route::get('forgot-password', [\App\Http\Controllers\Admin\Auth\PasswordResetLinkController::class, 'create'])->name('admin.password.request');
        Route::post('forgot-password', [\App\Http\Controllers\Admin\Auth\PasswordResetLinkController::class, 'store'])->name('admin.password.email');
        // Reset password
        Route::get('reset-password/{token}', [\App\Http\Controllers\Admin\Auth\NewPasswordController::class, 'create'])->name('admin.password.reset');
        Route::post('reset-password', [\App\Http\Controllers\Admin\Auth\NewPasswordController::class, 'store'])->name('admin.password.update');
    });

    // Verify email routes
    Route::middleware(['auth:admin'])->group(static function () {
        Route::get('verify-email', [\App\Http\Controllers\Admin\Auth\EmailVerificationPromptController::class, '__invoke'])->name('admin.verification.notice');
        Route::get('verify-email/{id}/{hash}', [\App\Http\Controllers\Admin\Auth\VerifyEmailController::class, '__invoke'])->middleware(['signed', 'throttle:6,1'])->name('admin.verification.verify');
        Route::post('email/verification-notification', [\App\Http\Controllers\Admin\Auth\EmailVerificationNotificationController::class, 'store'])->middleware('throttle:6,1')->name('admin.verification.send');
    });

    // Authenticated routes
    Route::middleware(['auth:admin', 'verified'])->group(static function () {
        // Confirm password routes
        Route::get('confirm-password', [\App\Http\Controllers\Admin\Auth\ConfirmablePasswordController::class, 'show'])->name('admin.password.confirm');
        Route::post('confirm-password', [\App\Http\Controllers\Admin\Auth\ConfirmablePasswordController::class, 'store']);
        // Logout route
        Route::post('logout', [\App\Http\Controllers\Admin\Auth\AuthenticatedSessionController::class, 'destroy'])->name('admin.logout');
        // General routes
        // Route::get('/', [AdminController::class, 'index'])->name('admin.index');
        // Route::get('profile', [AdminController::class, 'profile'])->middleware('password.confirm.admin')->name('admin.profile');

        
        Route::get('/', [AdminController::class, 'home'])->name('admin.index');;

        Route::get('testimonials', [AdminController::class, 'testimonials']);

        Route::post('publicate-testimonial', [AdminController::class, 'publicate_testimonial']);

        Route::post('delete-testimonial', [AdminController::class, 'delete_testimonial']);


        Route::get('products', [ProductController::class, 'index']);

        Route::get('products/create', [ProductController::class, 'create'])->name('products-create');

        Route::post('products/store', [ProductController::class, 'store'])->name('products-store');

        Route::get('products/{id}/edit', [ProductController::class, 'edit'])->name('products-edit');

        Route::post('products/update', [ProductController::class, 'update'])->name('products-update');

        Route::get('products/{id}/destroy', [ProductController::class, 'destroy'])->name('products-destroy');


        Route::get('stock', [AdminController::class, 'stock']);

        Route::post('stock/update', [AdminController::class, 'stock_update']);


        Route::get('orders', [AdminController::class, 'orders']);

        Route::get('order/{id}', [AdminController::class, 'order']);

        Route::post('order/update', [AdminController::class, 'edit_order'])->name('order-update');


        Route::get('category', [CategoryController::class, 'index']);

        Route::get('category/create', [CategoryController::class, 'create'])->name('category-create');

        Route::post('category/store', [CategoryController::class, 'store'])->name('category-store');

        Route::get('category/{id}/edit', [CategoryController::class, 'edit'])->name('category-edit');

        Route::post('category/update', [CategoryController::class, 'update'])->name('category-update');

        Route::get('subcategory/create', [CategoryController::class, 'subcategory_create'])->name('subcategory-create');


        Route::get('novosti', [MainnewController::class, 'index']);

        Route::get('novosti/create', [MainnewController::class, 'create'])->name('novosti-create');

        Route::post('novosti/store', [MainnewController::class, 'store'])->name('novosti-store');

        Route::get('novosti/{id}/edit', [MainnewController::class, 'edit'])->name('novosti-edit');

        Route::post('novosti/update', [MainnewController::class, 'update'])->name('novosti-update');

        Route::get('novosti/{id}/destroy', [MainnewController::class, 'destroy'])->name('novosti-destroy');


        Route::get('cities', [CityController::class, 'index']);

        Route::get('cities/create', [CityController::class, 'create'])->name('cities-create');

        Route::post('cities/store', [CityController::class, 'store'])->name('cities-store');

        Route::get('cities/{id}/edit', [CityController::class, 'edit'])->name('cities-edit');

        Route::post('cities/update', [CityController::class, 'update'])->name('cities-update');


        Route::get('offices', [OfficeController::class, 'index']);

        Route::get('offices/create', [OfficeController::class, 'create'])->name('offices-create');

        Route::post('offices/store', [OfficeController::class, 'store'])->name('offices-store');

        Route::get('offices/{id}/edit', [OfficeController::class, 'edit'])->name('offices-edit');

        Route::post('offices/update', [OfficeController::class, 'update'])->name('offices-update');


        Route::get('o-kompanii', [AdminController::class, 'o_kompanii']);

        Route::post('o-kompanii-update', [AdminController::class, 'o_kompanii_update']);

        Route::get('stat-partnerom', [AdminController::class, 'stat_partnerom']);

        Route::post('stat-partnerom-update', [AdminController::class, 'stat_partnerom_update']);


        Route::post('/dashboard/tinyfileupload', [AdminController::class, 'tiny_file_upload']);

    });
});

