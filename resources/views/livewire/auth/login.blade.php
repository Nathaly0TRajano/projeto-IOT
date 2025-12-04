<div class="mt-4">
    @if(session('error'))
    <div class="alert alert-danger">{{$message}}</div>
    @endif

    <form wire:submit='login'>
        <div class="card mx-auto p-2 col-md-4 mt-2">
    <div class="card-body column">
        <div class="input mb-2">
            <label for="text">Email:</label>
            <input type="email" wire:model='email' class="form-control ">
            @error('email') <div class="alert text-danger">{{$message}}</div>@enderror
        </div>
        <div class="input mb-2">
            <label for="text">Senha:</label>
            <input type="password" wire:model='password' class="form-control ">
            @error('password') <div class="alert text-danger">{{$message}}</div>@enderror
        </div>
        
        <div class="text-center"> 
             <button class="mt-2 btn btn-primary ">Login</button>
        </div>
    </div>
   </div>
    </form>
</div>
