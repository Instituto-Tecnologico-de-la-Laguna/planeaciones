<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Docentes extends Model
{
    use HasFactory;

    protected $table = "docentes";
    public $timestamps = false;
    protected $fillable = [
        'Id_depar',
        'Nombre',
        'Ap_paterno',
        'Ap_materno',
        'Nombramiento'
    ];
    
}
