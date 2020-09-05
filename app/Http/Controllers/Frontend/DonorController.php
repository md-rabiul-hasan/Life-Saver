<?php

namespace App\Http\Controllers\Frontend;

use App\BloodGroup;
use App\District;
use App\Division;
use App\Http\Controllers\Controller;
use App\Upazila;
use App\User;
use App\UserProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DonorController extends Controller {
    public function register() {
        $allDivision   = Division::all();
        $allDistrict   = District::all();
        $allUpazilla   = Upazila::all();
        $allBloodGroup = BloodGroup::all();
        $data          = [
            "allDivision"   => $allDivision,
            "allDistrict"   => $allDistrict,
            "allUpazilla"   => $allUpazilla,
            "allBloodGroup" => $allBloodGroup,
        ];
        return view("frontend.donor.register", $data);
    }

    public function donorSave(Request $request) {
        User::forceCreate([
            "name"     => $request->name,
            "email"    => $request->email,
            "password" => Hash::make($request->password),
        ]);

        $user    = User::where("email", $request->email)->first();
        $user_id = $user->id;

        $userProfile                 = new UserProfile();
        $userProfile->user_id        = $user_id;
        $userProfile->division_id    = $request->division_id;
        $userProfile->district_id    = $request->district_id;
        $userProfile->upazila_id     = $request->upazila_id;
        $userProfile->latitude       = $request->latitude;
        $userProfile->longitude      = $request->longitude;
        $userProfile->age            = $request->age;
        $userProfile->height         = $request->height;
        $userProfile->wight          = $request->weight;
        $userProfile->occupation     = $request->occupation;
        $userProfile->blood_group_id = $request->blood_group_id;

        $profileImage = "user-" . $user->name . "-" . uniqid() . "." . $request->avatar->extension();
        $request->avatar->move(public_path("donor_image"), $profileImage);

        $userProfile->avatar = "donor_image/" . $profileImage;

        $userProfile->save();

        return redirect()->route('frontend.home');

    }

    public function donorSearch(Request $request) {
        $allDistrict     = District::all();
        $allBloodGroup   = BloodGroup::all();
        $alllSearchDonor = UserProfile::where("district_id", $request->district_id)->where("blood_group_id", $request->group)->get();
        $data            = [
            "alllSearchDonor" => $alllSearchDonor,
            "allDistrict"     => $allDistrict,
            "allBloodGroup"   => $allBloodGroup,
            "bloodGroup"      => $request->group,
            "district_id"     => $request->district_id,
        ];
        return view('frontend.donor.search-donor', $data);
    }

    public function donorSeachByBloodGroup($id) {
        $allDistrict            = District::all();
        $allBloodGroup          = BloodGroup::all();
        $allDonorThisBloodGroup = UserProfile::where('blood_group_id', $id)->get();
        $bloodGroupInfo         = BloodGroup::where('id', $id)->first();
        $data                   = [
            "allDonorThisBloodGroup" => $allDonorThisBloodGroup,
            "bloodGroupInfo"         => $bloodGroupInfo,
            "allDistrict"            => $allDistrict,
            "allBloodGroup"          => $allBloodGroup,
        ];
        return view('frontend.donor.search-by-blood-group', $data);
    }

    public function allDonor() {
        $allDistrict   = District::all();
        $allBloodGroup = BloodGroup::all();
        $allDonor      = UserProfile::all();
        $data          = [
            "allDonor"      => $allDonor,
            "allDistrict"   => $allDistrict,
            "allBloodGroup" => $allBloodGroup,
        ];
        return view('frontend.donor.all-donor', $data);
    }

}
