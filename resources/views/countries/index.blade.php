@extends('layouts.main')


@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"> Countries </h1>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">

            <h3 class="m-0 font-weight-bold text-primary">All Countries</h3>
            <a href="{{ route('countries.create') }}" class="float-right btn btn-success">Create </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div class="col">
                    <form action="{{ route('countries.index') }}" method="GET">
                        <div class="form-group">
                            <input type="search" name="search" class="form-control mb-2" placeholder="John Doe"
                                required />
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary mb-2"> Search</button>
                        </div>
                    </form>
                </div>
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Country Code</th>
                            <th>Manage User</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($countries as $country)
                            <tr>
                                <th>{{ $country->id }}</th>
                                <th>{{ $country->name }}</th>
                                <th>{{ $country->code }}</th>

                                <th>
                                    {{-- <a class="btn btn-xs btn-primary"
                     href="{{ route('countrys.show', $country->id) }}"> View </a> --}}
                                    <a class="btn btn-xs btn-info" href="{{ route('countries.edit', $country->id) }}">
                                        Edit
                                    </a>

                                    <form action="{{ route('countries.destroy', $country->id) }}" method="POST"
                                        onsubmit="return confirm('Are You Sure')" style="display: inline-block;">
                                        @csrf
                                        @method('delete')
                                        <input type="submit" class="btn btn-danger" value="Delete">
                                    </form>

                                </th>
                            </tr>
                        @endforeach

                    </tbody>
                    <tfoot>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Country Code</th>
                            <th>Manage User</th>
                        </tr>
                    </tfoot>
                </table>

            </div>
        </div>

    </div>
@endsection
