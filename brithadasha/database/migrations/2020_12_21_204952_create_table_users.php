<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('user_id');
            $table->string('user_name');
            $table->string('user_surname')->nullable();
            $table->string('user_password');
            $table->string('user_email')->unique();
            $table->char('user_civil_status')->nullable();
            $table->string('user_address')->nullable();
            $table->date('user_birthdate')->nullable();
            $table->date('user_marriage_date')->nullable();
            $table->timestamp('email_verified_at')->nullable();

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
        Schema::dropIfExists('users');
    }
}
