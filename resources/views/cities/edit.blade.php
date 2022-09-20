@extends('layouts.main')


@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">City</h1>   
</div>

{{-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
    For more information about DataTables, please visit the <a target="_blank"
        href="https://datatables.net">official DataTables documentation</a>.</p> --}}

<div class="card shadow mb-4">
    <div class="card-header py-3">
      
        <h3 class="m-0 font-weight-bold text-primary">Edit City</h3>
        <a href="{{ route('cities.index') }}"  
               class="float-right btn btn-success"> All City </a>
    </div>
    <div class="row">
        <div class="card-body">
            <form method="POST" action="{{ route('cities.update',  $city->id) }}">
                @csrf
                @method('PATCH')

            <div class="form-group">
                <label for="state_id"> State  </label>
                 <select class="form-control" name="state_id" id="state_id">
                     <option selected>Select State </option>
                     @foreach ($states as $state)
                     <option value="{{ $state->id }}" 
                        {{ $state->id == $city->state_id ? 'selected' : '' }}>
                        {{ $state->name }}</option>
                     @endforeach                    
                 </select>
            </div>

            <div class="form-group">
                <label for="name"> City </label>
                <input type="text" name="name" class="form-control form-control-user"
                    placeholder="Enter your state" value="{{ $city->name }}">
            </div>
                     
            <div class="row ml-4">
               
                    <button type="submit" class="btn btn-primary">
                        {{ __('Submit') }}
                    </button>
              
            </div>
            </form>

            <div class="row mr-4 float-right">
                <form action="{{ route('cities.destroy', $city->id) }}" method="POST"
                    onsubmit="return confirm('Are You Sure')" style="display: inline-block;">
                    @csrf
                    @method('delete')
                    <button class="btn btn-danger"> Delete {{ $city->name }} </button>
                </form>
            </div>
        </div>
    </div>
    
    </div>
    
@endsection