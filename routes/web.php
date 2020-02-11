<?php

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

Route::get('/', function(){
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/projects' , 'HomeController@projects')->name('projects_data');
Route::delete('/destroy_project/{id}' , 'HomeController@destroy_project')->name('destroy_project');
Route::post('/insert_project' , 'HomeController@insert_project')->name('insert_project');

// Route::get('/home', 'HomeController@index')->name('home');
