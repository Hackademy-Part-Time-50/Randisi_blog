<?php

namespace App\Livewire;
use \App\Models\User;
use Egulias\EmailValidator\Result\ValidEmail;
use Livewire\Attributes\Validate;
use Livewire\Component;

class UserForm extends Component
{

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
            "email" => "required|email|unique:users,email",
            //Aggiunta Validazione su Email Univoca
            "password" => "required",
        ];
    }

    public function messages()
    
    {
        return [
            "name.required" => "Il Nome è Obbligatorio",
            "name.max:5" => "Il Nome Non deve essere più lungo di 5 caratteri",
            
            "email.required" => "l'email è Obbligatoria",
            
            "password.required" => "La password è Obbligatoria",
        ];
    }
    
    public function submit() 
    {
        $this->validate([
            "name" => "required|max:30",
            "email" => "required",
            "password" => "required",
        ], [

            "name.required" => "Il Nome è Obbligatorio",
            "name.max:30" => "Il Nome Non deve essere più lungo di 30 caratteri",
            
            "email.required" => "l'email è Obbligatoria",
            
            "password.required" => "La password è Obbligatoria",
]);

        //Metodo Esteso
        User::create([
             'name' => $this->name,
             'email' => $this->email,
             'password' => $this->password,
         ]);

         //Metodo Corto
        // User::create($this->only(

        //         'name',
        //         'email',
        //         'password',
        // ));

        $this->reset('name', 'email', 'password');

        session()->flash('success', 'Utente Creato');

        $this->dispatch("user-created");
    }

    public function render()
    {
        return view('livewire.user-form');
    }
}
