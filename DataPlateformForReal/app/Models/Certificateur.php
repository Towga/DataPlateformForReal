<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificateur extends Model
{
    use HasFactory;
    protected $fillable = [
        "matricule",

    ];
}
