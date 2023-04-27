<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/header', [App\Http\Controllers\HeaderController::class, 'Header'])->name('Header');

Route::get('/filials', [App\Http\Controllers\FilialsController::class, 'filials'])->name('filials');

Route::get('/search', [App\Http\Controllers\CatalogController::class, 'search'])->name('search');


Route::get('/lcb', [App\Http\Controllers\lcabController::class, 'lcb'])->name('lcb');

Route::get('/rdk', [App\Http\Controllers\RdkController::class, 'rdk'])->name('rdk');

Route::get('/pkonf', [App\Http\Controllers\PkonfController::class, 'pkonf'])->name('pkonf');
