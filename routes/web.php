<?php

use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\KategoriController;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('kategori', KategoriController::class);
Route::get('/delkat/{kategori}', [KategoriController::class, 'destroy']);

Route::resource('/artikel', ArtikelController::class);


