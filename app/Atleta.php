<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Atleta extends Model
{
    protected $table = 'atleta';
    //public $timestamps = false;
    protected $fillable = [
        'nombre',
        'apellido',
        'genero',
        'direccion',
        'pais',
        'dui',
        'email',
        'fotoatleta',
        'idusuario'
    ];
}
