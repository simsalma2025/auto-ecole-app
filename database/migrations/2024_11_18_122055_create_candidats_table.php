<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidats', function (Blueprint $table) {
            $table->id();
            $table->string('photo', 1024)->nullable();
            $table->string('phoneNo', 1024);
            $table->date('birthdate');
            $table->string('sexe', 10);
            $table->string('cni', 191)->unique();
            $table->string('cniRecto', 1024)->nullable();
            $table->string('cniVerso', 1024)->nullable();
            $table->string('contract', 1024)->nullable();
            $table->string('certificate', 1024)->nullable();
            $table->decimal('tariffs', 10, 2); // Tarifs en décimal
            $table->boolean('paid')->default(0); // Statut de paiement
            $table->integer('status');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // Clé étrangère vers `users`
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
        Schema::dropIfExists('condidats');
    }
}