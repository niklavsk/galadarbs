<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNodalaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nodala', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('apraksts',50);
            $table->string('nodalas_vaditajs',20)->nullable()->references('id')->on('darbinieki');
            $table->foreignId('atrasanas_vieta')->references('id')->on('adrese');
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
        Schema::dropIfExists('nodala');
    }
}
