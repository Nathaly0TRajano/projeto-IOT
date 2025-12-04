<div class="container mt-5">
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="body">
        <div class="card shadow px-2">
            <div class="card-body">
                <div class="d-flex row input-group">
                    <h3 class="">Usuários:</h3>
                    <div class="col-md-12 text-end mb-2">
                        <a href="{{ route('user.create') }}" class="btn bg-primary text-light">
                            <strong><i class="bi bi-plus-circle"></i> Novo Usuário</strong>
                        </a>
                    </div>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Email</th>
                            {{-- <th>Ações</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($user as $u)
                            <tr>
                                <td>{{ $u->id }}</td>
                                <td>{{ $u->name }}</td>
                                <td>{{ $u->email }}</td>
                                {{-- <td>
                                    <a class="btn btn-warning text-light"
                                        href="#"><strong>Editar</strong></a>

                                    <button wire:click="delete({{ $u->id }})" class="btn btn-danger text-light "
                                        onclick="return confirm('Tem certeza?')">
                                        <strong>Deletar</strong>
                                    </button>
                                </td> --}}
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
