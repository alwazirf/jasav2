<?php

namespace App\Http\Livewire;

use Livewire\WithFileUploads;
use Illuminate\Support\Facades\File;

use Livewire\Component;
use App\Models\Member;
use App\Models\City;
use App\Models\District;

class EditAnggota extends Component
{
    use WithFileUploads;
    public $name;
    public $gender;
    public $place_of_born;
    public $date_of_born;
    public $city;
    public $district_id;
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
    public $father_name;
    public $father_address;
    public $father_place_of_born;
    public $father_date_of_born;
    public $father_place_of_death;
    public $father_date_of_death;
    public $mother_name;
    public $mother_address;
    public $mother_place_of_born;
    public $mother_date_of_born;
    public $image;

    public $oldImage;
    public $newImage;

    public $cities;
    public $districts;
    public $memberId;

    public function mount($id)
    {
        if (auth()->user()->is_admin == true) {
            $this->cities = City::all();
            $this->districts = District::all();
        } else {
            $this->cities = auth()->user()->city;
            $this->districts = District::where('city_id', '=', auth()->user()->city->id)->get();
        }

        // dd($this->showMember($id));
        $this->memberId = Member::find($id);
        $member = Member::find($id);
        // $this->cities = City::all();
        // $this->districts = District::all();

        if ($member) {
            $this->memberId = $member->id;
            $this->name = $member->name;
            $this->gender = $member->gender;
            $this->place_of_born = $member->place_of_born;
            $this->date_of_born = $member->date_of_born;
            $this->city = $member->district->city->id;
            $this->district = $member->district->id;
            $this->address = $member->address;
            $this->number_child = $member->number_child;
            $this->number_of_sibling = $member->number_of_sibling;
            $this->status = $member->status;
            $this->last_education = $member->last_education;
            $this->jobs = $member->jobs;
            $this->skill = $member->skill;
            $this->phone = $member->phone;
            $this->email = $member->email;
            $this->facebook = $member->facebook;
            $this->instagram = $member->instagram;

            // $this->image = $member->image;
            $this->oldImage = $member->image;

            $this->father_name = $member->father_name;
            $this->father_enc = $member->father_enc;
            $this->father_address = $member->father_address;
            $this->father_place_of_born = $member->father_place_of_born;
            $this->father_date_of_born = $member->father_date_of_born;
            $this->father_place_of_death = $member->father_place_of_death;
            $this->father_date_of_death = $member->father_date_of_death;
            $this->mother_name = $member->mother_name;
            $this->mother_address = $member->mother_address;
            $this->mother_place_of_born = $member->mother_place_of_born;
            $this->mother_date_of_born = $member->mother_date_of_born;
        }
    }

    public function updatedCity($value)
    {
        $this->districts = District::where('city_id', $value)->get();
        $this->district = $this->districts->first()->id ?? null;
    }
    public function render()
    {
        return view('livewire.edit-anggota');
    }

    public function update()
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
            'email' => 'required',
            'facebook' => 'required',
            'instagram' => 'required',
            'newImage' => $this->newImage != null ? 'image|file|max:1024' : '',
            'father_name' => 'required',
            'father_enc' => 'required',
            'father_address' => 'required',
            'father_place_of_born' => 'required',
            'father_date_of_born' => '',
            'father_place_of_death' => 'required',
            'father_date_of_death' => 'required',
            'mother_name' => 'required|max:255',
            'mother_address' => 'required',
            'mother_place_of_born' => '',
            'mother_date_of_born' => '',
        ]);

        $filename = "";
        if ($this->newImage != null) {
            $filename = $this->newImage->store('images', 'public');
            $member = Member::find($this->memberId);
            $destination = public_path('storage\\' . $this->oldImage);
            if (File::exists($destination)) {
                File::delete($destination);
            }
        } else {
            $filename = $this->oldImage;
        }

        if ($this->memberId) {
            $member = Member::has('district.city')->find($this->memberId);
            $member->update([
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

            $this->emit('contactUpdate', $member);
            session()->flash('message', 'Data ' . $this->name .  ' telah terupdate!');
            redirect()->to('/member-data');
        }
    }
}
