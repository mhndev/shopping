<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('products', function(Blueprint $table)
		{
			$table->engine = 'InnoDB';
			$table->increments('id');
			$table->string('name');
			$table->string('persianName');
			$table->string('company');
			$table->float('price');
			$table->float('deals');
			$table->boolean('special');
			$table->boolean('active');
			$table->text('guarantee');
			$table->text('description');
			$table->string('serial');
			$table->text('features');
			$table->text('tecdec');
			$table->string('image_showProduct');
			$table->string('image_products');
			$table->string('image_windows');
			$table->string('image_small1');
			$table->string('image_small2');
			$table->string('image_small3');
			$table->string('image_small4');
			$table->string('image_small5');
			$table->string('image_big1');
			$table->string('image_big2');
			$table->string('image_big3');
			$table->string('image_big4');
			$table->string('image_big5');
			$table->string('video_path1');
			$table->unsignedInteger('category_id');
			$table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
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
		Schema::drop('products');
	}

}
