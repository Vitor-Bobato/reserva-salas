@extends('layouts.app')

@section('title', 'Cadastrar Nova Sala')

@section('content')
<section>
    <h2>Cadastrar Nova Sala</h2>
    <form method="POST" action="{{ route('salas.store') }}">
        @csrf
        <label for="nome">Nome da Sala</label>
        <input type="text" id="nome" name="nome" required>

        <label for="capacidade">Capacidade</label>
        <input type="number" id="capacidade" name="capacidade" min="1" required>

        <label for="recursos">Recursos (ex: Projetor, Ar-condicionado...)</label>
        <textarea id="recursos" name="recursos"></textarea>

        <input type="submit" value="Cadastrar">
    </form>
</section>
@endsection