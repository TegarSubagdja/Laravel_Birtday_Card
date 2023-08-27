<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VeniController;

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
    return view('index');
});

Route::get('/mau/{id}', [VeniController::class, 'mau'])->name('mau');

Route::get('/ga/{id}', [VeniController::class, 'ga'])->name('ga');

Route::get('/input/{id}', [VeniController::class, 'input'])->name('input');

Route::get('/thank', [VeniController::class, 'thank'])->name('thank');

Route::get('/home', function () {
    return view('home');
})->name('home');
