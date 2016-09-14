<?php

use Illuminate\Http\Request;

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

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');


Route::post('pet/create', 'PetController@store');

Route::get('pet/{id}', 'PetController@getPet');
Route::get('pet/all', 'PetController@index');

Route::put('pet/{id}', 'PetController@updatePet');

Route::post('owner/create', 'OwnerController@store');