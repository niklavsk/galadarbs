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
            $table->string('otrais_vards',20);
            $table->string('uzvards',20);
            $table->foreignId('adrese');
            $table->string('talrunis',20);
            $table->string('epasts',30);
            $table->foreignId('user_id');

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
