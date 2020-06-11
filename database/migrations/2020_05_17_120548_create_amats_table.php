<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAmatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('amats', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nosaukums',50);

            $table->unsignedBigInteger('nodala');
            $table->foreign('nodala')->references('id')->on('nodala');

            $table->unsignedBigInteger('depo')->nullable();
            $table->foreign('depo')->references('id')->on('depo');

            $table->float('stundas_likme');

            $table->unsignedBigInteger('darba_pilditajs')->nullable();
            $table->foreign('darba_pilditajs')->references('id')->on('darbinieki');

            $table->date('darba_uzsaksanas_datums')->nullable();
            $table->date('darba_beigsanas_datums')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('amats');
    }
}
