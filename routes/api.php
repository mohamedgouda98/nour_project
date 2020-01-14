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

Route::get('list' , 'DataController@data');

Route::post('insert_form' , 'DataController@insert_form');

// Route::group([
//     'middleware' => 'api',
//     'prefix' =>'data'
// ],function(){
//     Route::get('data' , 'DataController@data');

// });
