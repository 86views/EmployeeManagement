@extends('layouts.main')


@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Users</h1>   
</div>

{{-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
    For more information about DataTables, please visit the <a target="_blank"
        href="https://datatables.net">official DataTables documentation</a>.</p> --}}

<div class="card shadow mb-4">
    <div class="card-header py-3">
      
        <h3 class="m-0 font-weight-bold text-primary">All Users</h3>
        <a href="{{ route('users.create') }}"  
               class="float-right btn btn-success">Create </a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Username</th>
                        <th>Firstname</th>
                        <th>Lastanme</th>
                        <th>Email</th>
                        <th>Manage User</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>#</th>
                        <th>Username</th>
                        <th>Firstname</th>
                        <th>Lastanme</th>
                        <th>Email</th>
                        <th>Manage User</th>
                    </tr>
                </tfoot>
                <tbody>
                   @foreach ($users as $user)
                   <tr>
                   <th>{{ $user->id }}</th>
                   <th>{{ $user->username }}</th>
                   <th>{{ $user->first_name }}</th>
                   <th>{{ $user->last_name }}</th>
                   <th>{{ $user->email }}</th>
                   <th>
                    <a class="btn btn-xs btn-primary"
                    href="{{ route('users.show', $user->id) }}"> View </a>
                   <a class="btn btn-xs btn-info" href="{{ route('users.edit', $user->id) }}">
                       Edit
                    </a> 
                  
                    <form action="{{ route('users.destroy', $user->id) }}" method="POST"
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