<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAboutusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aboutuses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title')->nullable()->default('')->comment('标题');
            $table->string('pic',180)->nullable()->default('')->comment('图片');;
            $table->text('content')->nullable()->comment('文章内容');
            $table->tinyInteger('flag')->nullable()->comment('标识 0：代表关于我们 1代表服务模块标题 2:代表设计位标题');
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
        Schema::dropIfExists('aboutuses');
    }
}
