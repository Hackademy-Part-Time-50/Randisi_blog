<div class="bg-dark-subtle">
    <x-success />
    <h1 class="mb-4">{{$userId ? 'Modifica Utente' : 'Crea un nuovo utente'}}</h1>
    <h4>{{$userId ? 'Modifica i Campi Sottostanti' :  'Completa il form sottostante' }}</h4>
    
    <form wire:submit="submit">

        <label for="name">Nome</label>
        <input wire:model.debounce.="name" type="text" id="name" name="name"class="form-control">
    
        <div class="mb-3 text-danger">@error('name') {{$message}} @enderror</div>

        <label for="email">Email</label>
        <input wire:model="email" type="email" id="email" name="email" class="form-control">
        <div class="mb-3 text-danger">@error('email') {{$message}} @enderror</div>

        <label for="password">Password</label>
        <input wire:model="password" type="password" id="password" name="password" class="form-control">
        <div class="mb-4 text-danger">@error('password') {{$message}} @enderror</div>
        
        <div class="col-12">
        <button type="submit" class="btn btn-primary">{{$userId ? 'Modifica Utente' :  'Crea Utente' }}</button>
        
        @if($userId)
        <button wire:click="resetForm" type="button" class=" m-2 btn btn-secondary">Annulla</button>
        @endif
        </div>
        
        
    </form>
    </div>
</div>
