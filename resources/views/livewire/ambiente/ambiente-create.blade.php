<div class="container mt-5">
    <div class="body">
        <div class="card shadow px-2">
            <h2 class="card-title text-center">Ambientes</h2>
            <div class="card-body">
                <form wire:submit="store">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nome:</label>
                        <input type="ambiente" class="form-control" id="exampleFormControlInput1"
                            placeholder="Sala de Estar" wire:model.defer="nome">
                             @error('nome')
                            <span class="text-danger small">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Descrição:</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" wire:model.defer="descricao"></textarea>
                         @error('descricao')
                            <span class="text-danger small">{{ $message }}</span>
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
                            <span class="text-danger small">{{ $message }}</span>
                        @enderror
                    </div>

                    <button class="btn bg-success rounded-pill text-light">Cadastrado</button>
                </form>
            </div>
        </div>
    </div>
</div>
