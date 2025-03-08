<?php

namespace App\Livewire;
use \App\Models\User;
use Egulias\EmailValidator\Result\ValidEmail;
use Livewire\Attributes\Validate;
use Livewire\Attributes\On;
use Livewire\Component;



class UserForm extends Component
{
    public $userId;

    #[Validate]
    public $name;
    
    #[Validate]
    public $email;

    #[Validate]
    public $password;


    public function rules()
    {
        return [
            "name" => "required|max:5",
            "email" => "required|email|unique:users,email" . ($this->userId ? ',' .$this->userId : ''),
            //Aggiunta Validazione su Email Univoca
            "password" => $this->userId ? '' : 'required',
        ];
    }

    public function messages()
    
    {
        return [
            "name.required" => "Il Nome è Obbligatorio",
            // "name.max:5" => "Il Nome Non deve essere più lungo di 5 caratteri",
            
            // "email.required" => "l'email è Obbligatoria",
            
            // "password.required" => "La password è Obbligatoria",
        ];
    }
    
    public function submit() 
    {
        $this->validate([
            "name" => "required|max:30",
            "email" => "required",
            "password" => $this->userId ? '' : 'required',
        ], [

            "name.required" => "Il Nome è Obbligatorio",
            "name.max:30" => "Il Nome Non deve essere più lungo di 30 caratteri",
            
            "email.required" => "l'email è Obbligatoria",
            
            "password.required" => "La password è Obbligatoria",
]);

        //Modifica Utente
        if ($this->userId) {

            $data = [
                'name' => $this->name,
                 'email' => $this->email,
            ];

            if($this->password) {
                $data['password'] = $this->password;
            }

            User::find($this->userId)->update($data);
        
            $succes_msg = "Utente Modificato Con Successo";

            }else{

        //Creo Utente 
            
        //Metodo Esteso
        User::create([
             'name' => $this->name,
             'email' => $this->email,
             'password' => $this->password,
         ]);
         $succes_msg = "Utente Crato Con Successo";
        }

         //Metodo Corto
        // User::create($this->only(

        //         'name',
        //         'email',
        //         'password',
        // ));

        $this->reset('name', 'email', 'password', 'userId');

        session()->flash('success', $succes_msg);

        $this->dispatch("user-created");
    }

    //Funzione Per Reset del Form TASTO ANNULLA
    public function resetForm()
    {
        $this->reset('name', 'email', 'password', 'userId');
        $this->resetErrorBag();
    }

    #[On('user-edit')]
    public function edit(User $user)
    {
        
        $this->userId = $user->id;
        $this->name = $user->name;
        $this->email = $user->email;

        //Reset dei messaggi di errore
        $this->resetErrorBag();
    }

    public function render()
    {
        return view('livewire.user-form');
    }
}
