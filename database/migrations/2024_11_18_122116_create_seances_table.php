<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seances', function (Blueprint $table) {
            $table->id();
            $table->date('dateStart'); // Date de début de la séance
            $table->time('time'); // Heure de la séance
            $table->integer('status'); // Statut de la séance
            $table->integer('status_dmd_candidat')->nullable(); // Statut de la demande du candidat (facultatif)
            $table->foreignId('school_id')->constrained('schools')->onDelete('cascade'); // Clé étrangère vers `schools`
            $table->foreignId('moniteur_id')->constrained('moniteurs')->onDelete('cascade'); // Clé étrangère vers `moniteurs`
            $table->foreignId('car_id')->constrained('cars')->onDelete('cascade'); // Clé étrangère vers `cars`
            $table->foreignId('candidat_id')->constrained('candidats')->onDelete('cascade'); // Clé étrangère vers `candidats`
            $table->foreignId('period_id')->constrained('periods')->onDelete('cascade'); // Clé étrangère vers `periods`
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
        Schema::dropIfExists('seances');
    }
}