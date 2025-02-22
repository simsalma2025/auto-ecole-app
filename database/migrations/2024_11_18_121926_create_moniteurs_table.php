<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoniteursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('moniteurs', function (Blueprint $table) {
            $table->id();
            $table->string('photo', 1024);
            $table->string('phoneNo', 1024);
            $table->date('birthdate');
            $table->string('sexe', 10);
            $table->string('cni', 1024);
            $table->string('cniRecto', 1024);
            $table->string('cniVerso', 1024);
            $table->string('carteMoniteur', 1024);
            $table->string('numeroCarteMoniteur', 1024);
            $table->integer('status');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('school_id')->constrained('schools')->onDelete('cascade');
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
        Schema::dropIfExists('moniteurs');
    }
}