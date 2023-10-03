<x-app-layout>
    <link rel="stylesheet" href="{{ asset('css/autores/index.css') }}">
    <div class="container">
       
        <br>
        <a href="{{ route('clientes.create') }}" class="btn btn-primary">Novo Cliente</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Telefone</th>
                    <th>Endereço</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($clientes as $cliente)
                    <tr>
                        <td class="colunas">{{ $cliente->id }}</td>
                        <td id="nome">{{ $cliente->nome }}</td>
                        <td id="email">{{ $cliente->email }}</td>
                        <td id="telefone">{{ $cliente->telefone }}</td>
                        <td id="endereco">{{ $cliente->endereco }}</td>
                        <td>
                            <a href="{{ route('clientes.show', $cliente->id) }}" class="btn btn-info">Detalhes</a>
                            <a href="{{ route('clientes.edit', $cliente->id) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('clientes.destroy', $cliente->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Excluir</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>