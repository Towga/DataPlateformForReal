<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('candidats', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->char("idtechnique",80);
            $table->string("obtentionCertification");
            $table->boolean("donneeCertifiee");
            $table->timestamp("dateDebutValidite")->nullable();
            $table->timestamp("dateFinValidite")->nullable();
            $table->boolean("presenceNiveauLangueEuro");
            $table->boolean("presenceNiveauNumeriqueEuro");
            $table->string("scoring");
            $table->string("mentionValidee");
            $table->string("modaliteAcces");
            $table->string("nomNaissance");
            $table->string("nomUsage");
            $table->string("prenom1");
            $table->integer("anneeNaissance");
            $table->integer("moisNaissance");
            $table->integer("jourNaissance");
            $table->char("sexe",1);
            $table->integer("codeInsee",);
            $table->integer("codePostal",);
            $table->integer("codePaysNaissance",);


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('candidats');
    }
};
