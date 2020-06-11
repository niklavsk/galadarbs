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
            $table->date('pedeja_remonta_datums')->nullable();
            $table->date('razosanas_datums');
            $table->string('razotajs',50);

            $table->unsignedBigInteger('depo_nr');
            $table->foreign('depo_nr')->references('id')->on('depo');
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
        Schema::dropIfExists('transportlidzeklis');
    }
}
