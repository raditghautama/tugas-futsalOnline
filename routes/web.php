<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FieldController;
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



Auth::routes(['register' => false]);

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
Route::get('/detail/{slug}', [HomeController::class, 'detail'])->name('detail');
Route::get('/detail/{slug}/booking', [HomeController::class, 'booking'])->name('home.booking');

Route::resource('lapangan', FieldController::class);

Route::resource('kategori', CategoryController::class);

Route::resource('booking', BookingController::class);

Route::get('/booking', [BookingController::class, 'index'])->name('admin.booking');
    Route::put('/booking/{id}', [BookingController::class, 'update'])->name('admin.booking.update');
    // Route::put('/checkout/{id}', [BookingController::class, 'store'])->name('admin.booking.store');
    Route::get('/checkout/{id}', [BookingController::class, 'create'])->name('admin.booking.create');
