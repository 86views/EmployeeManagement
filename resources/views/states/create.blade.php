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
      
        <h3 class="m-0 font-weight-bold text-primary">Create States</h3>
        <a href="{{ route('states.index') }}"  
               class="float-right btn btn-success"> All States </a>
    </div>
    <div class="row">
        <div class="card-body">
            <form method="POST" action="{{ route('states.store') }}">
                @csrf

            <div class="form-group">
                <label for="country_id"> Country  </label>
                 <select class="form-control" name="country_id" id="country_d">
                     <option selected>Select Country </option>
                     @foreach ($countries as $country)
                     <option value="{{ $country->id }}">{{ $country->name }}</option>
                     @endforeach                    
                 </select>
            </div>

            <div class="form-group">
                <label for="name"> State </label>
                <input type="text" name="name" class="form-control form-control-user"
                    placeholder="Enter your state">
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