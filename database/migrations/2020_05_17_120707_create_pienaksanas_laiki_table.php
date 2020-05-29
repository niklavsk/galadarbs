<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePienaksanasLaikiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pienaksanas_laiki', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('marsruta_pietura')->references('id')->on('marsruta_pieturas')->constrained();
            $table->time('laiks');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pienaksanas_laiki');
    }
}
