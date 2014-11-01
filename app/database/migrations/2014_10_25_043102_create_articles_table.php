<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('articles', function($table)
		{
			$table->increments('aId');
			$table->integer('aType');
			$table->integer('aUserId');
			$table->string('aTitle');
			$table->string('aAuthor');
			$table->string('aContent');
			$table->string('aIntro');
			$table->string('aImage1');
			$table->string('aImage2');
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
		Schema::drop('articles');
	}

}
