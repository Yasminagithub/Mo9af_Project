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
        Schema::create('nourritures', function (Blueprint $table) {
            $table->id();
            $table->string('CIN',60)->unique();
            $table->string('Nom_femme',60);
            $table->string('Prenom_femme',60);
            $table->string('Numero_Tel',60);
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
        Schema::dropIfExists('nourritures');
    }
};
