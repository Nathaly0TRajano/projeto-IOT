<div class="container card bg-primary mt-2">
    <table class="table table-striped">
        <thead class="">
            <div class="row">
                <div class="mt-2 mb-2">
                    <h4 class="color-light">Tabela de registros:</h4>
                </div>
                <div class="input-group col p-1 bg-body-tertiary rounded-pill">
                    <input type="search" wire:model.debounce.300ms="search"
                        class="form-control float-end mx-2 bg-transparent border border-0 col-md-2"
                        placeholder="Buscar valores..." wire:model.live="search">
                    <i class="bi bi-search text-secondary p-1" id="toggleIcon"></i>
                </div>
            </div>
        </thead>
        <tbody>
            <tr>
                <th>ID</th>
                <th>Sensor</th>
                <th>Valor</th>
                <th>Unidade</th>
                <th>Data e Hora</th>
                <th>Ações</th>
            </tr>
            <tr>
                @foreach ($registros as $r)
                    <td>{{ $r->id }}</td>
                    <td>{{ $r->sensor_id }}</td>
                    <td>{{ $r->valor }}</td>
                    <td>{{ $r->unidade }}</td>
                    <td>{{ $r->data_hora }}</td>
                    <td><a wire:click="delete({{ $r->id }})" class="btn bg-danger"
                            onclick="return confirm('Tem certeza?')"><strong>Deletar</strong></a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="mt-3">
        {{ $registros->links() }}
    </div>
</div>
