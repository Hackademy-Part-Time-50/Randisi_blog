   <div>
            <div>
               <h1>Ricerca utenti</h1>
             </div>
            <div class=“mt-5”>
            <div class=“col-lg-6”>
            <input wire:model.live="search" type="text" id="search" name="search" class="form-control">
               
         </div>
            <div class=“col-lg-6”>
                 <h4>Utenti Trovati</h4>
                 
                 <div class=“mt-5”>

                 @foreach($users as $user)
                    <div>{{ $user->name }}</div>
                 @endforeach

            </div>
         </div>
      
   </div>
   </div> 

