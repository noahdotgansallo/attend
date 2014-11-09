<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SeminarTableMake extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('seminar', function($table){
			$table->increments('id');
			$table->string('name');
			$table->string('point1');
			$table->string('point2');
			$table->string('point3');
			$table->string('point4');
			$table->string('room');
			$table->integer('user_id');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropTable('seminar');
	}

}
