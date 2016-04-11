<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/','StaticPageController@index');

Route::get('/student/login','StaticPageController@studentLogin');
Route::post('/student/login',['as'=>'student.doLogin', 'uses'=>'StudentController@postLogin']);

Route::post('/student/logout', ['as'=>'student.logout', 'uses'=>'StudentController@logout']);

Route::get('/student/{id}/borrow', ['as'=>'student.borrow', 'uses'=>'StudentController@borrow']);
Route::post('/student/{id}/borrow', ['as'=>'student.doBorrow', 'uses'=>'StudentController@postBorrow']);

Route::group(['middleware' => 'auth'], function (){
	Route::get('/student/{id}', ['as'=>'student.show', 'uses'=>'StudentController@show']);
});