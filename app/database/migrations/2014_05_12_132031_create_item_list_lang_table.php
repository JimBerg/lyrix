<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemListLangTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{

        Schema::create('language', function($table){
            $table->increments('id');
            $table->string('name');
            $table->string('country_code')->nullable();
            $table->string('codepage')->nullable();
            $table->timestamps();
        });

        Schema::create('items', function($table){
            $table->increments('id');
            $table->integer('language_id')->unsigned();
            $table->foreign('language_id')->references('id')->on('language');
            $table->text('content');
            $table->timestamps();
        });

        Schema::create('lists', function($table){
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('title');
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
        Schema::drop('items');
        Schema::drop('language');
        Schema::drop('lists');
	}

}
