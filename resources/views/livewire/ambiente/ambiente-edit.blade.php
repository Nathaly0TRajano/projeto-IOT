<div>
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="d-flex justify-content-center align-items-center mx-auto">
        <div class="card col-md-6 bg-primary text-light shadow">
            <form wire:submit.prevent="salvar" class="form">
                <div class="card-body">
                    <h5 class="title mb-1">Editar Ambientes</h5>
                    <div class="mb-3">
                        <label for="exampleFormControl">Nome do ambiente:</label>
                        <input type="form-control" id="" class="form-control" wire:model.defer="nome">
                        @error('nome')
                            <span class="text-light small">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Descrição:</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" wire:model.defer="descricao"></textarea>
                        @error('descricao')
                            <span class="text-light small">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControl">Status</label>
                        <select class="form-select" aria-label="Default select example" wire:model.defer="status"
                            id="ambiente_id">
                            <option value="0">Desligado</option>
                            <option value="1">Ligado</option>
                        </select>
                        @error('status')
                            <span class="text-light small">{{ $message }}</span>
                        @enderror
                    </div>
                    <button class="btn bg-success text-light">Salvar</button>
                    <a href="{{ route('ambiente.index') }}" class="btn bg-danger text-light">Fechar</a>
                </div>
            </form>
        </div>
    </div>
</div>
