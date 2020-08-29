@extends('layouts.backend')

@section('content')
<div class="app-title">
    <div>
      <h1><i class="fa fa-th-list"></i> Upazila List</h1>
      <p>Show Country All Upazila List</p>
    </div>
    <ul class="app-breadcrumb breadcrumb side">
      <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
      <li class="breadcrumb-item">Upazila</li>
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
                  <th>Division Name</th>
                  <th>District Name</th>
                  <th>Upazila Name</th>
                  <th>Bangla Name</th>
                  <th>Website</th>
                </tr>
              </thead>
              <tbody>
                @php                      
                    $sl = 1;
                @endphp
                @foreach($allUpazila as $singleUpazila)
                    <tr>
                        <td>{{ $sl++ }}</td>
                        <td>{{ $singleUpazila->district->division->name }}</td>
                        <td>{{ $singleUpazila->district->name }}</td>
                        <td>{{ $singleUpazila->name}}</td>
                        <td>{{ $singleUpazila->bn_name}}</td>
                        <td>{{ $singleUpazila->website_url}}</td>
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