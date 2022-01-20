<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVacaturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vacatures', function (Blueprint $table) {
            $table->id('vacature_id');
            $table->string('business_id'); //TODO MAKE AS A FK IS ID FROM BEDRIJF
            $table->string('type-opleiding'); //TODO MAKE AS A FK FOR bol__bbl
            $table->string('start-datum');
            $table->string('eind-datum');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vacatures');
    }
}
