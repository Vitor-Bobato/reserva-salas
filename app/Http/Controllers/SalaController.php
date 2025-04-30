<?php

namespace App\Http\Controllers;

use App\Models\Sala;
use Illuminate\Http\Request;

class SalaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $salas = Sala::all();
    return view('salas.index', compact('salas'));
}

public function create()
{
    return view('salas.create');
}

public function store(Request $request)
{
    Sala::create($request->all());
    return redirect()->route('salas.index');
}
}
