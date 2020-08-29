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
    <div class="col-md-12">
      <a href="{{ route('backend.hospital.create') }}" class="btn btn-primary mb-2">Add New</a>
     
      <div class="tile">
       
        <div class="tile-body">
          <div class="table-responsive">
            <table class="table table-hover table-bordered" id="sampleTable">
              <thead>
                <tr>
                  <th>Sl</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>phone</th>
                  <th>Address</th>
                  <th>Latitude</th>
                  <th>Longitude</th>
                </tr>
              </thead>
              <tbody>
                @php                      
                    $sl = 1;
                @endphp
                @foreach($allHospital as $singleHospital)
                    <tr>
                        <td>{{ $sl++ }}</td>
                        <td>{{ $singleHospital->name }}</td>
                        <td>{{ $singleHospital->email}}</td>
                        <td>{{ $singleHospital->phone}}</td>
                        <td>{{ $singleHospital->upazila->name }}, {{ $singleHospital->district->name }}, {{ $singleHospital->division->name}}</td>
                        <td>{{ $singleHospital->latitude}}</td>
                        <td>{{ $singleHospital->longitude}}</td>
                    </tr>
                @endforeach               
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@push('js')
    <!-- Data table plugin-->
    <script type="text/javascript" src="{{ asset('assets/backend/js/plugins/jquery.dataTables.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/backend/js/plugins/dataTables.bootstrap.min.js')}}"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
@endpush