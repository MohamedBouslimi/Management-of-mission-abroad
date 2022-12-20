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
        Schema::create('registrations', function (Blueprint $table) {
            $table->id(); 
            $table->string('nom');
            $table->string('prenom');
            $table->date('naissance');
            $table->string('carte');
            $table->string('postule');
            $table->date('date');
            $table->string('national'); 
            $table->string('effectuer'); 
            $table->string('theme');
            $table->date('aller');
            $table->date('retour');
            $table->string('moyen');
            $table->string('fonction');
            $table->float('transport');
            $table->float('timbre');
            $table->float('depenses');
            $table->integer('jours');
            $table->string('charge');  
            $table->float('mission'); 
            $table->float('montant');
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
        Schema::dropIfExists('registrations');
    }
};
