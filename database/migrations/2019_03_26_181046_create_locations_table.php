<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('property_id')->unsigned();
            $table->string('location_postal_code');
            $table->string('location_city');
            $table->string('location_address')->nullable();
            $table->string('geox')->nullable();
            $table->string('geoy')->nullable();
            //$table->timestamps();

            $table->foreign('property_id')->references('id')->on('properties');

            $table->dropForeign('locations_property_id_foreign');
            $table->foreign('property_id')->references('id')->on('properties')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('locations');
    }
}
