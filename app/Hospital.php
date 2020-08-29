<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Division;
use App\District;
use App\Upazila;

class Hospital extends Model
{
    public function division(){
        return $this->belongsTo(Division::class);
    }

    public function district(){
        return $this->belongsTo(District::class);
    }

    public function upazila(){
        return $this->belongsTo(Upazila::class);
    }
}
