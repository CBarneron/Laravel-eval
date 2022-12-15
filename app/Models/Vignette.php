<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vignette extends Model
{   protected $table ='Picatsa';
    Protected $fillable=['Legende','Url','Description','statut'];
    use HasFactory;
    
}
