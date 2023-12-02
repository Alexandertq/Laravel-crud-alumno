<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;

    protected $table="alumnos";

    //indicamos la clave primaria
    protected $primaryKey="alumno_id";

    //indica que los campos create_at y update_at no se actualice automaticamente
    public $timestamps=false;

    protected $guarded=[];
}
