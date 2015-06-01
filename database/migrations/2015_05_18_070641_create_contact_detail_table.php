<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactDetailTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('contact_deatils', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('contact_id')->unsigned();
			$table->foreign('contact_id')->references('id')->on('contacts');
			$table->string('image');
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
		Schema::drop('contact_deatils');
	}

}
