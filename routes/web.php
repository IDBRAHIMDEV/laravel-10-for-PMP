<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;

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

Route::get('/', [SiteController::class, 'home']);

Route::get('/about', [SiteController::class, 'about']);

Route::get('/services', [SiteController::class, 'services']);

Route::get('/contact', [SiteController::class, 'contact']);

Route::get('/service/{service}', [SiteController::class, 'show']);




