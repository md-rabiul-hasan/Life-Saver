@extends('layouts.backend')

@section('content')
<div class="app-title">
    <div>
      <h1><i class="fa fa-th-list"></i> Hospital List</h1>
      <p>Show All Hospital List</p>
    </div>
    <ul class="app-breadcrumb breadcrumb side">
      <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
      <li class="breadcrumb-item">Hospital</li>
      <li class="breadcrumb-item active"><a href="{{ route('home') }}">Dashboard</a></li>
    </ul>
  </div>
  <div class="row">
    <div class="col-md-6">
        <form action="{{ route('backend.hospital.save') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="tile">
          <h3 class="tile-title">Hospital Registation</h3>
          <div class="tile-body">
            
              <div class="form-group">
                <label class="control-label">Name</label>
                <input class="form-control" type="text" name="name" >
              </div>

              <div class="form-group">
                <label class="control-label">Email</label>
                <input class="form-control" type="text" name="email" >
              </div>

              <div class="form-group">
                <label class="control-label">Phone</label>
                <input class="form-control" type="text" name="phone" >
              </div>


              <div class="form-group">
                <label class="control-label">Division</label>
                <select class="form-control select2" name="division_id">
                  <optgroup label="Select Exchange House">
                    <option value="">- Please Select Division -</option>
                    @foreach ($allDivision as $singleDivision)
                        <option value="{{ $singleDivision->id }}">{{ $singleDivision->name }}</option>
                    @endforeach                    
                  </optgroup>
                </select>
              </div>

              <div class="form-group">
                <label class="control-label">District</label>
                <select class="form-control select2" name="district_id">
                  <optgroup label="Select Exchange House">
                    <option value="">- Please Select District -</option>
                    @foreach ($allDistict as $singleDistrict)
                        <option value="{{ $singleDistrict->id }}">{{ $singleDistrict->name }}</option>
                    @endforeach                    
                  </optgroup>
                </select>
              </div>

              <div class="form-group">
                <label class="control-label">Upazila</label>
                <select class="form-control select2" name="upazila_id">
                  <optgroup label="Select Exchange House">
                    <option value="">- Please Select District -</option>
                    @foreach ($allUpazila as $singleUpazilla)
                        <option value="{{ $singleUpazilla->id }}">{{ $singleUpazilla->name }}</option>
                    @endforeach                    
                  </optgroup>
                </select>
              </div>

              <div class="form-group">
                <label class="control-label">Latitude</label>
                <input class="form-control" type="text" name="latitude">
              </div>

              <div class="form-group">
                <label class="control-label">Longitude</label>
                <input class="form-control" type="text" name="logitude" >
              </div>
            
          </div>
          <div class="tile-footer">
            <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Save</button>
            &nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" href="#"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
          </div>
        </div>
    </form>
      </div>
  </div>
@endsection

@push('js')
    <!-- Data table plugin-->
    <script type="text/javascript" src="{{ asset('assets/backend/js/plugins/select2.min.js')}}"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
    <script>   
        $(document).ready(function() {
            $('.select2').select2();
        });
    </script>
@endpush