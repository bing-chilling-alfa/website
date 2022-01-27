<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            //            $table->id();
            //            $table->timestamps();
            $table->id();
            $table->string('name');
            $table->string('phone_number');
            $table->string('email');
            $table->string('website');
            $table->string('street_name');
            $table->integer('house_number');
            $table->string('zip_code');
            $table->string('place_name');
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
        Schema::dropIfExists('companies');
    }
}
