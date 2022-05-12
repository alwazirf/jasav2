<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\File;


use App\Models\Member;
use App\Models\City;
use App\Models\District;


class DataAnggota extends Component
{
    public $data = [];
    public $cities;
    public $districts;
    public $search;
    public $searchkab;
    public $kirimdata;

    public $district;
    public $city;
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    protected $updatesQueryString = ['search'];

    public function mount()
    {
        $this->search = request()->query('search', $this->search);
        $this->cities = City::all();
        $this->districts = collect();
    }

    public function render()
    {
        if (auth()->user()->is_admin == true) {
            if ($this->search === null) {
                $kirimdata = Member::with('district.city')->latest()->paginate(10);
            } else {
                $kirimdata = Member::With('district.city')->latest()
                    ->where('name', 'like', '%' . $this->search . '%')
                    ->Orwhere('email', 'like', '%' . $this->search . '%')
                    ->Orwhere('gender', 'like', '%' . $this->search . '%')
                    ->paginate(10);
            }
        } elseif (auth()->user()->is_admin == false) {
            if ($this->search === null) {
                $kirimdata = Member::select('members.*')->with('district.city')->latest()
                    ->join('districts', 'members.district_id', 'districts.id')
                    ->where('districts.city_id', '=', auth()->user()->city_id)
                    ->paginate(10);
            } else {
                $kirimdata = Member::select('members.*')->with('district.city')->latest()
                    ->join('districts', 'members.district_id', 'districts.id')
                    ->where(function ($query) {
                        $query->where('members.email', 'like', '%' . $this->search . '%')
                            ->Orwhere('members.name', 'like', '%' . $this->search . '%')
                            ->Orwhere('members.gender', 'like', '%' . $this->search . '%');
                    })
                    ->where('districts.city_id', '=', auth()->user()->city_id)
                    ->paginate(10);
            }
        }
        return view('livewire.data-anggota', [
            'members' => $kirimdata,
        ]);
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function updatedCity($value)
    {
        $this->districts = District::where('city_id', $value)->get();
        $this->district = $this->districts->first()->id ?? null;
    }

    public function getMemberData($id)
    {
        $member = Member::find($id);
        $this->emit('getMemberData', $member);
    }


    public function destroy($id)
    {
        if ($id) {
            $data = Member::find($id);
            $destination = public_path('storage\\' . $data->image);
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $data->delete();
            session()->flash('message', 'Data ' . $data->name . ' telah terhapus!');
        }
    }
}
