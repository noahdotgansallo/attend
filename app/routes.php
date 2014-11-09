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

Route::any('/login', 'HomeController@login');

/*
	
	@author Noah Gansallo
	@title Create Class/Seminar
	@description Creating a class/seminar
	@parameters: name, room, user_id, point1, point2, point3, point4

*/

Route::any('/create/class', 'SeminarController@create');

/*

	@author Noah Gansallo
	@title Join Class/Seminar
	@description The current user will join the class or seminar

*/

Route::any('/seminar/{seminar_id}', 'SeminarController@joinSeminar');

/*

	@author Noah Gansallo
	@title Created Class list
	@description Get the list of classes that the user has created

*/

Route::any('/cclass', 'SeminarController@cclassList');