<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = ['rne', 'nombres', 'apellidos', 'sexo', 'fechanac', 'colegio', 'carrera', 'curso', 'jornada', 'seccion', 'user_id'];
}
 