<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDarbiniekiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('darbinieki', function (Blueprint $table) {
            //$table->id();
            $table->string('id',20)->primary();
            $table->timestamps();

            $table->string('vards',20);
            $table->string('otrais_vards',20)->nullable();
            $table->string('uzvards',20);
            $table->foreignId('adrese')->references('id')->on('adrese');
            $table->string('talrunis',20)->nullable();
            $table->string('epasts',30)->nullable();
            $table->foreignId('user_id')->nullable()->default(NULL)->references('id')->on('users');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('darbinieki');
    }
}
