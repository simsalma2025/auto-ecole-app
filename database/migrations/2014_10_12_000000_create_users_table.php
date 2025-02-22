<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       // database/migrations/create_users_table.php
        Schema::create('users', function (Blueprint $table) {
    $table->id();
    $table->string('name', 1024);
    $table->string('email',191)->unique();
    $table->string('password', 1024);
    $table->string('role', 1024)->nullable();
    $table->integer('status')->default(0);    
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