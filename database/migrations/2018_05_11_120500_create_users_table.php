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
            $table->increments('id');
            $table->string('login',60);
            $table->string('password');
            $table->unsignedInteger('role_id');
            $table->string('firstname',60);
            $table->string('lastname',60);
            $table->string('email')->unique();
            $table->string('langue',2);
            
            $table->index('role_id');
            $table->rememberToken();
            $table->timestamps();
            
            $table->foreign('role_id')
                    ->references('id')
                    ->on('roles');
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
