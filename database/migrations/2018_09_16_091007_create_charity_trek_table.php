<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCharityTrekTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('charity_trek', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title',512);
            $table->string('slug',512);
            $table->string('images',512)->nullable();
            $table->text('top_description')->nullable();
            $table->text('description')->nullable();
            $table->enum('status',['1','0']);
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
        Schema::dropIfExists('charity_trek');
    }
}
