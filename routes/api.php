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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('insert_form' , 'DataController@insert_form');

Route::get('projects_names' , 'DataController@projects_names');

Route::get('all_fovrites' , 'DataController@all_fovrites');

Route::post('add_fovrite' , 'DataController@add_fovrite');

Route::delete('delete_fovrite/{id}' , 'DataController@delete_fovrite');

Route::group([

    'middleware' => 'api',
     'prefix' => 'auth'

], function ($router) {

    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');
    Route::post('register', 'AuthController@register');
    Route::patch('update', 'AuthController@update');


});
