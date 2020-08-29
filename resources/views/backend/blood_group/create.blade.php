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
    <div class="col-md-6">
        <form action="{{ route('backend.blood.save') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="tile">
          <h3 class="tile-title">Blood Group Registation</h3>
          <div class="tile-body">
            
              <div class="form-group">
                <label class="control-label">Blood Group Name</label>
                <input class="form-control" type="text" name="name" placeholder="Blood Group Name">
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
    <script type="text/javascript" src="{{ asset('assets/backend/js/plugins/jquery.dataTables.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/backend/js/plugins/dataTables.bootstrap.min.js')}}"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
@endpush