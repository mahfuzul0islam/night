<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CommentController;
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



Route::get('/', [App\Http\Controllers\BlogController::class, 'blogs'])->name('welcome');
Route::get('/dashbord/blog', [App\Http\Controllers\BlogController::class, 'dashbordblog'])->name('dashbordblog');
Route::get('/blog', [App\Http\Controllers\BlogController::class, 'welcome'])->name('blog');
Route::get('/blog/create', [App\Http\Controllers\BlogController::class, 'create'])->name('blog.create');
Route::post('/blog/store', [App\Http\Controllers\BlogController::class, 'store'])->name('blog.store');
Route::delete('/blog/delete/{id}', [App\Http\Controllers\BlogController::class, 'delete'])->name('blog.delete');
Route::get('/blog/edit/{id}', [App\Http\Controllers\BlogController::class, 'edit'])->name('blog.edit');
Route::post('/blog/update/{id}', [App\Http\Controllers\BlogController::class, 'update'])->name('blog.update');


Route::get('/profile', [App\Http\Controllers\BlogController::class, 'profile'])->name('profile');
Route::post('/profile/update', [App\Http\Controllers\BlogController::class, 'profileupdate'])->name('profileupdate');



Route::get('/single/blog/{id}', [App\Http\Controllers\CommentController::class, 'singleblog'])->name('singleblog');
Route::post('/blog/{blog}/comment/store/', [App\Http\Controllers\CommentController::class, 'store'])->name('singleblog.store');



//shob category

Route::get('/dashbord/category/create', function () {
    return view('category.create');
})->name('category.create');

Route::get('/dashbord/categories', [CategoriesController::class, 'index'])->name('category.index');

Route::get('/dashbord/category/edit/{id}', [App\Http\Controllers\CategoriesController::class, 'edit'])->name('category.edit');

Route::delete('/dashbord/category/delete/{id}', [App\Http\Controllers\CategoriesController::class, 'delete'])->name('category.delete');

Route::post('/dashbord/category/update/{id}', [App\Http\Controllers\CategoriesController::class, 'update'])->name('category.update');
Route::post('/dashbord/category/store', [App\Http\Controllers\CategoriesController::class, 'store'])->name('category.store');


Auth::routes();

Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('dashbord');