<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold">Reservas Ativas</h2>
    </x-slot>

    <div class="max-w-5xl mx-auto p-4">
        <a href="{{ route('reservas.create') }}"
           class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
            + Nova Reserva
        </a>

        <div class="mt-4 bg-white shadow rounded p-4">
            @forelse ($reservas as $reserva)
                <div class="border-b py-2">
                    <strong>{{ $reserva->sala->nome }}</strong> —
                    Data: {{ \Carbon\Carbon::parse($reserva->data)->format('d/m/Y') }} |
                    Hora: {{ $reserva->horario }} |
                    Usuário: {{ $reserva->user->name }}
                </div>
            @empty
                <p>Nenhuma reserva feita ainda.</p>
            @endforelse
        </div>
    </div>
</x-app-layout>
