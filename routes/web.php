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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/reg', 'RegController@index')->name('reg.index');
Route::post('/reg', 'RegController@register');




Route::get('/login', 'LoginController@index')->name('login.index');
Route::post('/login', 'LoginController@verify');
Route::get('/logout', 'LogoutController@index');


Route::get('/home', ['as'=>'home.index','uses'=>'HomeController@index']);
Route::get('/student/userList', ['as'=>'student.index','uses'=>'StudentController@index']);	

///scout///

            Route::get('/scout/scoutList', ['as'=>'scout.index','uses'=>'ScoutController@index']);	
            Route::get('/scout/details/{id}', 'ScoutController@details')->name('scout.details');

			Route::get('/scout/add', 'ScoutController@add')->name('scout.add');
			Route::post('/scout/add', 'ScoutController@insert');



            Route::get('/scout/edit/{id}', 'ScoutController@edit')->name('scout.edit');
			Route::post('/scout/edit/{id}', 'ScoutController@update')->name('scout.update');

			Route::get('/scout/delete/{id}', 'ScoutController@delete')->name('scout.delete');
			Route::post('/scout/delete/{id}', 'ScoutController@destroy')->name('employer.destroy');



			////general user///


			 Route::get('/guser/guserList', ['as'=>'guser.index','uses'=>'GeneraluserController@index']);	
            Route::get('/guser/details/{id}', 'GeneraluserController@details')->name('guser.details');

			Route::get('/guser/add', 'GeneraluserController@add')->name('guser.add');
			Route::post('/guser/add', 'GeneraluserController@insert');



            Route::get('/guser/edit/{id}', 'GeneraluserController@edit')->name('guser.edit');
			Route::post('/guser/edit/{id}', 'GeneraluserController@update')->name('guser.update');

			Route::get('/guser/delete/{id}', 'GeneraluserController@delete')->name('guser.delete');
			Route::post('/guser/delete/{id}', 'GeneraluserController@destroy')->name('guser.destroy');

