<?php

namespace App\Http\Controllers;

use App\Evento;
use Illuminate\Support\Facades\DB;

class nuevoEventoController extends Controller
{
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
