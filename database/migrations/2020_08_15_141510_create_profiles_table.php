<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('last');
            $table->string('avatar')->default('default.jpg');
            $table->string('email')->unique();
            $table->string('phone');
            $table->string('city');
            $table->string('country');
            $table->string('birth');
            $table->string('username');
            $table->string('portfolio');
            $table->string('interests');
            $table->string('bio');
            $table->string('location');
            $table->string('twitter');
            $table->string('instagram');
            $table->string('paypal');
            $table->string('message');
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
        Schema::dropIfExists('profiles');
    }
}
