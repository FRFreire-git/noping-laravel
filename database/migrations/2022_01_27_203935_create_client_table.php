<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('client', function(Blueprint $table)
		{
			$table->string('CPF', 11)->primary()->unique();
			$table->string('NAME', 40)->nullable();
			$table->date('DT_BIRTH')->nullable();
			$table->string('SEX', 9)->nullable();
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
		Schema::drop('client');
	}

}
