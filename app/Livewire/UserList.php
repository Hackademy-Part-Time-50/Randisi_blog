<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\On;


class UserList extends Component
{

    public function deleteUser($user_id)
    {

        $user = User::find($user_id);
        $user->articles()->update(['user_id' => null]);
        $user->delete();
    }

    #[On('user-created')]
    public function render()
    {
        return view('livewire.user-list', [
            'users' => User::orderBy('created_at', 'DESC')->get(),
        ]);
    }
}
