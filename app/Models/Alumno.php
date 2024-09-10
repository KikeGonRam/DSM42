<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    protected $table = 'tb_alumnos'; // Nombre de la tabla
    protected $fillable = ['nombre', 'fn', 'foto']; // Campos que se pueden llenar
}
