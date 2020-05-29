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
            $table->id();
            $table->timestamps();

            $table->string('pk',20);
            $table->string('vards',20);
            $table->string('otrais_vards',20)->nullable();
            $table->string('uzvards',20);
            $table->foreignId('adrese')->references('id')->on('adrese')->constrained();
            $table->string('talrunis',20)->nullable();
            $table->string('epasts',30)->nullable();
            $table->foreignId('user_id')->nullable()->default(NULL)->references('id')->on('users')->constrained();

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
