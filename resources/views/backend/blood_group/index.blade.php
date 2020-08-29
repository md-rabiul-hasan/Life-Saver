@extends('layouts.backend')

@section('content')
<div class="app-title">
    <div>
      <h1><i class="fa fa-th-list"></i> Blood Group List</h1>
      <p>Show All Blood Group List</p>
    </div>
    <ul class="app-breadcrumb breadcrumb side">
      <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
      <li class="breadcrumb-item">Blood Group</li>
      <li class="breadcrumb-item active"><a href="{{ route('home') }}">Dashboard</a></li>
    </ul>
  </div>
  <div class="row">
    <div class="col-md-12">
      <a href="{{ route('backend.blood.create') }}" class="btn btn-primary mb-2">Add New</a>
     
      <div class="tile">
       
        <div class="tile-body">
          <div class="table-responsive">
            <table class="table table-hover table-bordered" id="sampleTable">
              <thead>
                <tr>
                  <th>Sl</th>
                  <th>Name</th>
                  <th>Created At</th>
                  <th>Updated At</th>
                </tr>
              </thead>
              <tbody>
                @php                      
                    $sl = 1;
                @endphp
                @foreach($allBloodGroup as $singleBloodGroup)
                    <tr>
                        <td>{{ $sl++ }}</td>
                        <td>{{ $singleBloodGroup->name }}</td>
                        <td>{{ $singleBloodGroup->created_at}}</td>
                        <td>{{ $singleBloodGroup->updated_at}}</td>
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