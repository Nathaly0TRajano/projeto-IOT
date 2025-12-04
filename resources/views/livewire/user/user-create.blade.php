<div class="mt-4">
    @if(session('error'))
    <span class="alert alert-danger">{{$message}}</span>
    @endif

    <form wire:submit='store'>
        <div class="card shadow mx-auto p-2 col-md-4 mt-2">
    <div class="card-body column">
         <div class="input mb-2">
            <label for="text">Nome:</label>
            <input type="text" wire:model='name' class="form-control ">
            @error('name') <span class=" text-danger small">{{$message}}</span>@enderror
        </div>
        <div class="input mb-2">
            <label for="text">Email:</label>
            <input type="email" wire:model='email' class="form-control ">
            @error('email') <span class=" text-danger small">{{$message}}</span>@enderror
        </div>
        <div class="input mb-2">
            <label for="text">Senha:</label>
            <input type="password" wire:model='password' class="form-control ">
            @error('password') <span class=" text-danger small">{{$message}}</span>@enderror
        </div>
        
        <div class="text-center"> 
            <button class="mt-2 btn btn-success ">Cadastro</button>
            <a href="{{route('user.index')}}" class="mt-2 btn btn-danger">Fechar</a>
        </div>
    </div>
   </div>
    </form>
</div>

