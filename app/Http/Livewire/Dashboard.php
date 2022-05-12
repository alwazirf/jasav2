<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Member;
use App\Models\User;

class Dashboard extends Component
{
    public function render()
    {
        return view('livewire.dashboard', [
            'data' => Member::all(),
            'users' => User::all(),
            'dataMember' => Member::select('members.*')->with('district.city')
                ->join('districts', 'members.district_id', 'districts.id')
                ->where('districts.city_id', '=', auth()->user()->city_id)
                ->get()
        ]);
    }
}
