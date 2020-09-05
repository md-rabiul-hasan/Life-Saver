@extends('layouts.frontend')

@section('content')

        <!-- Starting of Hero area -->
        <section class="login-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-12">
                        <div class="login-form">
                            <div class="login-icon"><i class="fa fa-user"></i></div>
                            
                            <div class="section-borders">
                                <span></span>
                                <span class="black-border"></span>
                                <span></span>
                            </div>
                            
                            <div class="login-title text-center">SIGN UP</div>

                            <form action="{{ route('frontend.donor.save') }}" method="POST" enctype="multipart/form-data">
                              @csrf
                               <div class="form-group">
                                <div class="input-group">
                                  <div class="input-group-addon">
                                      <i class="fa fa-user"></i>
                                  </div>
                                  <input name="name" class="form-control" placeholder="Name" type="text">
                                </div>
                                <br>

                                 <div class="input-group">
                                  <div class="input-group-addon">
                                      <i class="fa fa-envelope"></i>
                                  </div>
                                  <input name="email" class="form-control" placeholder="Email" type="email">
                                </div>
                                <br>

                                <div class="input-group">
                                  <div class="input-group-addon">
                                      <i class="fa fa-key"></i>
                                  </div>
                                  <input name="password" class="form-control" placeholder="Password" type="password">
                                </div>
                                <br>

                                <div class="input-group">
                                  <div class="input-group-addon">
                                      <i class="fa fa-globe"></i>
                                  </div>
                                 <select name="division_id" class="form-control" id="">
                                   <option value="">Select Division</option>
                                   @foreach($allDivision as $singleDivision)
                                    <option value="{{ $singleDivision->id }}">{{ $singleDivision->name }}</option>
                                   @endforeach
                                 </select>
                                </div>
                                <br>

                                <div class="input-group">
                                  <div class="input-group-addon">
                                      <i class="fa fa-globe "></i>
                                  </div>
                                 <select name="district_id" class="form-control" id="">
                                   <option value="">Select District</option>
                                   @foreach($allDistrict as $singleDistrict)
                                    <option value="{{ $singleDistrict->id }}">{{ $singleDistrict->name }}</option>
                                   @endforeach
                                 </select>
                                </div>
                                <br>

                                <div class="input-group">
                                  <div class="input-group-addon">
                                      <i class="fa fa-globe"></i>
                                  </div>
                                 <select name="upazila_id" class="form-control" id="">
                                   <option value="">Select Upazilla</option>
                                   @foreach($allUpazilla as $singleUpazilla)
                                    <option value="{{ $singleUpazilla->id }}">{{ $singleUpazilla->name }}</option>
                                   @endforeach
                                 </select>
                                </div>
                                <br>

                                <div class="input-group">
                                  <div class="input-group-addon">
                                      <i class="fa fa-map-marker"></i>
                                  </div>
                                  <input name="latitude" class="form-control" placeholder="Latitude" type="text">
                                </div>
                                <br>

                                <div class="input-group">
                                  <div class="input-group-addon">
                                      <i class="fa fa-map-marker"></i>
                                  </div>
                                  <input name="longitude" class="form-control" placeholder="Longitude" type="text">
                                </div>
                                <br>

                                <div class="input-group">
                                  <div class="input-group-addon">
                                      <i class="fa fa-user"></i>
                                  </div>
                                  <input name="age" class="form-control" placeholder="Age" type="text">
                                </div>
                                <br>

                                <div class="input-group">
                                  <div class="input-group-addon">
                                      <i class="fa fa-user"></i>
                                  </div>
                                  <input name="height" class="form-control" placeholder="Height" type="text">
                                </div>
                                <br>

                                <div class="input-group">
                                  <div class="input-group-addon">
                                      <i class="fa fa-user"></i>
                                  </div>
                                  <input name="weight" class="form-control" placeholder="Weight" type="text">
                                </div>
                                <br>

                                <div class="input-group">
                                  <div class="input-group-addon">
                                      <i class="fa fa-briefcase"></i>
                                  </div>
                                  <input name="occupation" class="form-control" placeholder="Occupation	" type="text">
                                </div>
                                <br>

                                <div class="input-group">
                                  <div class="input-group-addon">
                                      <i class="fa fa-object-group"></i>
                                  </div>
                                  <select name="blood_group_id" class="form-control" id="">
                                    <option value="">Select Blood Group</option>
                                    @foreach($allBloodGroup as $singleBloodGroup)
                                  <option value="{{ $singleBloodGroup->id }}">{{ $singleBloodGroup->name }}</option>
                                    @endforeach
                                  </select>
                                </div>
                                <br>

                                <div class="input-group">
                                  <div class="input-group-addon">
                                      <i class="fa fa-picture-o"></i>
                                  </div>
                                  <input type="file" name="avatar" class="form-control">
                                </div>
                                <br>


                               






                          
                              </div>
                              <div class="form-group text-center">
                                    <button type="submit" class="btn login-btn" name="button">REGISTER</button>
                              </div>
                              <div class="form-group text-center">
                                    <a href="forgot.html">FORGOT PASSWORD?</a>
                                    <br>
                                    <a href="register.html">CREATE NEW ACCOUNT</a>
                              </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection