<div class="container mt-3">
    
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="card ">
        <div class="card-body">
            <div class="d-flex row input-group">
                    <h3 class="">Sensores:</h3>
                <div class="col-md-12 text-end mb-2">
                    <a href="{{ route('sensor.create') }}" class="btn bg-primary text-light">
                        <strong><i class="bi bi-plus-circle"></i> Novo Sensor</strong>
                    </a>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Ambiente</th>
                            <th>Tipo</th>
                            <th>Status</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($sensors as $sensor)
                            <tr>
                                <td>{{ $sensor->id }}</td>
                                <td>{{ $sensor->ambiente_id }}</td>
                                <td>{{ $sensor->tipo }}</td>
                                <td>{{ $sensor->status }}</td>
                                <td>
                                    <a href="{{ route('sensor.edit', $sensor->id) }}"
                                        class="btn btn-sm btn-warning text-light rounded-pill">
                                        <strong>Editar</strong>
                                    </a>

                                    <button wire:click="delete({{ $sensor->id }})"
                                        class="btn btn-sm btn-danger text-light rounded-pill"
                                        onclick="return confirm('Tem certeza?')">
                                        <strong>Deletar</strong>
                                    </button>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center">Nenhum sensor encontrado.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="mt-3">
                {{ $sensors->links() }}
            </div>
        </div>
    </div>
</div>
