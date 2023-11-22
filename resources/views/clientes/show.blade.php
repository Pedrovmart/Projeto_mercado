<x-app-layout> <div class="container mx-auto mt-10"> <div
    class="max-w-2xl bg-white dark:bg-gray-800 shadow-md rounded-md overflow-hidden mx-auto p-6">
    <h1 class="text-3xl font-semibold mb-4 text-gray-800 dark:text-gray-200">Detalhes do Cliente</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-gray-700 dark:text-gray-300">
        <div class="mb-4">
        <strong class="block text-sm font-semibold mb-1">ID:</strong>
        <p class="text-lg">{{ $cliente->id }}</p>
        </div>

        <div class="mb-4">
            <strong class="block text-sm font-semibold mb-1">Nome:</strong>
            <p class="text-lg">{{ $cliente->nome }}</p>
        </div>

        <div class="mb-4">
        <strong class="block text-sm font-semibold mb-1">Email:</strong>
        <p class="text-lg">{{ $cliente->email }}</p>
    </div>

    <div class="mb-4">
        <strong class="block text-sm font-semibold mb-1">Telefone:</strong>
        <p class="text-lg">{{ $cliente->telefone }}</p>
    </div>

    <div class="mb-4">
        <strong class="block text-sm font-semibold mb-1">Endereço:</strong>
        <p class="text-lg">{{ $cliente->endereco }}</p>
    </div>
    </div>

    <div class="flex mt-6">
        <a href="{{ route('clientes.index') }}"
            class="inline-flex items-center bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18">
                </path>
            </svg>
            Voltar
        </a>
    </div>
    </div>
    </div>
    </x-app-layout>