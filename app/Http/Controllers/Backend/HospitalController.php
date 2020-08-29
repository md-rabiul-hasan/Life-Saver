<?php

namespace App\Http\Controllers\Backend;

use App\District;
use App\Division;
use App\Hospital;
use App\Http\Controllers\Controller;
use App\Upazila;
use Illuminate\Http\Request;

class HospitalController extends Controller {
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Show ALl Hospital List
     *
     * @return void
     */
    public function index() {
        $allHospital = Hospital::all();
        $data        = [
            "allHospital" => $allHospital,
        ];
        return view("backend.hospital.index", $data);
    }

    /**
     * Redirect To Blood Group Create Page
     *
     * @return void
     */
    public function create() {
        $allDivision = Division::all();
        $allDistict  = District::all();
        $allUpazila  = Upazila::all();
        $data        = [
            "allDivision" => $allDivision,
            "allDistict"  => $allDistict,
            "allUpazila"  => $allUpazila,
        ];
        return view('backend.hospital.create', $data);
    }

    /**
     * Save Blood Group
     *
     * @return void
     */
    public function save(Request $request) {
        $hospital              = new Hospital();
        $hospital->division_id = $request->division_id;
        $hospital->district_id = $request->district_id;
        $hospital->upazila_id  = $request->upazila_id;
        $hospital->name        = $request->name;
        $hospital->email       = $request->email;
        $hospital->phone       = $request->phone;
        $hospital->latitude    = $request->latitude;
        $hospital->longitude   = $request->logitude;
        $hospital->save();
        return redirect()->route('backend.hospital.index');
    }
}
