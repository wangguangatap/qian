<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer("cid")->nullable(true)->default(0)->comment('外键');
            $table->string("title")->nullable(true)->default('')->comment('产品名称');
            $table->string("pic",150)->nullable(true)->default('')->comment('图片');
            $table->integer("tuijian")->nullable()->default(0)->default(0)->comment('是否推荐');
            $table->integer('flag')->nullable(true)->default(0)->comment('标识 0:代表正常大小 1：横向占用两个图片大小 2：纵向占用两个图片大小');
            $table->text("content")->comment('内容');
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
        Schema::dropIfExists('products');
    }
}
