<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
	     Schema::create('tasks', function(Blueprint $table)
	    {
	        $table->increments('id');
	        	
	        $table->string('title',100);
	        $table->text('description');
	        $table->integer('status');
	        $table->integer('idList');
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
		// drop
	    Schema::drop('tasks');
	}

}
