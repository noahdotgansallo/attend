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
				'success' => 0,
				'error' => $e->getMessage()
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


		$seminars = SeminarUser::where('user_id', '=', $user->id)->get();
		foreach($seminars as $seminar)
		{
			$list[] = array(
				'seminar' => Seminar::find($seminar->seminar_id)
				);
		}
		return $list;
	}

	public function joinSeminar($seminar_id)
	{
		$user = Sentry::getUser();
		$test = SeminarUser::where('user_id', '=', $user->id)->where('seminar_id', '=', $seminar_id)->first();
		if(is_null($test))
		{
			try {
				$join = new SeminarUser;
				$join->user_id = $user->id;
				$join->seminar_id = $seminar_id;
				$join->status = 0;
				$join->save();

				$return = array(
					'join' => $join,
					'seminar' => Seminar::find($seminar_id)
					);
				return $return;
			} catch (Exception $e) {
				$return = array(
					'success' => 0
					);
				return $return;		
				
			}
		} else {
			$return = array(
				'success' => 0,
				'message' => 'You are already going to this Seminar'
 				);
			return $return;
		}


	}

	public function search()
	{
		$input = Input::all();
		try {
			$results = Seminar::where('name', 'like', '%'.$input['q'].'%')->get();
			$infoArray = array();
			foreach($results as $result)
			{
				$infoArray[] = array(
					'seminar' => $result
					);
			}
			if(empty($infoArray))
			{
				$return = array(
					'success' => 0,
					'message' => 'No results found'
					);
				return $return;
			}
			return $infoArray;
			
		} catch (Exception $e) {
			$return = array(
				'success' => 0,
				'message' => $e->getMessage()
 				);
			return $return;
			
		}
	}

	public function detail($seminar_id)
	{
		$seminar = Seminar::find($seminar_id);
		$joins = SeminarUser::where('seminar_id', '=', $seminar_id)->get();
		$userArray = array();
		foreach($joins as $join)
		{

			$userArray[] = array(
				'join' => $join,
				'user' => User::find($join->user_id)
				);
		}
		return $userArray;
	}

	public function check($seminar_id)
	{
		$input = Input::all();
		$seminar = Seminar::find($seminar_id);
		$point1 = explode(':', $seminar->point1);
		dd($point1);
	}
	
}