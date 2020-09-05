<?php

namespace App\Http\Controllers;

use App\BloodGroup;
use App\District;

class HomeController extends Controller {
    // /**
    //  * Create a new controller instance.
    //  *
    //  * @return void
    //  */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() {
        return view('home');
    }

    public function home() {
        $allBloodGroup = BloodGroup::all();
        $allDistrict   = District::all();
        $data          = [
            "allBloodGroup" => $allBloodGroup,
            "allDistrict"   => $allDistrict,
        ];
        return view("index", $data);
    }
}
