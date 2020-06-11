<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarsrutaPieturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marsruta_pieturas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('pieturas_kartas_nr');

            $table->unsignedBigInteger('pietura');
            $table->foreign('pietura')->references('id')->on('pietura');
            $table->unsignedBigInteger('marsruta_id');
            $table->foreign('marsruta_id')->references('id')->on('marsruti');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('marsruta_pieturas');
    }
}
