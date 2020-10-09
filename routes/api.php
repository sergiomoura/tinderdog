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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/{id}/feed','DogsController@feed');
Route::get('/{id}/matches','DogsController@matches');
Route::get('/users/{id}/dogs','UsersController@dogs');

// 1 - Criar a rota get para /users/{id}/dogs e direciona-la para o UsersController@dogs
// 2 - Criar o controller UsersController
// 3 - Criar o metodo dogs no UsersController
// 4 - Fazer com que o metodo dogs retorne todos os dogs do usuario