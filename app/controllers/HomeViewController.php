<?php 

class HomeViewController extends BaseController {
	public function handleViewLogin()
	{
		try {
			$input = Input::all();

			$credentials = array(
				'email' => $input['email'],
				'password' => $input['password']
			);
			$user = Sentry::authenticate($credentials, false);
			return Redirect::action('HomeViewController@dashboard');
		} catch (Exception $e) {
			$return = array(
				'success' => 0,
				'message' => $e->getMessage()
				);
			return $return;
			
		}
	}

	public function logout()
	{
		Sentry::logout();
		return Redirect::action('HomeController@vRegister');
	}

	public function viewClasses()
	{
		return View::make('user/classes');
	}

	public function dashboard()
	{
		$user = Sentry::getUser();
		$seminars = Seminar::where('user_id', '=', $user->id)->get();
		$list = array();
		foreach($seminars as $seminar)
		{
			$list[] = array(
				'seminar' => $seminar
				);
		}


		$seminars = SeminarUser::where('user_id', '=', $user->id)->get();
		foreach($seminars as $seminar)
		{
			$list[] = array(
				'seminar' => Seminar::find($seminar->seminar_id)
				);
		}
		return View::make('user.dashboard')
			->with('list', $list);
	}

	public function detailClass($seminar_id)
	{
		$seminar = Seminar::find($seminar_id);
		$joins = SeminarUser::where('seminar_id', '=', $seminar_id)->get();
	

		return View::make('seminar/detail')
			->with('joins', $joins)
			->with('seminar', $seminar);
	}
}

