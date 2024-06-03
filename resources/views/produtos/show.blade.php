<!-- resources/views/produtos/show.blade.php -->

<x-app-layout>
    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
        <h1 class="text-2xl font-semibold mb-4 text-gray-800 dark:text-gray-200">Detalhes do Produto</h1>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-gray-700 dark:text-gray-300">
            <div class="mb-4">
                <strong class="block text-sm font-semibold mb-1">ID</strong>
                <p class="text-sm">{{ $produto->id }}</p>
            </div>

            <div class="mb-4">
                <strong class="block text-sm font-semibold mb-1">Descrição</strong>
                <p class="text-sm">{{ $produto->descricao }}</p>
            </div>

            <div class="mb-4">
                <strong class="block text-sm font-semibold mb-1">Preço Unitário</strong>
                <p class="text-sm">R$ {{ number_format($produto->preco_unitario, 2, ',', '.') }}</p>
            </div>

            <div class="mb-4">
                <strong class="block text-sm font-semibold mb-1">Estoque</strong>
                <p class="text-sm">{{ $produto->estoque }}</p>
            </div>

            <div class="mb-4">
                <strong class="block text-sm font-semibold mb-1">Data de Vencimento</strong>
                <p class="text-sm">{{ $produto->data_vencimento }}</p>
            </div>
        </div>

        <a href="{{ route('produtos.index') }}" class="mt-4 inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Voltar
        </a>
    </div>
</x-app-layout>