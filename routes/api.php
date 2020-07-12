<?php

use Illuminate\Http\Request;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('/equipos','API\EquipoController@index');
// Route::get('/equipos/{equipo}','API\EquipoController@show');
// Route::get('/equipos','API\EquipoController@store');
Route::apiResource('/equipos','API\EquipoController')->parameters(['selecciones'=>'seleccion']);

// Route::get('/partidos','API\PartidoController@index');
// Route::get('/partidos/{partido}','API\PartidoController@show');
// Route::get('/partidos','API\PartidoController@store');
Route::apiResource('/partidos','API\PartidoController')->parameters(['partidos'=>'partido']);
