<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBannersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banners', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->tinyInteger('flag')->nullable()->default(1)->comemnt('名称标识 0；代表首页轮播图 1:列表页巨幕 2：详情页巨幕');
            $table->string('title')->nullable()->default('')->comment('标题');
            $table->string('desc')->nullable()->default('')->comment('描述');
            $table->string('href')->nullable()->default('')->comment('链接');
            $table->string('pic')->nullable()->default('')->comment('图片');
            $table->integer('sort')->nullable()->default(1)->comment('排序');
            $table->tinyInteger('isshow')->nullable()->default(0)->comment('是否展示 0：不展示 1展示');
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
        Schema::dropIfExists('banners');
    }
}
