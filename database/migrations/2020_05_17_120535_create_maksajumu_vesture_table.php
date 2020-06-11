<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaksajumuVestureTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maksajumu_vesture', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->unsignedBigInteger('pers_kods');
            $table->foreign('pers_kods')->references('id')->on('darbinieki');
            $table->unsignedBigInteger('amats');
            $table->foreign('amats')->references('id')->on('amats');

            $table->float('likme');
            $table->integer('stundu_sk');
            $table->date('izsniegsanas_datums');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('maksajumu_vesture');
    }
}
