<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class client extends Model
{
    use HasFactory;
    protected $table="client";
    protected $fillable=["nom_client","prenom_client","tel_client","email_client","fonction_client",
    "formation","responsable_client","source_client","num_adhesion","num_conseiller"];
}
