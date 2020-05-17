<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdreseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adrese', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('valsts',20);
            $table->string('novads',20);
            $table->string('pilseta',30);
            $table->string('iela',30);
            $table->string('majas_nr',10);
            $table->string('pagasts',30);
            $table->string('majas_nosaukums',20);
            $table->string('pasta_indekss',10);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('adrese');
    }
}
