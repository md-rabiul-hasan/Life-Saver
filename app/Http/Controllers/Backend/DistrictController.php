<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\District;
use App\Division;

class DistrictController extends Controller {
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Show ALl District List
     *
     * @return void
     */
    public function index() {
        $allDistricts = District::all();
        $data         = [
            "allDistricts" => $allDistricts,
        ];
        return view("backend.district.index", $data);
    }
}
