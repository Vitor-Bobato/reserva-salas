<?php

namespace App\Http\Controllers;

use App\Models\Reserva;
use App\Models\Sala;
use Illuminate\Http\Request;

class ReservaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $reservas = Reserva::with('sala')->get();
    return view('reservas.index', compact('reservas'));
}

public function create()
{
    $salas = Sala::all();
    return view('reservas.create', compact('salas'));
}

public function store(Request $request)
{
    $request->validate([
        'sala_id' => 'required',
        'usuario' => 'required',
        'data' => 'required|date',
        'horario_inicio' => 'required',
        'horario_fim' => 'required|after:horario_inicio'
    ]);

    Reserva::create($request->all());
    return redirect()->route('reservas.index');
}
}
