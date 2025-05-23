@extends('layouts.app')

@section('title', 'Salas Disponíveis')

@section('content')
<section>
    <h2>Salas Disponíveis</h2>
    @if(count($salas) > 0)
    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Capacidade</th>
                <th>Recursos</th>
            </tr>
        </thead>
        <tbody>
            @foreach($salas as $sala)
            <tr>
                <td>{{ $sala->nome }}</td>
                <td>{{ $sala->capacidade }}</td>
                <td>{{ $sala->recursos }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
        <p>Nenhuma sala cadastrada.</p>
    @endif
</section>
@endsection