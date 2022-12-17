<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Ruta para el registro del maestro pokemon
Route::post('/maestro', 'App\Http\Controllers\MaestroController@register');

// Ruta para el registro del maestro pokemon
Route::get('/maestros', 'App\Http\Controllers\MaestroController@index');
