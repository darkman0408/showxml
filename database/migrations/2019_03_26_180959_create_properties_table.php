<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date_listed');
            $table->string('property_type');
            $table->string('listing_type');
            $table->integer('property_size');
            $table->integer('land_size');
            $table->decimal('price', 10, 2);
            $table->string('title');
            $table->text('description');
            $table->string('title_en')->nullable();
            $table->text('description_en')->nullable();
            $table->string('title_de')->nullable();
            $table->text('description_de')->nullable();
            $table->string('link');
            $table->string('energy_efficiency');
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('properties');
    }
}
