<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersProfileTable extends Migration
{
    public function up()
    {
        Schema::create('users_profile', function (Blueprint $table) {

		$table->id();
		$table->integer('themes_id');
		$table->integer('users_id');
		$table->string('title');
		$table->text('picture');
		$table->text('bio');
		$table->integer('views')->default('0');
        $table->timestamps();

        });
    }

    public function down()
    {
        Schema::dropIfExists('users_profile');
    }
}
