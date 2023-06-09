<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FotoController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/foto', function () {
    return view('foto.index');
});

Route::get('/foto/create', [FotoController::class, 'create']);

Route::resource('foto', FotoController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
