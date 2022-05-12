<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Hash;


use Livewire\Component;
use App\Models\User;
use App\Models\City;
use App\Models\District;
use App\Models\Level;

class TambahUser extends Component
{
    public $name;
    public $email;
    public $level_id;
    public $district;
    public $city;
    public $password;
    public $cities;
    public $levels;
    public $districts;
    public $user;
    public $showSuccesNotification  = false;

    protected $rules = [
        'name' => 'max:40|min:3',
        'email' => 'email:rfc,dns|unique:users',
        'city' => 'min:1',
        // 'district_id' => 'min:1',
        'level_id' => 'min:1',
        'password' => 'min:1',
    ];

    public function mount()
    {
        $this->levels = Level::all();
        $this->cities = City::all();
        $this->districts = collect();
    }

    public function updatedCity($value)
    {
        $this->districts = District::where('city_id', $value)->get();
        $this->district = $this->districts->first()->id ?? null;
    }
    public function render()
    {
        return view('livewire.tambah-user');
    }
    public function save()
    {
        $this->validate();
        $user = [
            'name' => $this->name,
            'email' => $this->email,
            'city_id' => $this->city,
            'level_id' => $this->level_id,
            'is_admin' => $this->level_id === 1 ? True : False,
            'password' => Hash::make($this->password)
        ];
        // dd($user);
        User::create($user);
        // $user = User::create([
        //     'name' => $this->name,
        //     'email' => $this->email,
        //     'city_id' => $this->city,
        //     'level_id' => $this->level_id,
        //     'is_admin' => $this->level_id === 1 ? True : False,
        //     'password' => Hash::make($this->password)
        // ]);
        session()->flash('message', 'Data telah tersimpan!');
        return redirect()->to('/user-management');
    }
}
