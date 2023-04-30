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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('client', ClientController::class);
Route::resource('logement', LogementController::class);
Route::resource('agence', AgenceController::class);
Route::resource('cite', CiteController::class);
Route::resource('terrain', TerrainController::class);
Route::resource('acheter', AcheterController::class);
