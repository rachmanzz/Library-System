<?php
use App\Student;
use App\Borrowing_Record;
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
Route::get('/student/logout',['as'=>'student.logout','uses'=>'StudentController@logout']);
Route::get('/student/{id}/borrow', ['as'=>'student.show', 'uses'=>'StudentController@show']);
Route::post('/student/{id}/borrow', ['as'=>'student.doBorrow', 'uses'=>'StudentController@postBorrow']);
Route::get('/student/{id}/transaction', ['as'=>'student.transaction', 'uses'=>'StudentController@studentHistory']);
Route::post('/student/{id}/transaction', ['as'=>'student.doBorrow', 'uses'=>'StudentController@postBorrow']);
Route::get('/student/{id}/profile',['as'=>'student.profile','uses'=>'StudentController@profile']);
Route::get('/student/{id}/profile/edit',['as'=>'student.editProfile','uses'=>'StudentController@editProfile']);
Route::post('/student/{id}/profile/edit',['as'=>'student.saveProfile','uses'=>'StudentController@saveProfile']);
// Route::post('/student/{id}/profile',['as'=>'student.profile','uses'=>'StudentController@profile']);
Route::group(['middleware'=>'student'], function(){

});		