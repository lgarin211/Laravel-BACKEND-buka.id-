<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {

		$table->id();
		$table->integer('role_id')->default('1');
		$table->string('name',191)->nullable();
		$table->string('gender')->nullable();
		$table->string('email',191)->nullable();
		$table->string('phone_number')->nullable();
		$table->timestamp('email_verified_at')->nullable();
		$table->string('password',191)->nullable();
		$table->string('remember_token',100)->nullable();
		$table->string('provider_id')->nullable();
        $table->timestamps();

        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}
