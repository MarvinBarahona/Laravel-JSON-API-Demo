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

/*
 * Agregando las rutas, un resource por cada API registrada.
*/

JsonApi::register('default')->routes(function ($api) {
    $api->resource('farmacias')->relationships(function ($relations) {
        $relations->hasMany('sucursals');
    });
    $api->resource('sucursals')->relationships(function ($relations) {
        $relations->hasOne('farmacia');
    });
});

