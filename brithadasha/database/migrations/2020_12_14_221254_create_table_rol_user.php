<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableRolUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rols_users', function (Blueprint $table) {
            $table->bigIncrements('ru_id');
            $table->string('ru_user_id');
            $table->string('ru_rol_id');
            $table->foreign('ru_user_id')->references('user_id')->on('users');
            $table->foreign('ru_rul_id')->references('rol_id')->on('rols');
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
        Schema::dropIfExists('rols_users');
    }
}
