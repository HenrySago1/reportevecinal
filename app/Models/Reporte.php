<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reporte extends Model
{
    protected $fillable = [
    'titulo',
    'descripcion',
    'tipo',
    'imagen',
    'estado',
];
}
