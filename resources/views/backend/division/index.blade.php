@extends('layouts.backend')

@section('content')
<div class="app-title">
    <div>
      <h1><i class="fa fa-th-list"></i> Division List</h1>
      <p>Show Country All Division List</p>
    </div>
    <ul class="app-breadcrumb breadcrumb side">
      <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
      <li class="breadcrumb-item">Divisions</li>
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
                  <th>Bangla Name</th>
                  <th>Website</th>
                </tr>
              </thead>
              <tbody>
                @php                      
                    $sl = 1;
                @endphp
                @foreach($allDivisions as $singleDivision)
                    <tr>
                        <td>{{ $sl++ }}</td>
                        <td>{{ $singleDivision->name}}</td>
                        <td>{{ $singleDivision->bn_name}}</td>
                        <td>{{ $singleDivision->website_url}}</td>
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