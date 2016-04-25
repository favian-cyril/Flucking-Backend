<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $defaultpic = 'public/asset/default.gif';
            $table->increments('id');
            $table->string('name');
            $table->string('fluckerid');
            $table->integer('age');
            $table->string('headquarter');
            $table->string('hint');
            $table->string('email')->unique();
            $table->string('password', 60);
            $table->string('profilepict')->default($defaultpic);
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
        Schema::drop('users');
    }
}
