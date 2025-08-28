<div class="container mt-5">
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="body">
        <div class="card shadow px-2">
            <h2 class="card-title text-center">Ambientes</h2>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Descrição</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($ambientes as $ambiente)
                            <tr>
                                <td>{{ $ambiente->id }}</td>
                                <td>{{ $ambiente->nome }}</td>
                                <td>{{ $ambiente->descricao }}</td>
                                <td>{{ $ambiente->status }}</td>
                                <td>
                                    <a class="btn btn-warning text-light"
                                        href="{{ route('ambiente.editar', $ambiente->id) }}"><strong>Editar</strong></a>

                                    <button wire:click="delete({{ $ambiente->id }})" class="btn btn-danger text-light "
                                        onclick="return confirm('Tem certeza?')">
                                        <strong>Deletar</strong>
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
