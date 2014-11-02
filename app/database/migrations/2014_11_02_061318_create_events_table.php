<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('events', function($table){
         $table->increments('id');
         $table->integer('eType');
         $table->string('eName');
         $table->string('eSlug')->unique();
         $table->string('eDesc');
         $table->string('eImage');
         $table->dateTime('eExpire_at');
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
		Schema::drop('events');
	}

}
