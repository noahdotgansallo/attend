<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

/*

	@author Noah Gansallo
	@title Register
	@description Registering a user into the application
	@parameters: email, password, firstName, lastName
	@sample 

*/

Route::any('/', 'HomeController@register');

/*
	
	@author Noah Gansallo
	@title Login
	@description Logging in a user
	@parameters: email, password

*/

Route::any('/', 'HomeController@login');
