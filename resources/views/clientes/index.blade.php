<x-app-layout>


   <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-2xl font-semibold text-gray-600 dark:text-gray-200">Lista de Clientes</h1>
            <a href="{{ route('clientes.create') }}" class="btn btn-primary">Novo Cliente</a>
        </div>

        <div class="mb-4">
            <form action="{{ route('clientes.index') }}" method="GET" class="flex">
                <input type="text" name="search" class="form-control" placeholder="Pesquisar por nome">
                <button type="submit" class="btn btn-primary ml-2">Pesquisar</button>
            </form>
        </div>

        <table id="clientesTable" class="table mt-6 w-full">
            <thead class="bg-gray-40">
                <tr class="bg-gray-100">
                <th scope="col" class="px-2 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        ID
                    </th>
                    <th scope="col" class="px-2 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Nome
                    </th>
                    <th scope="col" class="px-2 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Email
                    </th>
                    <th scope="col" class="px-2 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Telefone
                    </th>
                    <th scope="col" class="px-2 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Endereço
                    </th>
                    <th scope="col" class="px-2 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Ações
                    </th>
            </thead>
            <tbody>
                @foreach ($clientes as $cliente)
                    <tr>
                        <td class="px-4 py-2 whitespace-nowrap">{{ $cliente->id }}</td>
                        <td class="px-4 py-2 whitespace-nowrap">{{ $cliente->nome }}</td>
                        <td class="px-4 py-2 whitespace-nowrap">{{ $cliente->email }}</td>
                        <td class="px-4 py-2 whitespace-nowrap">{{ $cliente->telefone }}</td>
                        <td class="px-4 py-2 whitespace-nowrap">{{ $cliente->endereco }}</td>
                        <td class="px-4 py-2 whitespace-nowrap">
                            <div class="btn-group" role="group">
                                <a href="{{ route('clientes.show', $cliente->id) }}" class="btn btn-info btn-sm">Detalhes</a>
                                <a href="{{ route('clientes.edit', $cliente->id) }}" class="btn btn-warning btn-sm">Editar</a>
                                <form action="{{ route('clientes.destroy', $cliente->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Excluir</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{ $clientes->links() }}
    </div>

    @section('scripts')
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                new DataTable('#clientesTable', {
                    "language": {
                        "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese-Brasil.json"
                    }
                });
            });
        </script>
    @endsection
</x-app-layout>
