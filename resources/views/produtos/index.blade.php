<!-- resources/views/produtos/index.blade.php -->

<x-app-layout>
    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-2xl font-semibold text-gray-800 dark:text-gray-200">Lista de Produtos</h1>
            <a href="{{ route('produtos.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Novo Produto
            </a>
        </div>

        <div class="mb-4">
            <form action="{{ route('produtos.index') }}" method="GET" class="flex">
                <input type="text" name="search" value="{{ request('search') }}" placeholder="Pesquisar por descrição" class="form-input">
                <button type="submit" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                    Pesquisar
                </button>
            </form>
        </div>

        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        ID
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Descrição
                    </th>
                    
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Preço Unitário
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Estoque
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Data de Vencimento
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Total
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <span class="sr-only">Editar</span>
                    </th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach($produtos as $produto)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $produto->id }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $produto->descricao }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">R$ {{ number_format($produto->preco_unitario, 2, ',', '.') }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $produto->estoque }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $produto->data_vencimento }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">R$ {{ number_format($produto->preco_unitario * $produto->estoque, 2, ',', '.') }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <a href="{{ route('produtos.edit', $produto->id) }}" class="text-blue-500 hover:text-blue-700">Editar</a>
                            <a href="{{ route('produtos.show', $produto->id) }}" class="ml-2 text-blue-500 hover:text-blue-700">Detalhes</a>
                            <form action="{{ route('produtos.destroy', $produto->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:text-red-700 ml-2">Excluir</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{ $produtos->links() }}
    </div>
</x-app-layout>
