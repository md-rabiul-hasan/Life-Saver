@extends('layouts.frontend')

@section('content')
    <!-- Starting of Hero area -->
<div class="hero-area overlay" style="background-image: url({{ asset('assets/frontend/assets/images/1520177825home-top-min.jpg')}});">
    <div class="container">
       <div class="row">
          <div class="col-lg-6 col-lg-push-6 col-md-6 col-md-push-6 col-sm-6 col-sm-push-6 col-xs-12 col-xs-push-0">
             <div class="hero-form">
                <div class="hero-form-header">
                   <h3>Start Searching</h3>
                   <hr>
                </div>
                <div class="hero-form-wrapper">
                   <form action="{{ route('frontend.donor.search') }}" method="POST">
                     @csrf
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
                      <div class="form-group">
                      <div class="input-group">
                      <div class="input-group-addon">
                      <i class="fa fa-fw fa-cog"></i>
                      </div>
                      <select name="group" id="blood_grp" class="form-control" required>
                      <option value="">Select Blood Group</option>
                      @foreach($allBloodGroup as $singleBloodGroup)
                        <option value="{{ $singleBloodGroup->id }}">{{ $singleBloodGroup->name }}</option>
                      @endforeach                      
                      </select>
                      </div>
                      </div>
                      <div class="form-group text-center">
                         <input type="submit" class="btn btn-block hero-btn" name="button" value="Search">
                      </div>
                   </form>
                </div>
             </div>
          </div>
          <div class="col-lg-6 col-lg-pull-6 col-md-6 col-md-pull-6 col-sm-6 col-sm-pull-6 col-xs-12 col-xs-pull-0">
             <h1>Donate blood, Save lives</h1>
             <p>Your donation can save the lives of many, make a difference or simply make you feel great about your contribution to humanity. Whatever your reason, whatever your motivation we welcome you to learn more about eligibility and benefits of donating blood with a trusted organization like us.</p>
             <a href="https://geniusocean.com/" class="hero-btn">View Details</a>
          </div>
       </div>
    </div>
 </div>
 <!-- Ending of Hero area -->

  <!-- Starting of Blood-Groups area -->
  <div class="section-padding blood-group-wrap wow fadeInUp">
   <div class="container">
       <div class="row">
           <div class="col-md-12">
               <div class="section-title pb_50 text-center">
                   <h2>BLOOD GROUPS</h2>

                   <div class="section-borders">
                       <span></span>
                       <span class="black-border"></span>
                       <span></span>
                   </div>
               </div>
           </div>
       </div>

       <div class="row">
         @foreach($allBloodGroup as $singleBloodGroup)
            <div class="col-sm-3 col-xs-6">
               <a href="{{ route('frontend.donor.blood_group',$singleBloodGroup->id) }}" class="padding-50 single-bloodGroup-box">
                   <h2>{{ $singleBloodGroup->name }}</h2>
                   <span class="boxed-btn">VIEW DONORS</span>
               </a>
           </div>
         @endforeach
         </div>
   </div>
</div>
<!-- Ending of Blood-Groups area -->

@endsection