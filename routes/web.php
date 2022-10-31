<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\KeywordController;


Route::middleware('splade')->group(function () {
    Route::spladeTable();

    Route::get('/', function () {
        return view('welcome');
    });

    Route::middleware('auth')->group(function () {
        Route::name('profile.')->group(function () {
            Route::get('/profile/{user}', [UserController::class, 'show'])->name('user.show');
            Route::post('profile/{user}', [UserController::class, 'updateProfile'])->name('user.update');
        });

        Route::prefix('admin')->name('admin.')->group(function () {
            Route::get('/dashboard', function () {
                return view('admin.dashboard');
            })->name('dashboard');
            Route::resource('users',UserController::class);
            Route::resource('roles',RoleController::class);
            Route::resource('permissions',PermissionController::class);
            Route::resource('keywords',KeywordController::class);
        });


    });


    require __DIR__ . '/auth.php';
});
