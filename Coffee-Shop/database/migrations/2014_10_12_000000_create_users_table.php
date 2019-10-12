<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->increments('id');
            $table->string('first_name','100');
            $table->string('last_name','100');
            $table->string('email','100')->unique();
            $table->string('gender','10');///1 => male and 0 => female
            $table->string('password');
            $table->timestamp('dob')->nullable(); //date of birth
            $table->string('phone','255')->nullable();
            $table->string('address','255')->nullable(); //street, home number
            $table->string('thumnail','255')->nullable();
            $table->string('status_id_for')->nullable();
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('status_id_for')->references('status_id')->on('tbl_statuses');
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
