<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class SearchUser extends Component
{

    public $search = '';

    public function render()
    {
        return view('livewire.search-user', [

            'users' => User::where('name', 'LIKE', "%{$this->search}%")->get(),
        ]);
    }

    // public function search($search) {
        
    //     return $search ? self::where('name', 'LIKE', "%{$search}%")->get() : [];
    // }
}
//Riprendi da 1.25.15