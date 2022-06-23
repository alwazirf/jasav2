<?php

namespace App\Http\Livewire;

use Livewire\WithFileUploads;

use Livewire\Component;
use App\Models\Member;
use App\Models\City;
use App\Models\District;

class TambahAnggota extends Component
{
    use WithFileUploads;
    public $name;
    public $gender;
    public $place_of_born;
    public $date_of_born;
    public $city = null;
    public $district;
    public $address;
    public $number_child;
    public $number_of_sibling;
    public $status;
    public $last_education;
    public $jobs;
    public $skill;
    public $phone;
    public $email;
    public $facebook;
    public $instagram;
    public $image;
    public $father_name;
    public $father_enc;
    public $father_address;
    public $father_place_of_born;
    public $father_date_of_born;
    public $father_place_of_death;
    public $father_date_of_death;
    public $mother_name;
    public $mother_address;
    public $mother_place_of_born;
    public $mother_date_of_born;

    public $cities;
    public $districts;
    // public $selectedCity = null;

    public function mount()
    {
        if (auth()->user()->is_admin == true) {
            $this->cities = City::all();
            $this->districts = collect();
        } else {
            $this->cities = auth()->user()->city;
            $this->districts = District::where('city_id', '=', auth()->user()->city->id)->get();
        }
    }


    public function updatedCity($value)
    {
        $this->districts = District::where('city_id', $value)->get();
        $this->district = $this->districts->first()->id ?? null;
    }

    public function render()
    {
        return view('livewire.tambah-anggota');
    }

    public function store()
    {
        $this->validate([
            'name' => 'required|min:3',
            'gender' => 'required',
            'place_of_born' => 'required',
            'date_of_born' => 'required',
            'district' => 'required',
            'address' => 'required',
            'number_child' => 'required',
            'number_of_sibling' => 'required',
            'status' => 'required',
            'last_education' => 'required',
            'jobs' => 'required',
            'skill' => 'required',
            'phone' => 'required',
            'email' => 'required|unique:members',
            'facebook' => 'required',
            'instagram' => 'required',
            'image' => 'image|file|max:1024',
            'father_name' => 'required',
            'father_enc' => 'required',
            'father_address' => 'required',
            'father_place_of_born' => 'required',
            'father_date_of_born' => '',
            'father_place_of_death' => 'required',
            'father_date_of_death' => 'required',
            'mother_name' => 'required',
            'mother_address' => 'required',
            'mother_place_of_born' => '',
            'mother_date_of_born' => '',
        ]);

        $filename = "";
        if ($this->image) {
            $filename = $this->image->store('images', 'public');
        } else {
            $filename = Null;
        }

        $id_member = Member::All()->count() == 0 ? 0 : Member::latest()->first()->id;

        $member = Member::create([
            // 'user_id' => auth()->user()->id,
            // 'member_no' => '01/' . $this->city . '/' . $this->district,
            'user_id' => auth()->user()->id,
            'member_no' => 20151216 . str_pad($this->city, 2, '0', STR_PAD_LEFT) . str_pad($id_member + 1, 5, '0', STR_PAD_LEFT),
            'name' => $this->name,
            'gender' => $this->gender,
            'place_of_born' => $this->place_of_born,
            'date_of_born' => $this->date_of_born,
            'district_id' => $this->district,
            'address' => $this->address,
            'number_child' => $this->number_child,
            'number_of_sibling' => $this->number_of_sibling,
            'status' => $this->status,
            'last_education' => $this->last_education,
            'jobs' => $this->jobs,
            'skill' => $this->skill,
            'phone' => $this->phone,
            'email' => $this->email,
            'facebook' => $this->facebook,
            'instagram' => $this->instagram,
            'image' => $filename,
            'father_name' => $this->father_name,
            'father_enc' => $this->father_enc,
            'father_address' => $this->father_address,
            'father_place_of_born' => $this->father_place_of_born,
            'father_date_of_born' => $this->father_date_of_born,
            'father_place_of_death' => $this->father_place_of_death,
            'father_date_of_death' => $this->father_date_of_death,
            'mother_name' => $this->mother_name,
            'mother_address' => $this->mother_address,
            'mother_place_of_born' => $this->mother_place_of_born,
            'mother_date_of_born' => $this->mother_date_of_born,
        ]);
        session()->flash('message', 'Data telah tersimpan!');
        $this->resetInput();

        redirect()->to('/member-data');
        // $this->emit('memberStored', $member);
    }

    private function resetInput()
    {
        $this->name = null;
        $this->gender = null;
        $this->place_of_born = null;
        $this->date_of_born = null;
        $this->city = null;
        $this->district = null;
        $this->address = null;
        $this->number_child = null;
        $this->number_of_sibling = null;
        $this->status = null;
        $this->last_education = null;
        $this->jobs = null;
        $this->skill = null;
        $this->phone = null;
        $this->email = null;
        $this->facebook = null;
        $this->instagram = null;
        $this->image = null;
        $this->father_name = null;
        $this->father_enc = null;
        $this->father_address = null;
        $this->father_place_of_born = null;
        $this->father_date_of_born = null;
        $this->father_place_of_death = null;
        $this->father_date_of_death = null;
        $this->mother_name = null;
        $this->mother_address = null;
        $this->mother_place_of_born = null;
        $this->mother_date_of_born = null;
    }
}
