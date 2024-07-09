<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('professeurs', function (Blueprint $table) {
            $table->id();
            $table->string('CIN',60)->unique();
            $table->string('Nom_prof',60);
            $table->string('Prenom_prof',60);
            $table->string('Numero_Tel',60);
            $table->string('Niveau_Scolaire');
            $table->string('Niveau_Exercie');
            $table->string('Matiere');
            $table->string('Option_Profession');
            $table->string('Email',60)->unique();
            $table->string('password',60)->unique();
            $table->string('Adresse',60);
    
            $table->string('name');
            $table->string('path');
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
        Schema::dropIfExists('professeur');
    }
};
