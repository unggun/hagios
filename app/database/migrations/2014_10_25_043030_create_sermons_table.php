<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSermonsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sermons', function($table)
		{
			$table->increments('srId');
			$table->string('srTitle');
			$table->string('srName');
			$table->string('srContent');
			$table->string('srIntro');
			$table->string('srImage');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('sermons');
	}

}
