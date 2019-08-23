<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateManagersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('managers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('username')->nullable()->default('')->comment('管理员账号');
            $table->string('password',255)->nullable()->default('')->comment('管理员密码');
            $table->tinyInteger('status')->nullable()->default(0)->comment('管理员状态 0：禁用 1：待审核');
            $table->string('tel',11)->nullable()->default('')->comment('手机号码');
            $table->string('email')->nullable()->default('')->comment('邮箱');
            $table->string('ip')->nullable()->default('')->comment('登陆IP');
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
        Schema::dropIfExists('managers');
    }
}
