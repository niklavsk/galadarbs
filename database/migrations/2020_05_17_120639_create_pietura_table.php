<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePieturaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pietura', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nosaukums',100);
            $table->foreignId('atrasanas_vieta')->references('id')->on('adrese');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pietura');
    }
}
