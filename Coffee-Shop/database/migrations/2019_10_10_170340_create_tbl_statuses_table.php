<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblStatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_statuses', function (Blueprint $table) {
            $table->increments('status_id');
            $table->string('status_title','255');
            $table->string('status_description','255')->nullable();
            $table->string('status','20')->default('1'); //active=1, delete=0
            $table->string('status_author','255'); //admin create this
            $table->string('status_sort','255')->default('1');
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
        Schema::dropIfExists('tbl_statuses');
    }
}
