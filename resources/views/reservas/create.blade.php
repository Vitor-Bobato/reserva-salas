@extends('layouts.app')

@section('content')
    <h1>Nova Reserva</h1>
    
    <form action="{{ route('reservas.store') }}" method="POST">
        @csrf
        <label for="sala_id">Sala:</label>
        <select name="sala_id" id="sala_id" required>
            @foreach($salas as $sala)
                <option value="{{ $sala->id }}">{{ $sala->nome }} (Capacidade: {{ $sala->capacidade }})</option>
            @endforeach
        </select>
        
        <label for="usuario">Usuário:</label>
        <input type="text" name="usuario" id="usuario" required>
        
        <label for="data">Data:</label>
        <input type="date" name="data" id="data" required>
        
        <label for="horario_inicio">Horário Início:</label>
        <input type="time" name="horario_inicio" id="horario_inicio" required>
        
        <label for="horario_fim">Horário Fim:</label>
        <input type="time" name="horario_fim" id="horario_fim" required>
        
        <button type="submit">Salvar</button>
    </form>
@endsection