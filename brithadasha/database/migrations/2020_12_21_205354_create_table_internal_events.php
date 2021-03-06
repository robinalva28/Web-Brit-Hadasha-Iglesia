<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableInternalEvents extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('set foreign_key_checks=0');

        Schema::create('internal_events', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('inevent_id');
            $table->unsignedBigInteger('inevent_creator_id');
            $table->string('inevent_description');
            $table->date('inevent_date');
            $table->timestamps();
            $table->foreign('inevent_creator_id')->references('user_id')->on('users');

        });
        DB::statement('set foreign_key_checks=1');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('internal_events');
    }
}
