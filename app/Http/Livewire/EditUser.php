<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use App\Models\District;
use App\Models\City;
use App\Models\Level;

class EditUser extends Component
{
    public $cities;
    public $city;
    public $district;
    public $levels;
    public $user;
    public $userId;
    public $email;
    public $name;
    public $level_id;
    public $district_id;
    public $showSuccesNotification  = false;

    public $showDemoNotification = false;

    protected $rules = [
        'name' => 'max:40|min:3',
        'email' => 'email:rfc,dns',
        // 'district' => 'min:1',
        'city' => 'min:1',
        'level_id' => 'min:1',
        // 'password' => 'min:6|same:passwordConfirmation'
    ];

    public function mount($id)
    {
        $this->cities = City::all();
        $this->districts = District::all();
        $this->levels = Level::all();
        $this->user = User::find($id);

        if ($this->user) {
            $this->userId = $this->user->id;
            $this->city = $this->user->city->id;
            $this->name = $this->user->name;
            $this->email = $this->user->email;
            $this->level_id = $this->user->level_id;
            $this->district = $this->user->district_id;
        }
    }

    public function updatedCity($value)
    {
        $this->districts = District::where('city_id', $value)->get();
        $this->district = $this->districts->first()->id ?? null;
    }

    public function update()
    {
        $this->validate();
        if ($this->userId) {
            $user = User::find($this->userId);
            $user->update([
                'name' => $this->name,
                'email' => $this->email,
                'city_id' => $this->city,
                'level_id' => $this->level_id,
            ]);
            session()->flash('message', 'Data ' . $this->user->name .  ' telah terupdate!');
        }
        $this->showSuccesNotification = true;

        return redirect()->to('/user-data');
    }
    public function render()
    {
        return view('livewire.edit-user');
    }
}
