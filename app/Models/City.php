<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    public function province()
    {
        return $this->belongTo(Province::class, 'province_id');
    }

    public function district()
    {
        return $this->hasMany(District::class, 'district_id');
    }

    public function user()
    {
        return $this->belongTo(User::class, 'city_id');
    }
}
