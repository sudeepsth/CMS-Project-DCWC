<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjects extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project', function (Blueprint $table) {
            $table->increments('id');
            $table->string('slug',512);
            $table->string('title',512);
            $table->text('description')->nullable();
            $table->text('requirement')->nullable();
            $table->text('timeline')->nullable();
            $table->enum('project',['1','2','3'])->nullable();
            $table->string('images',512)->nullable();
            $table->integer('year_id')->unsigned();
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
        Schema::dropIfExists('project');
    }
}
