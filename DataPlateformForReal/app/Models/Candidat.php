<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidat extends Model
{
    use HasFactory;
    protected $fillable = [
        "idtechnique",
        "obtentionCertification",
        "donneeCertifiee",
        "dateDebutValidite",
        "dateFinValidite",
        "presenceNiveauLangueEuro",
        "presenceNiveauNumeriqueEuro",
        "scoring",
        "mentionValidee",
        "modaliteAcces",
        "nomNaissance",
        "nomUsage",
        "prenom1",
        "anneeNaissance",
        "moisNaissance",
        "jourNaissance",
        "sexe",
        "codeInsee",
        "codePostal",
        "codePaysNaissance"

    ];
}
