<?php

use App\Http\Controllers\ProfileController;
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


use App\Http\Controllers\SiteController;

use App\Http\Controllers\ServiceController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CommentController;

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

Route::get('/', [SiteController::class, 'home'])->name('site.home');
Route::get('/about', [SiteController::class, 'about'])->name('site.about');
Route::get('/contact', [SiteController::class, 'contact'])->name('site.contact');

// ===== Routes for Service Module =========
Route::get('/services', [ServiceController::class, 'index'])->name('service.index');

Route::middleware(['auth'])->group(function(){
    Route::post('/services', [ServiceController::class, 'store'])->name('service.store');
    Route::get('/services/create', [ServiceController::class, 'create'])->name('service.create');
    Route::get('/services/{id}/edit', [ServiceController::class, 'edit'])->name('service.edit');
    Route::put('/services/{id}', [ServiceController::class, 'update'])->name('service.update');
    Route::delete('/services/{id}', [ServiceController::class, 'destroy'])->name('service.destroy');
    Route::get('/services/{service}', [ServiceController::class, 'show'])->name('service.show');
});
// ===== end routes for Service Module ======

// ===== Routes for category Module =========
Route::resource('categories', CategoryController::class);
// ===== end routes for category Module ======

// ===== Routes for category Module =========
Route::resource('articles', ArticleController::class);
// ===== end routes for category Module ======

// ===== Routes for category Module =========
Route::resource('comments', CommentController::class);
// ===== end routes for category Module ======







Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
