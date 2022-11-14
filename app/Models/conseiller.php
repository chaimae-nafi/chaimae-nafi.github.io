<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class conseiller extends Model
{
    use HasFactory;
    protected $table="conseiller";
    protected $fillable=["nom_conseiller","prenom_conseiller","tel_conseiller","email_conseiller","id_profile"];
}
