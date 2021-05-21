<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersLinkTable extends Migration
{
    public function up()
    {
        Schema::create('users_link', function (Blueprint $table) {

		$table->id();
        $table->integer('user_id');
		$table->text('keyword');
		$table->text('link');
		$table->text('judul');
		$table->integer('hits')->default('0');
        $table->timestamps();

        });
    }

    public function down()
    {
        Schema::dropIfExists('users_link');
    }
}
