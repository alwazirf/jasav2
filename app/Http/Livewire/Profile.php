<?php

namespace App\Http\Livewire;

use Livewire\Component;
use APP\Models\User;

class Profile extends Component
{
    public function render()
    {
        return view('livewire.profile', [
            'user' => User::has('level')->where('email', auth()->user()->email)->first(),
        ]);
    }
}
