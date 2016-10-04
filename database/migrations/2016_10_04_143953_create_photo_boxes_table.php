<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhotoBoxesTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('photo_boxes', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('box_id')->unsigned();
            $table->string('path'); //ver melhor forma de salvar imagem

            $table->timestamps();

            $table->index('id');

            $table->foreign('box_id')
                  ->references('id')->on('boxes')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
	    Schema::table('photo_boxes', function (Blueprint $table){
	        $table->dropForeign('photo_boxes_box_id_foreign');
            $table->dropColumn('box_id');
        });

		Schema::drop('photo_boxes');
	}

}
