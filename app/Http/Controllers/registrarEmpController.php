<?php

namespace App\Http\Controllers;

use App\Empleado;
use App\Usuario;
use App\UsuarioRol;
use Illuminate\Support\Facades\DB;

class registrarEmpController extends Controller
{
    public function store()
    {
        request()->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'dui' => 'required',
            'email' => 'required',
            'usuario' => 'required',
            'contrasena' => 'required',
            'confirmar_contrasena' => 'required'
        ]);

        DB::transaction(
            function () {
                $idEmpleado = Usuario::create([
                    'nombreUsuario' => request('usuario'),
                    'contrasena' => request('contrasena'),
                    'estado' => 1
                ]);

                Empleado::create([
                    'nombreemp' => request('nombre'),
                    'apellidoemp' => request('apellido'),
                    'genero' => request('genero'),
                    'dui' => request('dui'),
                    'emailemp' => request('email'),
                    'fotoEmp' => request('pro-image'),
                    'idusuario' => $idEmpleado->id
                ]);

                UsuarioRol::create([
                    'idusuario' => $idEmpleado->id,
                    'idrol' => 1
                ]);
            }
        );
    }

    public function create()
    {
        return view('registrarEmp.create');
    }
}
