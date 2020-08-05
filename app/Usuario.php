<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'usuario';
    public $timestamps = false;
    protected $fillable = [
        'nombreUsuario',
        'contrasena',
        'estado'
    ];

    /*public function empleado(){
        return $this->hasOne('App\Empleado', 'idempleado');
    }*/
}
