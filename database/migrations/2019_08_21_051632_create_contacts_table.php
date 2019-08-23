<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',20)->nullable()->default('')->comment('姓名');
            $table->string('email',30)->nullable()->default('')->comment('邮箱');
            $table->string('interested',255)->nullable()->default('')->comment('感兴趣的');
            $table->string('title')->nullable()->default('')->comment('标题');
            $table->text('message')->nullable()->comment('内容');
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
        Schema::dropIfExists('contacts');
    }
}
