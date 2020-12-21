<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\User;
use App\Rol_User;


class CreateTableRolsUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //DB::statement('set foreign_key_checks=0');
        Schema::create('rols_users', function (Blueprint $table) {

            $table->engine = 'InnoDB';

            $table->bigIncrements('ru_id');
            $table->unsignedBigInteger('ru_user_id')->unsigned()->unique();
            $table->unsignedBigInteger('ru_rol_id')->unsigned()->unique();
           $table->timestamps();


        });

        Schema::table('rols_users', function (Blueprint $table) {
            $table->foreign('ru_user_id', 'fk_ru_user')->references('user_id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('ru_rol_id', 'fk_ru_rol')->references('rol_id')->on('rols')->onDelete('cascade')->onUpdate('cascade');
        });

        // DB::statement('set foreign_key_checks=1');
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
