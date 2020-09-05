<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\UserProfile;
use Illuminate\Http\Request;

class DonorController extends Controller
{
    public function index(){
        $allDonor = UserProfile::all();
        $data = [
            "allDonor" => $allDonor
        ];
        return view('backend.donor.index',$data);
    }
}
