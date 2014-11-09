<?php

class SeminarController extends BaseController {

	public function create()
	{
		$user = Sentry::getUser();
		try {
			$input = Input::all();
			$seminar = new Seminar;
			$seminar->name = $input['name'];
			$seminar->room = $input['room'];
			$seminar->user_id = $user->id;
			$seminar->point1 = $input['point1'];
			$seminar->point2 = $input['point2'];
			$seminar->point3 = $input['point3'];
			$seminar->point4 = $input['point4'];
			$seminar->save();
			$return = array(
				'success' => 1,
				'seminar' => $seminar
				);
			return $return;
		} catch (Exception $e) {
			$return = array(
				'success' => 0
				);
			return $return;			
		}
	}

	public function cclassList()
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
		return $list;
	}

	public function joinSeminar($seminar_id)
	{
		
	}
}