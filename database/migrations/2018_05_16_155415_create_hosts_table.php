<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hosts', function (Blueprint $table) {
            $table->increments('hid');
            $table->string('huid');
            $table->string('horganization_name');
            $table->string('hemail')->unique();
            $table->string('hphone_number');
            $table->string('horganization_type');
            $table->string('hcountry');
            $table->string('hdistrict');
            $table->string('haddress');
            $table->string('hpassword');
            $table->string('hphoto');
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
        Schema::dropIfExists('hosts');
    }
}
