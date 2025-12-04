<?php

namespace App\Livewire\User;

use App\Models\User;
use Livewire\Component;

class UserIndex extends Component
{
    public function render()
    {
        $user = User::all();
        return view('livewire.user.user-index', compact('user'));
    }

}
