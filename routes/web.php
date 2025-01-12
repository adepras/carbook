<?php

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
// Route::middleware(['auth', 'admin'])->group(function () {
//     Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');
// });


Route::get('/', [App\Http\Controllers\Frontend\HomepageController::class, 'index']);
Route::get('/services', [App\Http\Controllers\Frontend\ServiceController::class, 'index']);
Route::get('/cars', [App\Http\Controllers\Frontend\CarController::class, 'index']);
Route::get('/cars/{slug}', [App\Http\Controllers\Frontend\CarController::class, 'show']);
Route::get('/contact', [App\Http\Controllers\Frontend\ContactController::class, 'index']);
