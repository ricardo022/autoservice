<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehicleVersionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('vehicle_versions',function(Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('vehicle_line_id')->unsigned();
            $table->integer('cilindraje')->default(0);
            $table->integer('modelFirts')->default(0);
            $table->integer('modelEnd')->default(0);
            $table->integer('capacity')->default(0);

            $table->foreign('vehicle_line_id')->references('id')->on('vehicle_lines');
            //$table -> foreign('vehicle_line_id')->references('id')->on('vehicle_lines');
            $table->timestamps();

        } );
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::drop('vehicle_versions');
	}

}
