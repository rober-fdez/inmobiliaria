<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEquipamentPropertyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipament_property', function (Blueprint $table) {
            $table->id();
            $table->foreignId('property_id');
            $table->foreign('property_id')->references('id')->on('properties')->onDelete('cascade');
            $table->foreignId('equipament_id');
            $table->foreign('equipament_id')->references('id')->on('equipaments')->onDelete('cascade');
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
        Schema::dropIfExists('equipament_property');
    }
}
