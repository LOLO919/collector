<?php

use App\Http\Controllers\DollController;
use App\Http\Controllers\StaticPageController;
use App\Http\Controllers\WelcomeController;
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
Route::get('/', [WelcomeController::class, 'index'])->name('welcome');
Route::get('/dolls/{doll}', [DollController::class, 'show'])->name('dolls.show');
Route::get('/pages/{staticPage}', [StaticPageController::class, 'show']);

