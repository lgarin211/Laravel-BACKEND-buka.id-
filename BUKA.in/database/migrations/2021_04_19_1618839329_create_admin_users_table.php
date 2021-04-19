<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminUsersTable extends Migration
{
    public function up()
    {
        Schema::create('admin_users', function (Blueprint $table) {

		$table->id();
		$table->string('username',190)->nullable();
		$table->string('email')->nullable();
		$table->string('password',60)->nullable();
		$table->string('name',191);
		$table->string('avatar',191)->nullable();
		$table->string('provider')->nullable();
		$table->string('provider_id')->nullable();
		$table->string('remember_token',100)->nullable();
		$table->timestamp('created_at')->nullable();
		$table->timestamp('updated_at')->nullable();

        });
    }

    public function down()
    {
        Schema::dropIfExists('admin_users');
    }
}
