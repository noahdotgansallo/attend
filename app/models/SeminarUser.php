<?php

class SeminarUser extends Eloquent {

	protected $table = 'seminarUser';


	public function user()
	{
		return $this->belongsTo('Seminar', 'seminar_id');
	}
}