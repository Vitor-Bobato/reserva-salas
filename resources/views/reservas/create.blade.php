<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold">Nova Reserva</h2>
    </x-slot>

    <div class="max-w-xl mx-auto p-4 bg-white shadow rounded">
        <form method="POST" action="{{ route('reservas.store') }}">
            @csrf

            <div class="mb-4">
                <label class="block font-medium">Sala:</label>
                <select name="sala_id" required
                    class="w-full border border-gray-300 rounded px-3 py-2 mt-1">
                    @foreach ($salas as $sala)
                        <option value="{{ $sala->id }}">
                            {{ $sala->nome }} ({{ $sala->capacidade }} pessoas)
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-4">
                <label class="block font-medium">Data:</label>
                <input type="date" name="data" required
                    class="w-full border border-gray-300 rounded px-3 py-2 mt-1">
            </div>

            <div class="mb-4">
                <label class="block font-medium">Horário:</label>
                <input type="time" name="horario" required
                    class="w-full border border-gray-300 rounded px-3 py-2 mt-1">
            </div>

            <button type="submit"
                class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                Reservar
            </button>
        </form>
    </div>
</x-app-layout>
