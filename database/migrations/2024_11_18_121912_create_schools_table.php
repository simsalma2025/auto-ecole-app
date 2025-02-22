<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchoolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schools', function (Blueprint $table) {
            $table->id();
            $table->string('name', 1024);
            $table->integer('experience');
            $table->string('address', 1024);
            $table->string('city', 1024);
            $table->string('phoneNo', 1024);
            $table->string('logo', 1024)->nullable();
            $table->date('founded');
            $table->string('workingTime', 1024);
            $table->text('description')->nullable();
            $table->integer('status');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
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
        Schema::dropIfExists('schools');
    }
}