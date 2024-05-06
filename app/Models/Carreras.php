<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carreras extends Model
{
    use HasFactory;

    protected $table = "carreras";
    public $timestamps = false;
    protected $fillable = [
        'Id_depar',
        'Nom_carr',
        'clv_oficial'
    ];
    
}