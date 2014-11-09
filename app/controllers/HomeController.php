<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function register()
	{
		$input = Input::all();

		try {
			$user = Sentry::register(array(
		        'email'    => $input['email'],
		        'password' => $input['password'],
		        'first_name' => $input['firstName'],
		        'last_name' => $input['lastName'],
		        'activated' => 1,
		    ));

		    $return = array(
		    	'success' => 1
		    	);
		    return $return;
			
		} catch (Exception $e) {
			$return = array(
				'success' => 0
				);
			return $return;
			
		}
	}

	public function login()
	{

		try {
			$input = Input::all();

			$credentials = array(
				'email' => $input['email'],
				'password' => $input['password']
			);
			$user = Sentry::authenticate($credentials, false);
			return $user;
		} catch (Exception $e) {
			$return = array(
				'success' => 0
				);
			return $return;
			
		}
	}

}
