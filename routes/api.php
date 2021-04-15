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


Route::get('categoria', 'App\Http\Controllers\controllerCategoria@getCategoria');
Route::get('categoria/{id}', 'App\Http\Controllers\controllerCategoria@getCategoriaxId');
Route::post('addcategoria', 'App\Http\Controllers\controllerCategoria@crearCategoria');
Route::put('updateCategoria/{id}', 'App\Http\Controllers\controllerCategoria@actualizarCategoria');
Route::delete('deleteCategoria/{id}', 'App\Http\Controllers\controllerCategoria@eliminarCategoria');
