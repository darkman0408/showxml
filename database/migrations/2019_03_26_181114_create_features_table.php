<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeaturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('features', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('property_id')->unsigned();
            $table->integer('bedrooms')->unsigned()->nullable();
            $table->integer('bathrooms')->unsigned()->nullable();
            $table->integer('rooms')->unsigned()->nullable();
            $table->string('condition')->nullable();
            $table->string('age')->nullable();
            $table->string('floor')->nullable();
            //$table->timestamps();

            $table->foreign('property_id')->references('id')->on('properties');

            $table->dropForeign('features_property_id_foreign');
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
        Schema::dropIfExists('features');
    }
}
