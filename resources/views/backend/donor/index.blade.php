@extends('layouts.backend')

@section('content')
<div class="app-title">
    <div>
      <h1><i class="fa fa-th-list"></i> Donor List</h1>
      <p>Show All Donor List</p>
    </div>
    <ul class="app-breadcrumb breadcrumb side">
      <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
      <li class="breadcrumb-item">Donor</li>
      <li class="breadcrumb-item active"><a href="{{ route('home') }}">Dashboard</a></li>
    </ul>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="tile">       
        <div class="tile-body">
          <div class="table-responsive">
            <table class="table table-hover table-bordered" id="sampleTable">
              <thead>
                <tr>
                  <th>Sl</th>
                  <th>Name</th>
                  <th>B.G</th>
                  <th>Email</th>
                  <th>Address</th>
                  <th>Latitude</th>
                  <th>Longitude</th>
                  <th>Age</th>
                  <th>Height</th>
                  <th>Weight</th>
                </tr>
              </thead>
              <tbody>
                  @php
                      $sl = 1;
                  @endphp
                  @foreach($allDonor as $singleDonor)
                  <tr>
                    <td>{{ $sl++ }}</td>
                    <td>{{ $singleDonor->user->name }}</td>
                    <td>{{ $singleDonor->bloodGroup->name }}</td>
                    <td>{{ $singleDonor->user->email }}</td>
                    <td>{{ $singleDonor->upazila->name }},{{ $singleDonor->district->name }},{{ $singleDonor->division->name }}</td>
                    <td>{{ $singleDonor->latitude }}</td>
                    <td>{{ $singleDonor->longitude }}</td>
                    <td>{{ $singleDonor->age }}</td>
                    <td>{{ $singleDonor->height }}</td>
                    <td>{{ $singleDonor->wight }}</td>
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