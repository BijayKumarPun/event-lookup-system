<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('eid');
            $table->string('huid');
            $table->string('euid')->unique();
            $table->string('eevent_title');
            $table->string('ecountry');
            $table->string('edistrict');
            $table->string('estreet');
            $table->string('ecategory');
            $table->string('eticket_price');
            $table->string('eavailable_tickets');
            $table->string('eartists');
            $table->string('edescription');
            $table->string('elink_url');
            $table->string('evenue');
            $table->string('estart_date');
            $table->string('eend_date');
            $table->string('estart_time');
            $table->string('ephoto');
            $table->string('elatitude');
            $table->string('elongitude');
            $table->string('elocation');
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
        Schema::dropIfExists('events');
    }
}
