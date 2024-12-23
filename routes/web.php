<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::prefix('user')->group(function () {
    Route::get('/', [App\Http\Controllers\UserController::class, 'index'])->name('user.index');
    Route::get('/create', [App\Http\Controllers\UserController::class, 'create'])->name('user.create');
    Route::post('/store', [App\Http\Controllers\UserController::class, 'store'])->name('user.store');
    Route::get('/edit/{id}', [App\Http\Controllers\UserController::class, 'edit'])->name('user.edit');
    Route::post('/update/{id}', [App\Http\Controllers\UserController::class, 'update'])->name('user.update');
    Route::get('/destroy/{id}', [App\Http\Controllers\UserController::class, 'destroy'])->name('user.destroy');
});

Route::prefix('eval-wi')->group(function () {
    Route::get('/', [App\Http\Controllers\EvaluasiController::class, 'indexWI'])->name('eval-wi.index');
    Route::get('/create', [App\Http\Controllers\EvaluasiController::class, 'createWI'])->name('eval-wi.create');
    Route::post('/store', [App\Http\Controllers\EvaluasiController::class, 'storeWI'])->name('eval-wi.store');
    Route::get('/edit/{id}', [App\Http\Controllers\EvaluasiController::class, 'editWI'])->name('eval-wi.edit');
    Route::post('/update/{id}', [App\Http\Controllers\EvaluasiController::class, 'updateWI'])->name('eval-wi.update');
    Route::get('/destroy/{id}', [App\Http\Controllers\EvaluasiController::class, 'destroyWI'])->name('eval-wi.destroy');
});