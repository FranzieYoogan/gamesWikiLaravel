<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

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

Route::get('/game', function () {
    return view('game');
});

Route::get('/game2', function () {
    return view('game');
});

Route::get('/header', function () {
    return view('header');
});

Route::get('/', [Controller::class, 'dataMmo']);

Route::post('/game', [Controller::class, 'gameCatch']);

Route::post('/header', [Controller::class, 'gameSearch']);

Route::post('/game2', [Controller::class, 'gameSearch']);




