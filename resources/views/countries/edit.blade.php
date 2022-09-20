@extends('layouts.main')


@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"> Countries</h1>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">

            <h3 class="m-0 font-weight-bold text-primary">Edit Countries</h3>
            <a href="{{ route('countries.index') }}" class="float-right btn btn-success"> All Countries </a>
        </div>
        <div class="row">
            <div class="card-body">
                <form method="POST" action="{{ route('countries.update', $country->id) }}">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <label for="username"> Country Code </label>
                        <input type="text" name="code" class="form-control form-control-user" id="exampleInputEmail"
                            placeholder="Useranme" value="{{ $country->code }}">
                    </div>
                    <div class="form-group">
                        <label for="name"> Country Name </label>
                        <input type="text" name="name" class="form-control form-control-user" id="exampleInputEmail"
                            placeholder="Firstname" value="{{ $country->name }}">
                    </div>


                    <div class="row ml-4">

                        <button type="submit" class="btn btn-primary">
                            {{ __('Update Country') }}
                        </button>
                    </div>

                </form>


                <div class="row mr-4 float-right">
                    <form action="{{ route('countries.destroy', $country->id) }}" method="POST"
                        onsubmit="return confirm('Are You Sure')" style="display: inline-block;">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger"> Delete {{ $country->name }} </button>
                    </form>
                </div>
            </div>

        </div>


    </div>
@endsection
