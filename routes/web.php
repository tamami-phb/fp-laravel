<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MahasiswaController;

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

Route::get('/greeting', function() {
    return "Halo semua";
});

Route::get('/user', [UserController::class, 'index']);

Route::get('/user/{nim}/{name}/{class}', [UserController::class, 'bio']);

//Route::post('/user', [UserController::class, 'bioPost']);
Route::post('/user', [UserController::class, 'bioPost']);

Route::get('/users', [ UserController::class, 'getUser' ]);

Route::get('/daftar-mahasiswa', [ MahasiswaController::class, 'index' ]);

Route::get('/input', function() {
    return view('input');
});

Route::post('/input', [ MahasiswaController::class, 'save' ]);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
