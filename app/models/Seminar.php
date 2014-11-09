<?php

class Seminar extends Eloquent {

	protected $table = 'seminar';


	public function user()
	{
		return $this->belongsTo('User', 'user_id');
	}
}