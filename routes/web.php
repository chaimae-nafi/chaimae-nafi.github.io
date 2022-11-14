<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usersController;
use App\Http\Controllers\clientController;
use App\Http\Controllers\notificationController;
use App\Http\Controllers\adhesionController;

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
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});
Route::post('registerstore', [usersController::class, 'store'])->name('registerstore');
Route::post('logincheck', [usersController::class, 'login'])->name('logincheck');
Route::get('/reception/home', [clientController::class, 'index'])->name('receptionhome');
Route::get('/reception/client', [clientController::class, 'fetchclients'] )->name('receptionclient');
Route::get('/reception/rdv', [clientController::class, 'fetchrdv'])->name('receptionrdv');
Route::post('addclient', [clientController::class, 'store'])->name('addclient');
Route::post('bookrdv', [clientController::class, 'bookrdv'])->name('bookrdv');
Route::get('/reservation', [notificationController::class, 'index'])->name('reservation');
Route::post('searchadh', [notificationController::class, 'searchadh'])->name('searchadh');
Route::post('addadh', [adhesionController::class, 'store'])->name('addadh');
Route::get('planning', [adhesionController::class, 'index'])->name('planning');
Route::get('bookplanning/{$adhnum}', [adhesionController::class, 'show'])->name('bookplanning');
