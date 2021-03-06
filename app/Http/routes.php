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



Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');
Route::get('aboutus', 'AboutusController@index');


Route::get('admin', 'AdminController@index');
/* 
 start route for Admin 
 Route::get('home', function(){
	return Redirect::to('admin');
});
Route::get('/', function(){
	return Redirect::to('admin');
}); End route for Admin */

Route::get('home', 'HomeController@index');
Route::get('contacts', 'ContactController@index');
Route::get('contacts/add', 'ContactController@add');
Route::get('contacts/delete/{id}', 'ContactController@delete');
Route::post('contacts/contact_add', 'ContactController@add_contact');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
