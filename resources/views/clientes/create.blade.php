<body>
    <div class="container">
        <h1>Novo Cliente</h1>
        <form action="{{ route('clientes.store') }}" method="POST">
            <!-- Token CSRF para proteção contra ataques CSRF -->
            @csrf
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" name="nome">
                </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" name="email">
                </div>
            <div class="form-group">
                <label for="telefone">Telefone:</label>
                <input type="text" name="telefone">
                </div>
            <button type="submit" class="btn btn-success">Salvar</button>
            <a href="{{ route('clientes.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</body>
