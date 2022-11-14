<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class formateur extends Model
{
    use HasFactory;
    protected $table="formateur";
    protected $fillable=["nom_formateur","prenom_formateur","tel_formateur","email_formateur","id_profile"];
}
