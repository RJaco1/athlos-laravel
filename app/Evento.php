<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    protected $table = 'evento';
    //public $timestamps = false;
    protected $fillable = [
        'eventonombre',
        'eventofecha',
        'eventohora',
        'eventofechalimiteinscripcion'
    ];

    /*public function empleado(){
        return $this->hasOne('App\Empleado', 'idempleado');
    }*/
}
