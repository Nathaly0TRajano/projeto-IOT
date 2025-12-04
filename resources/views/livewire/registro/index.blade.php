<div class="container card  mt-2">
    <table class="table table-striped">
        <thead class="">
            <div class="row mt-3">
                <div class="col">
                    <h4 class="">Tabela de registros:</h4>
                </div>
                <div class="col-md-3">
                    <div class="input-group mb-3 col rounded-pill" style='background-color:#DEDEDE'>
                        <input type="search" wire:model.debounce.300ms="search"
                            class="form-control mx-2 bg-transparent border-0" placeholder="Buscar valores..."
                            wire:model.live="search">
                        <i class="bi bi-search text-secondary p-1" id="toggleIcon"></i>
                    </div>
                </div>
            </div>
        </thead>
        <tbody>
            <tr>
                <th>ID</th>
                <th>Código do Sensor</th>
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
                    <td><a wire:click="delete({{ $r->id }})" class="btn bg-danger text-light"
                            onclick="return confirm('Tem certeza?')"><strong>Deletar</strong></a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="mt-3">
        {{ $registros->links() }}
    </div>
</div>
