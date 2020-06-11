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

            Schema::disableForeignKeyConstraints();

            $table->id();
            $table->timestamps();

            $table->string('pk',20);
            $table->string('vards',20);
            $table->string('otrais_vards',20)->nullable();
            $table->string('uzvards',20);

            $table->unsignedBigInteger('adrese');
            $table->foreign('adrese')->references('id')->on('adrese');

            $table->string('talrunis',20)->nullable();
            $table->string('epasts',30)->nullable();

            $table->foreignId('user_id')->nullable()->constrained();

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
