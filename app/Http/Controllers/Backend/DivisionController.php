<?php

namespace App\Http\Controllers\Backend;

use App\Division;
use App\Http\Controllers\Controller;

class DivisionController extends Controller {
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Show ALl Division List
     *
     * @return void
     */
    public function index() {
        $allDivisions = Division::all();
        $data         = [
            "allDivisions" => $allDivisions,
        ];
        return view("backend.division.index", $data);
    }
}
