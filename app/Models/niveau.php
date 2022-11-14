<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class niveau extends Model
{
    use HasFactory;
    protected $table="niveau";
    protected $fillable=["design_niveau","nbr_eleves"];
}
