<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTrip extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Trips', function (Blueprint $table){
            $table->increments('id');
            $table->string('name');
            $table->string('phone');
            $table->string('dateFrom');
            $table->string('dateTo');
            $table->string('origin');
            $table->string('destination');
            $table->integer('numPeople');
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
        Schema::drop('Trips');
    }
}
