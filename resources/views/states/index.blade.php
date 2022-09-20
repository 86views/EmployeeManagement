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
        <a href="{{ route('states.create') }}"  
               class="float-right btn btn-success">Create </a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Country Name</th>
                        <th>Country Code</th>
                        <th>State</th>
                      
                        <th>Manage </th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>#</th>
                        <th>Country Name</th>
                        <th>Country Code</th>
                        <th>State</th>
                      
                        <th>Manage </th>
                    </tr>
                    </tr>
                </tfoot>
                <tbody>
                   @foreach ($states as $state)
                   <tr>
                   <th>{{ $state->id }}</th>   
                   <th>{{ $state->country->name }}</th>
                   <th>{{ $state->country->code }}</th>
                   <th>{{ $state->name }}</th>
                  
                   
                   <th>
                  
                   <a class="btn btn-xs btn-info" href="{{ route('states.edit', $state->id) }}">
                       Edit
                    </a> 
                  
                    <form action="{{ route('states.destroy', $state->id) }}" method="POST"
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