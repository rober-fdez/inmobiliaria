<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailPropertyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_property', function (Blueprint $table) {
            $table->id();
            $table->string('description')->nullable();
            $table->foreignId('property_id');
            $table->foreign('property_id')->references('id')->on('properties')->onDelete('cascade');
            $table->foreignId('detail_id');
            $table->foreign('detail_id')->references('id')->on('details')->onDelete('cascade');
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
        Schema::dropIfExists('detail_property');
    }
}
