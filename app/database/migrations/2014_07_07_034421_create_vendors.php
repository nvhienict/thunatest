<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVendors extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('vendors',function($table){
			$table->increments('id');
			$table->string('name');
			$table->mediumText("slogan");
			$table->string('website');
			$table->string('blog');
			$table->string('avatar');
			$table->string("address");
			$table->longText('about_us');
			$table->integer("id_category");
			$table->integer("id_location");
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
		Schema::drop('vendors');
	}

}
