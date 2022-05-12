<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;


class TampilUser extends Component
{
    public function mount($id)
    {
        $this->user = User::find($id);
    }
    public function render()
    {
        return view('livewire.tampil-user');
    }
}
