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
            $table->foreignId('nodalas_vaditajs')->nullable()->references('id')->on('darbinieki')->constrained();
            $table->foreignId('atrasanas_vieta')->references('id')->on('adrese')->constrained();
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
