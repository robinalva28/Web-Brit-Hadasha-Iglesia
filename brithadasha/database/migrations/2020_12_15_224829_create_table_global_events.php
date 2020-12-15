<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableGlobalEvents extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('global_events', function (Blueprint $table) {
            $table->bigIncrements('event_id');
            $table->Integer('event_creator_id');
            $table->string('event_description');
            $table->date('event_date');
            $table->timestamps();
            $table->foreign('event_creator_id')->references('user_id')->on('users');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('global_events');
    }
}
