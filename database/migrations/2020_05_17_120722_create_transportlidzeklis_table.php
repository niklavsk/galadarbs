<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransportlidzeklisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transportlidzeklis', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->date('tehniskas_parbaudes_termins');
            $table->date('pedeja_remonta_datums');
            $table->date('razosanas_datums');
            $table->string('razotajs',50);
            $table->foreignId('depo_nr')->references('id')->on('depo');
            $table->foreignId('marsruta_sakums')->references('id')->on('marsruta_pieturas');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transportlidzeklis');
    }
}
