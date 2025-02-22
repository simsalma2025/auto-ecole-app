<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('photo', 1024);
            $table->string('brand', 1024);
            $table->string('version', 1024);
            $table->string('engine', 1024);
            $table->string('color', 1024);
            $table->string('matricule', 191)->unique();
            $table->integer('kilometrage');
            $table->integer('status');
            $table->foreignId('school_id')->constrained('schools')->onDelete('cascade'); // Clé étrangère vers `schools`
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
        Schema::dropIfExists('cars');
    }
}