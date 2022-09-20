@extends('layouts.main')


@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">States</h1>   
</div>

{{-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
    For more information about DataTables, please visit the <a target="_blank"
        href="https://datatables.net">official DataTables documentation</a>.</p> --}}

<div class="card shadow mb-4">
    <div class="card-header py-3">
      
        <h3 class="m-0 font-weight-bold text-primary">All states</h3>
        <a href="{{ route('cities.create') }}"  
               class="float-right btn btn-success">Create </a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>State</th>
                        <th>City</th>
                        <th>Manage </th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>#</th>
                        <th>State</th>
                        <th>City</th>
                        <th>Manage </th>
                    </tr>
                    </tr>
                </tfoot>
                <tbody>
                   @foreach ($cities as $city)
                   <tr>
                   <th>{{ $city->id }}</th>   
                   <th>{{$city->state->name }}</th>
                   <th>{{$city->name }}</th>
                  
                   
                   <th>
                  
                   <a class="btn btn-xs btn-info" href="{{ route('cities.edit', $city->id) }}">
                       Edit
                    </a> 
                  
                    <form action="{{ route('cities.destroy', $city->id) }}" method="POST"
                        onsubmit="return confirm('Are You Sure')" style="display: inline-block;">
                         @csrf
                         @method('delete')
                        <input type="submit" class="btn btn-danger" value="Delete">        
                  </form>
                
                   </th>
                   </tr>
                   @endforeach   
                 
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection