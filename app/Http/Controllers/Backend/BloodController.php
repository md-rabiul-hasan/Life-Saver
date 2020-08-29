<?php

namespace App\Http\Controllers\Backend;

use App\BloodGroup;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BloodController extends Controller {
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
        $allBloodGroup = BloodGroup::all();
        $data         = [
            "allBloodGroup" => $allBloodGroup,
        ];
        return view("backend.blood_group.index", $data);
    }

    /**
     * Redirect To Blood Group Create Page
     *
     * @return void
     */
    public function createBloodGroup(){
        return view('backend.blood_group.create');
    }


    /**
     * Save Blood Group
     *
     * @return void
     */
    public function saveBloodGroup(Request $request){
        $blood_group = new BloodGroup();
        $blood_group->name = $request->name;
        $blood_group->save();
        return redirect()->route('backend.blood.index');
    }
}
