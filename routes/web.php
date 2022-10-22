<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerInsc;
use App\Http\Controllers\ControllerAdd;
use App\Http\Controllers\ProjetController;


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


Route::get('/inscription',[ControllerInsc::class, 'index']);



Route::post('/inscription',[ControllerInsc::class, 'getInscrire']);
Route::get('projets',[ProjetController::class, 'show']);

Route::get('/noveauProjet',[ControllerAdd::class, 'index']);


Route::post('/noveauProjet',[ControllerAdd::class, 'getInscrire']);

Route::get('/', function () {
    return view('home');
});


