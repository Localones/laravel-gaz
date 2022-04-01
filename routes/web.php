<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\ApplicationZController;
use App\Http\Controllers\Admin\HomeController;

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

//Route::get('/', [OilCardController::class, 'index'])->name('home-page');
Route::get('/', [ApplicationZController::class, 'index'])->name('home-page');
Route::post('/create/zakaz', [ApplicationZController::class, 'store'])->name('home-store');

Route::group(['middleware' => ['role:admin']], function () {
    Route::get('/admin/home', [HomeController::class, 'index'])->name('admin-home');
    Route::resource('/admin/home/card', \App\Http\Controllers\Admin\CardController::class);
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
