<?php

use Illuminate\Support\Facades\Schema;
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
            $table->increments('uid');
            $table->string('uuid');
            $table->string('ufname');
            $table->string('umname');
            $table->string('ulname');
            $table->string('uemail')->unique();
            $table->string('uphone_number');
            $table->string('ugender');
            $table->string('udob');
            $table->string('ucountry');
            $table->string('udistrict');
            $table->string('uaddress');
            $table->string('upassword');
            $table->string('uphoto');
            $table->rememberToken();
            $table->timestamps();
            $table->boolean('status');
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
