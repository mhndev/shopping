<?php

use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function($table){
			$table->increments('id');
			$table->string('firstname', 20)->nullable()->default(NULL);
			$table->string('lastname', 20)->nullable()->default(NULL);
			$table->string('email', 100)->unique();
			$table->string('mobile', 20)->unique();
			$table->dateTime('lastlogin');
			$table->boolean('enable');
			$table->string('password', 64);
			$table->string('remember_token',100);
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
		Schema::drop('users');
	}

}