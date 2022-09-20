@extends('layouts.main')


@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Countries</h1>   
</div>

{{-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
    For more information about DataTables, please visit the <a target="_blank"
        href="https://datatables.net">official DataTables documentation</a>.</p> --}}

<div class="card shadow mb-4">
    <div class="card-header py-3">
      
        <h3 class="m-0 font-weight-bold text-primary">Create Countries</h3>
        <a href="{{ route('countries.index') }}"  
               class="float-right btn btn-success"> All Countries </a>
    </div>
    <div class="row">
        <div class="card-body">
            <form method="POST" action="{{ route('countries.store') }}">
                @csrf

            <div class="form-group">
                <label for="country_code"> Country Code</label>
                <input type="text" name="code" class="form-control form-control-user" 
                    placeholder="Enter your country Code">
            </div>

            <div class="form-group">
                <label for="name"> Country Name </label>
                <input type="text" name="name" class="form-control form-control-user"
                    placeholder="Enter your country name">
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