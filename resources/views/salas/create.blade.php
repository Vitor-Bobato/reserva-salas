<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold">Cadastrar Sala</h2>
    </x-slot>

    <div class="max-w-xl mx-auto p-4 bg-white shadow rounded">
        <form method="POST" action="{{ route('salas.store') }}">
            @csrf

            <div class="mb-4">
                <label class="block font-medium">Nome da Sala:</label>
                <input type="text" name="nome" required
                    class="w-full border border-gray-300 rounded px-3 py-2 mt-1">
            </div>

            <div class="mb-4">
                <label class="block font-medium">Capacidade:</label>
                <input type="number" name="capacidade" required min="1"
                    class="w-full border border-gray-300 rounded px-3 py-2 mt-1">
            </div>

            <button type="submit"
                class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">
                Salvar Sala
            </button>
        </form>
    </div>
</x-app-layout>
