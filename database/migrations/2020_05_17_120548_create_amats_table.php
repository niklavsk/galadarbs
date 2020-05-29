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
            $table->foreignId('nodala')->references('id')->on('nodala');
            $table->foreignId('depo')->nullable()->references('id')->on('depo');
            $table->float('stundas_likme');
            $table->string('darba_pilditajs',20)->nullable()->references('id')->on('darbinieki');
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
