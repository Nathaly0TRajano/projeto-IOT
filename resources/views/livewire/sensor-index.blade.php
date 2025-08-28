<div class="container mt-3">
    <div class="card bg-primary">
        <div class="card-body">
            <div class="d-flex row input-group">
                    <h3 class="text-light">Sensores:</h3>
                <div class="col-md-12 text-end mb-2">
                    <a href="{{ route('sensor.create') }}" class="btn text-bg-light">
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
