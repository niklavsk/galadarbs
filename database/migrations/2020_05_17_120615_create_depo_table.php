<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('depo', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('apraksts',200);

            $table->unsignedBigInteger('depo_vaditajs')->nullable();
            $table->foreign('depo_vaditajs')->references('id')->on('darbinieki');
            $table->unsignedBigInteger('atrasanas_vieta');
            $table->foreign('atrasanas_vieta')->references('id')->on('adrese');

            $table->string('epasts',30);
            $table->string('kontakttalrunis',20);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('depo');
    }
}
