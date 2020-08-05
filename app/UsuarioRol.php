<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsuarioRol extends Model
{
    protected $table = 'usuario_rol';
    public $timestamps = false;
    protected $fillable = [
        'idusuario',
        'idrol'
    ];
}
