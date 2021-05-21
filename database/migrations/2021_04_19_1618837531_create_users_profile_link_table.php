<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersProfileLinkTable extends Migration
{
    public function up()
    {
        Schema::create('users_profile_link', function (Blueprint $table) {

            $table->id();
            $table->integer('profile_id');
            $table->string('title');
            $table->text('link');
            $table->text('icon');
            $table->integer('hits')->default('0');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('users_profile_link');
    }
}
