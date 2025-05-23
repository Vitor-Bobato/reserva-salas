@extends('layouts.app')

@section('title', 'Reservar Sala')

@section('content')
<section>
    <h2>Reservar Sala</h2>
    <form method="POST" action="{{ route('reservas.store') }}">
        @csrf
        <label for="sala_id">Sala</label>
        <select id="sala_id" name="sala_id" required>
            <option value="">Selecione...</option>
            @foreach($salas as $sala)
                <option value="{{ $sala->id }}">{{ $sala->nome }}</option>
            @endforeach
        </select>

        <label for="data">Data</label>
        <input type="date" id="data" name="data" required>

        <label for="hora_inicio">Hora de Início</label>
        <input type="time" id="hora_inicio" name="hora_inicio" required>

        <label for="hora_fim">Hora de Fim</label>
        <input type="time" id="hora_fim" name="hora_fim" required>

        <input type="submit" value="Reservar">
    </form>
</section>
@endsection