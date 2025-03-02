<x-layout.layout title="Homepage">
<div>
            <div>
               <h1>Ricerca utenti</h1>
             </div>
            <div class=“mt-5”>
            <div class=“col-lg-6”>
            <input type="text" id="search" name="search" class="form-control" wire:model.live="search">
            </div>
            <div class=“col-lg-6”>
                 <h4>Elenco utenti</h4>
                 
                 <div class=“mt-5”>

                 @foreach($users as $user)
                    <div>{{ $user->name }}</div>
                 @endforeach

         </div>
      </div>
   </div>
</div>
</x-layout.layout>