<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class adherent extends Model
{
    use HasFactory;
    protected $table="adherent";
    protected $fillable=["num_adherent","nom_adherent"];
}
