<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

//class CreateBedrijvenTable extends Migration
class CreateBusinessTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('business', function (Blueprint $table) {
            $table->id('business_id');
            $table->string('naam');
//            $table->string('type_bedrijf');
            $table->string('telefoonnummer');
            $table->string('email');
            $table->string('website');
            $table->string('adres');
            $table->string('postcode');
            $table->rememberToken();
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
        Schema::dropIfExists('business');
    }
}
