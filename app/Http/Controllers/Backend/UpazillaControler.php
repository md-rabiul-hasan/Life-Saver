<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Upazila;

class UpazillaControler extends Controller {
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
        $allUpazila = Upazila::all();
        $data         = [
            "allUpazila" => $allUpazila,
        ];
        return view("backend.upazila.index", $data);
    }
}
