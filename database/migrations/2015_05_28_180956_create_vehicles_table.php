<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehiclesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('vehicle',function(Blueprint $table) {
            $table->increments('id');
            $table->integer('client_id')->unsigned();
            $table->integer('vehicle_version_id')->unsigned();
            $table->integer('model');
            $table->string('fuel_type');
            $table->timestamps();

            $table -> foreign('client_id')->references ('id') ->on('clients');
            $table -> foreign('vehicle_version_id')->references ('id') ->on('vehicle_versions');
        });
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::drop('vehicle');
	}

}
