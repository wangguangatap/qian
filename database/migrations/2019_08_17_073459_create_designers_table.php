<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDesignersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('designers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("name",15)->nullable()->default('')->comment('名字');
            $table->string("subtitle")->nullabel()->default('')->comment('头衔');
            $table->string("pic")->nullabel()->default('')->comment('图片');
            $table->integer("sort")->nullable()->default(100)->comment('排序');
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
        Schema::dropIfExists('designers');
    }
}
