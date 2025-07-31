<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Backend\PostController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\Backend\SubCategoryController;
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

     Route::get('sub-category', [SubCategoryController::class,'index'])->name('sub-category');
    Route::get('sub-category/create', [SubCategoryController::class,'create'])->name('sub-category.create');
    Route::post('sub-category/store', [SubCategoryController::class,'store'])->name('sub-category.store');
    Route::get('sub-category/edit/{id}', [SubCategoryController::class,'edit'])->name('sub-category.edit');
    Route::put('sub-category/update/{id}', [SubCategoryController::class,'update'])->name('sub-category.update');
    Route::get('sub-category/delete/{id}', [SubCategoryController::class,'destroy'])->name('sub-category.destroy');


     //posts
    Route::get('post', [PostController::class,'index'])->name('post');
    Route::get('post/create', [PostController::class,'create'])->name('post.create');
    Route::post('post/store', [PostController::class,'store'])->name('post.store');
    Route::get('post/edit/{id}', [PostController::class,'edit'])->name('post.edit');
    Route::put('post/update/{id}', [PostController::class,'update'])->name('post.update');
    Route::get('post/delete/{id}', [PostController::class,'destroy'])->name('post.destroy');
       Route::post('get-subcategory', [postController::class,'getSubCategory'])->name('get-subcategory');


    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
