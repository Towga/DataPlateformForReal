<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entites_deploiement extends Model
{
    use HasFactory;
    protected $fillable = [
        "estinterne",
        "siret",
    ];
}
