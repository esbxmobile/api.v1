<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehiclesTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('vehicles', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('model');
            $table->string('color');
            $table->string('license')->unique();
            $table->char('size',3)->default('s');
            $table->string('type');
            $table->timestamps();

            $table->foreign('user_id')
                  ->references('id')->on('users')
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
        Schema::table('vehicles', function (Blueprint $table){
            $table->dropForeign('vehicles_user_id_foreign');
            $table->dropColumn('user_id');
        });

		Schema::drop('vehicles');
	}

}
