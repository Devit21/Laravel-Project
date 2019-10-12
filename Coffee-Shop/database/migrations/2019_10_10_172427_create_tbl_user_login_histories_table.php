<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblUserLoginHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_user_login_histories', function (Blueprint $table) {
            $table->increments('login_id');
            $table->string('login_ipaddress','255');
            $table->string('login_user_agent','255');
            $table->integer('user_id_for')->unsigned();
            $table->timestamps();//When logout update (update at)

            $table->foreign('user_id_for')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_user_login_histories');
    }
}
