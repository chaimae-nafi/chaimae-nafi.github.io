<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class adhesion extends Model
{
    use HasFactory;
    protected $table="adhesion";
    protected $fillable=["num_adhesionnaire","nometprenom_beneficiaire","fonction_beneficiaire","datenaissance_beneficiaire",
    "adresse_beneficiaire","tel_beneficiaire","mail_beneficiaire","nometprenom_tuteur","fonction_tuteur","datenaissance_tuteur",
    "adresse_tuteur","tel_tuteur","type_inscri1","type_inscri2","type_inscri3","prix","recu1","recu2","recu3","recudetransfer","renouvellement"];
}
