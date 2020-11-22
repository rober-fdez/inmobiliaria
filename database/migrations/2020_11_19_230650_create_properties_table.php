<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('description')->default("N/A");
            $table->string('name');
            $table->float('price')->nullable();
            $table->string('property_key')->unique();
            $table->string('front_dimension');
            $table->string('fund_dimension');
            $table->foreignId('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreignId('inmuebletype_id');
            $table->foreign('inmuebletype_id')->references('id')->on('inmuebletypes');
            $table->foreignId('operationtype_id');
            $table->foreign('operationtype_id')->references('id')->on('operationtypes');
            $table->foreignId('address_id');
            $table->foreign('address_id')->references('id')->on('addresses');
            $table->timestamps();
            $table->softDeletes();
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
