<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $table = 'empleado';
    //public $timestamps = false;
    protected $fillable = [
        'nombreemp',
        'apellidoemp',
        'genero',
        'dui',
        'emailemp',
        'fotoemp',
        'idusuario'
    ];

    /*public function usuario(){
        return $this->belongsTo('App\Empleado', 'idempleado');
    }*/
}
