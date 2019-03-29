<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCharityTrekDailyRecord extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rel_charity_record', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('charity_id')->unsigned();
            $table->string('title',512)->nullable();
            $table->text('description')->nullable();
            $table->enum('status',['1','0'])->nullable();
            $table->foreign('charity_id')->references('id')->on('charity_trek');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rel_charity_record');
    }
}
