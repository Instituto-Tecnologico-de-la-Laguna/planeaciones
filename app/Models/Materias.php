<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materias extends Model
{
    use HasFactory;

    protected $table = "materia";
    public $timestamps = false;
    protected $fillable = [
        'id_carr',
        'clv_oficial',
        'nom_materias',
        'hr_teoricas',
        'hr_practicas'
    ];
    
}
