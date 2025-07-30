<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\Admin\PostController as AdminPostController;
use App\Http\Controllers\Public\PostController as PublicPostController;

Route::get('/', function () {
    return view('frontend.home');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {


    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

     Route::get('category', [CategoryController::class,'index'])->name('category');
    Route::get('category/create', [CategoryController::class,'create'])->name('category.create');
    Route::post('category/store', [CategoryController::class,'store'])->name('category.store');
    Route::get('category/edit/{id}', [CategoryController::class,'edit'])->name('category.edit');
    Route::put('category/update/{id}', [CategoryController::class,'update'])->name('category.update');
    Route::get('category/delete/{id}', [CategoryController::class,'destroy'])->name('category.destroy');



    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
