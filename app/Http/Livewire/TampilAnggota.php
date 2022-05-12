<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Member;


class TampilAnggota extends Component
{
    public function mount($id)
    {
        $this->member = Member::with('district.city')->where('id', $id)->first();
    }
    public function render()
    {
        return view('livewire.tampil-anggota');
    }
}
