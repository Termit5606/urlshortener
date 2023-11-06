<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\RedirectController;
use App\Http\Controllers\ShortenerController;
use Illuminate\Support\Facades\App;
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

Route::get('/', [IndexController::class, 'index'])->name('index');

Route::post('/short', [ShortenerController::class, 'store'])->name('short');

Route::get('/language/set/{locale}', [LanguageController::class, 'changeLocale'])->name('language.set');

// Must be the last route
Route::get('/{code}', [RedirectController::class, 'redirectByCode'])->name('redirect.code');