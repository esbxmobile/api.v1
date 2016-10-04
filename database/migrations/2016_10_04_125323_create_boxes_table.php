<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBoxesTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('boxes', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->boolean('is_available');
            $table->boolean('is_covered');
            $table->boolean('is_prebook');
            $table->boolean('is_routine');
            $table->boolean('has_priceday');
            $table->decimal('price_hour', 5,2)->unsigned();
            $table->decimal('price_day',5,2)->unsigned();
            $table->decimal('price_month',5,2)->unsigned();
            $table->decimal('price_routine',5,2)->unsigned();
            $table->char('size', 3)->default('s');
            $table->string('lat');
            $table->string('lng');
            $table->string('street')->nullable();
            $table->string('district')->nullable();
            $table->string('city')->nullable();
            $table->string('country')->nullable();
            $table->string('number')->nullable();
            $table->string('zipcode');
            $table->timestamps();

            $table->index('id');
            $table->index('user_id');

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
	    Schema::table('boxes', function (Blueprint $table){
	        $table->dropForeign('boxes_user_id_foreign');
            $table->dropColumn('user_id');
        });

		Schema::drop('boxes');
	}

}
