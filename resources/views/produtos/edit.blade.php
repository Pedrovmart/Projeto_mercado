<!-- resources/views/produtos/edit.blade.php -->

<x-app-layout>
    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
        <h1 class="text-2xl font-semibold mb-4 text-gray-800 dark:text-gray-200">Editar Produto</h1>

        <form action="{{ route('produtos.update', $produto->id) }}" method="POST">
            @csrf
            @method('PATCH')

            <div class="mb-4">
                <label for="descricao" class="block text-sm font-semibold mb-1">Descrição</label>
                <input type="text" name="descricao" id="descricao" class="form-input" value="{{ $produto->descricao }}" required>
            </div>

            <div class="mb-4">
                <label for="preco_unitario" class="block text-sm font-semibold mb-1">Preço Unitário</label>
                <input type="number" name="preco_unitario" id="preco_unitario" class="form-input" step="0.01" value="{{ $produto->preco_unitario }}" required>
            </div>

            <div class="mb-4">
                <label for="estoque" class="block text-sm font-semibold mb-1">Estoque</label>
                <input type="number" name="estoque" id="estoque" class="form-input" value="{{ $produto->estoque }}" required>
            </div>

            <div class="mb-4">
                <label for="data_vencimento" class="block text-sm font-semibold mb-1">Data de Vencimento</label>
                <input type="date" name="data_vencimento" id="data_vencimento" class="form-input" value="{{ $produto->data_vencimento }}" required>
            </div>

            <div class="mb-4">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Atualizar
                </button>
                <a href="{{ route('produtos.index') }}" class="ml-4 inline-block bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                    Cancelar
                </a>
            </div>
        </form>
    </div>
</x-app-layout>