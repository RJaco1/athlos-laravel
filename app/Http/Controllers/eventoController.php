<?php

namespace App\Http\Controllers;

use App\Evento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class eventoController extends Controller
{
    public function index()
    {
        $evento = Evento::latest()->get();
        return view('eventos', compact('evento'));
    }

    public function store()
    {
        request()->validate([
            'nomevento' => 'required',
            'fechaevento' => 'required',
            'horaevento' => 'required',
            'fechalimins' => 'required'
        ]);

        DB::transaction(
            function () {
                Evento::create([
                    'eventonombre' => request('nomevento'),
                    'eventofecha' => request('fechaevento'),
                    'eventohora' => request('horaevento'),
                    'eventofechalimiteinscripcion' => request('fechalimins')
                ]);
            }
        );
    }

    public function create()
    {
        return view('nuevoEvento.create');
    }
}
