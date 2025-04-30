@extends('layouts.app')

@section('content')
    <h1>Reservas</h1>
    <a href="{{ route('reservas.create') }}">Nova Reserva</a>
    
    <table>
        <thead>
            <tr>
                <th>Sala</th>
                <th>Usuário</th>
                <th>Data</th>
                <th>Horário</th>
            </tr>
        </thead>
        <tbody>
            @foreach($reservas as $reserva)
            <tr>
                <td>{{ $reserva->sala->nome }}</td>
                <td>{{ $reserva->usuario }}</td>
                <td>{{ $reserva->data->format('d/m/Y') }}</td>
                <td>{{ $reserva->horario_inicio }} - {{ $reserva->horario_fim }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection