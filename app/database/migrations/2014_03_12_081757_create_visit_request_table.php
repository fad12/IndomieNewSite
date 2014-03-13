<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVisitRequestTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('visit_request', function(Blueprint $table) {
			$table->increments('id');
			$table->string('title');
			$table->string('position');
			$table->string('email');
			$table->string('mobile');
			$table->string('visit_date');
			$table->string('visit_date_2');
			$table->string('visit_type');
			$table->string('visitors_numper');
			$table->text('note');
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
		Schema::drop('visit_request');
	}

}
