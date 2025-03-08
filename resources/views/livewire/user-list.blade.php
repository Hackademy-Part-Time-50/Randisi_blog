<div>
   <p>Lista Utenti</p>

   <div class="mt-5">
        @foreach($users as $user)
            <div class="shadow-sm rounded p-4 m-5 bg-dark-subtle">
                <h6>{{$user->name}}</h6>
            
            
            <div class="col-lg-6 text-end">
                <button wire:click="edit({{$user->id}})" class="btn btn-secondary">Modifica</button>
                <button wire:click="deleteUser({{ $user->id }})" class="ms-2 btn btn-danger">Cancella</button>
            </div>   
                
            <div class="mt-2">
                    {{$user->email}}
            </div>
            </div>
        @endforeach
    </div>
</div>
