<?php

use App\Http\Controllers\KalkulatorController;
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

Route::get('/', function () {
    return view('welcome', [
        "title" => "Halaman Home"
    ]);
});

Route::get('/profil', [KalkulatorController::class, 'profil']);
Route::get('/formpenghitungan', [KalkulatorController::class, 'index']);
Route::get('/kurus', [KalkulatorController::class, 'kurus']);
Route::get('/normal', [KalkulatorController::class, 'normal']);
Route::get('/gemuk', [KalkulatorController::class, 'gemuk']);
Route::get('/obesitas', [KalkulatorController::class, 'obesitas']);

Route::post('/hasilperhitungan', [KalkulatorController::class, 'penghitungan']);
