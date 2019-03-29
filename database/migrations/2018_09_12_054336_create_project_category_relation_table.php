<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectCategoryRelationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rel_project_category', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('admin_project_id')->unsigned();
            $table->integer('admin_category_id')->unsigned();
            $table->foreign('admin_project_id')->references('id')->on('project');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rel_project_category');
    }
}
