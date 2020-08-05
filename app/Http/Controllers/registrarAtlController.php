<?php

namespace App\Http\Controllers;

use App\Atleta;
use App\Usuario;
use App\UsuarioRol;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class registrarAtlController extends Controller
{

    public function index()
    {
        $atleta = Atleta::get();
        return view('listaAtletas', compact('atleta'));
    }

    public function store()
    {
        request()->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'direccion' => 'required',
            'dui' => 'required',
            'email' => 'required',
            'usuario' => 'required',
            'contrasena' => 'required',
            'confirmar_contrasena' => 'required'
        ]);

        DB::transaction(
            function () {
                $idAtleta = Usuario::create([
                    'nombreUsuario' => request('usuario'),
                    'contrasena' => request('contrasena'),
                    'estado' => 1
                ]);

                Atleta::create([
                    'nombre' => request('nombre'),
                    'apellido' => request('apellido'),
                    'genero' => request('genero'),
                    'direccion' => request('direccion'),
                    'pais' => request('pais'),
                    'dui' => request('dui'),
                    'email' => request('email'),
                    'fotoatleta' => request('pro-image'),
                    'idusuario' => $idAtleta->id
                ]);

                UsuarioRol::create([
                    'idusuario' => $idAtleta->id,
                    'idrol' => 1
                ]);
            }
        );
    }

    public function create()
    {
        return view('registrarAtl.create');
    }
}
