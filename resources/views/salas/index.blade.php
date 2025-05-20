<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold">Salas de Reunião</h2>
    </x-slot>

    <div class="max-w-4xl mx-auto p-4">
        <a href="{{ route('salas.create') }}"
           class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
            + Nova Sala
        </a>

        <div class="mt-4 bg-white shadow rounded p-4">
            <h3 class="text-lg font-bold mb-2">Lista de Salas</h3>
            @forelse ($salas as $sala)
                <div class="border-b py-2">
                    <strong>{{ $sala->nome }}</strong> — Capacidade: {{ $sala->capacidade }}
                </div>
            @empty
                <p>Nenhuma sala cadastrada.</p>
            @endforelse
        </div>
    </div>
</x-app-layout>
