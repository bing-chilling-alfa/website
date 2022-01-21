<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('voornaam');
            $table->string('achternaam');
            $table->string('email')->unique();
            //            $table->timestamp('email_verified_at')->nullable();
            $table->string('telefoonnummer');
            $table->string('password');
            $table->mediumInteger('business_id'); // TODO make as FK
            $table->string('groep_id'); // TODO make as FK
            $table->string('user_type_id'); // TODO make as FK
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
        Schema::dropIfExists('users');
    }
}
