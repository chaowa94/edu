<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->comment('用户名');
            $table->string('open_id')->unique()->comment('微信ID');
            $table->string('avatar')->nullable()->comment('头像');
            $table->string('gender')->nullable()->comment('性别');
            $table->string('password')->nullable()->comment('密码');
            $table->boolean('is_admin')->default('false')->comment('是否是管理员');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
