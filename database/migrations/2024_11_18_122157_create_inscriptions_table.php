<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInscriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inscriptions', function (Blueprint $table) {
            $table->id();
            $table->string('fullname', 1024);
            $table->string('phoneNo', 1024);
            $table->string('email', 1024);
            $table->string('schoolName', 1024);
            $table->string('schoolAddress', 1024);
            $table->string('city', 1024);
            $table->string('type', 1024)->nullable(); // Type d'inscription
            $table->integer('status')->default(0); // Statut de l'inscription
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
        Schema::dropIfExists('inscriptions');
    }
}