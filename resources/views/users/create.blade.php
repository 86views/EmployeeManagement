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
      
        <h3 class="m-0 font-weight-bold text-primary">Create Users</h3>
        <a href="{{ route('users.index') }}"  
               class="float-right btn btn-success"> All Users </a>
    </div>
    <div class="row">
        <div class="card-body">
            <form method="POST" action="{{ route('users.store') }}">
                @csrf

            <div class="form-group">
                <label for="username"> Username</label>
                <input type="text" name="username" class="form-control form-control-user" id="exampleInputEmail"
                    placeholder="Useranme">
            </div>
            <div class="form-group">
                <label for="firstname"> Firstname </label>
                <input type="text" name="first_name" class="form-control form-control-user" id="exampleInputEmail"
                    placeholder="Firstname">
            </div>
            <div class="form-group">
                <label for="lastname"> Lastname</label>
                <input type="text" name="last_name" class="form-control form-control-user" id="exampleInputEmail"
                    placeholder="Lastname">
            </div>
            
            <div class="form-group">
                <label for="email"> Email</label>
                <input type="email" name="email" class="form-control form-control-user" id="exampleInputEmail"
                    placeholder="Email Address">
            </div>
            <div class="form-group">
                <label for="password"> Password</label>
                <input type="password" name="password" class="form-control form-control-user" id="exampleInputEmail"
                    placeholder="Password">
            </div>
            
            <div class="row ml-4">
               
                    <button type="submit" class="btn btn-primary">
                        {{ __('Submit') }}
                    </button>
              
            </div>
            </form>
        </div>
    </div>
    
    </div>
    
@endsection