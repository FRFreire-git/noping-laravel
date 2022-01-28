<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('product', function(Blueprint $table)
		{
			$table->integer('BAR_CODE')->primary()->unique();
			$table->char('CNPJ', 14)->nullable();
			$table->string('TITLE', 50)->nullable();
			$table->date('RELEASE_DT')->nullable();
			$table->string('COVER')->nullable();
			$table->float('PRICE', 10, 0)->nullable();
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
		Schema::drop('product');
	}

}
