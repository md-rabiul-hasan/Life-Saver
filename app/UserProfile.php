<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\BloodGroup;
use App\Division;
use App\District;
use App\Upazila;

class UserProfile extends Model
{
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function bloodGroup(){
        return $this->belongsTo(BloodGroup::class);
    }

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
