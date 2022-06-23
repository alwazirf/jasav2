<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Member;
use App\Models\User;
use App\Models\City;
use App\Models\District;
use Barryvdh\DomPDF\Facade\Pdf;
// use PDF;

class KartuAnggota extends Component
{
    public $city = null;
    public $cities;
    public $districts;
    public $allMembers;
    public $allWithCity = false;
    public $search;
    public $paginate = 5;
    public $district;
    public $selectedcity;

    public function mount()
    {
        $this->cities = City::all();
        $this->districts = collect();
    }

    public function render()
    {
        return view('livewire.kartu-anggota');
    }

    public function updatedCity($value)
    {
        $this->districts = District::where('city_id', $value)->get();
        $this->district = $this->districts->first()->id ?? null;
    }

    public function downloadPdf()
    {
        $members = ['members' => Member::with('district.city')->get()];
        $pdf = PDF::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true])->loadView('livewire.kartu-anggota-pdf', $members)->setPaper('a4')->output();
        return response()->streamDownload(
            fn () => print($pdf),
            "kartu-anggota.pdf"
        );
    }

    public function allMember()
    {
        $this->members = Member::with('district.city')->get();
        $this->allMembers = true;
        $this->allWithCity = false;
    }

    public function downloadPdfKec()
    {
        $members = [
            'members' => Member::with('district.city')
                ->where('district_id', '=', $this->district)
                ->get()
        ];
        $pdf = PDF::loadView('livewire.kartu-anggota-pdf', $members)->output();
        return response()->streamDownload(
            fn () => print($pdf),
            "kartu-anggota-kec.pdf"
        );
    }
}
