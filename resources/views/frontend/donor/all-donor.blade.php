@extends('layouts.frontend')

@section('content')
<!-- Starting of Hero area -->
<div class="hero-area overlay" style="background-image: url(https://geniusocean.com/demo/bloodbank/assets/images/1520177825home-top-min.jpg);">
    <div class="container">
       <div class="row">
          <div class="col-md-12">
             <h1 class="donors-header text-center">All Blood Donors</h1>
             <div class="hero-form">
                <div class="hero-form-wrapper inline">
                    <form action="{{ route('frontend.donor.search') }}" method="POST">
                        @csrf
                      <div class="row">
                         <div class="col-md-5">
                            <div class="form-group">
                               <div class="input-group">
                                  <div class="input-group-addon">
                                     <i class="fa fa-fw fa-home"></i>
                                  </div>
                                  <select name="district_id" class="form-control" id="">
                                    <option value="">Select District</option>
                                    @foreach($allDistrict as $singleDistrict)
                                      <option value="{{ $singleDistrict->id }}">{{ $singleDistrict->name }}</option>
                                    @endforeach
                                 </select>
                               </div>
                            </div>
                         </div>
                         <div class="col-md-5">
                         <div class="form-group">
                         <div class="input-group">
                         <div class="input-group-addon">
                         <i class="fa fa-fw fa-cog"></i>
                         </div>
                         <select name="group" id="blood_grp" class="form-control" required>
                            <option value="">Select Blood Group</option>
                            @foreach($allBloodGroup as $singleBloodGroup)
                              <option   value="{{ $singleBloodGroup->id }}">{{ $singleBloodGroup->name }}</option>
                            @endforeach                      
                            </select>
                         </div>
                         </div>
                         </div>
                         <div class="col-md-2">
                            <div class="form-group text-center">
                               <input class="btn btn-block hero-btn" name="button" value="Search" type="submit">
                            </div>
                         </div>
                      </div>
                   </form>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
 <div class="section-padding all-donors-wrap team_section team_style2 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
    <div class="container">
       <div class="row">
        @foreach($allDonor as $singleDonor)
          <div class="col-lg-3 col-md-3 col-sm-6">
             <div class="team_common">
                <div class="member_img">
                    <a href="https://geniusocean.com/demo/bloodbank/donor-profile/123">
                        <img src="{{ asset($singleDonor->avatar)}}" alt="member image">
                    </a>
                </div>
                <div class="member_info text-center pos_relative">
                   <div class="overlay1"></div>
                   <div class="overlay2"></div>
                   <div class="content">
                      <a href="https://geniusocean.com/demo/bloodbank/donor-profile/123" class="d_inline fw_600">saiful islam</a>
                      <span class="d_block transition_3s">Blood Group: A+</span>
                      <ul class="social_contact pt_10">
                      </ul>
                   </div>
                </div>
             </div>
          </div>
          @endforeach

       </div>
    </div>
 </div>
@endsection