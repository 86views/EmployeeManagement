@extends('layouts.main')


@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"> Users</h1>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">

            <h3 class="m-0 font-weight-bold text-primary">Edit Users</h3>
            <a href="{{ route('users.index') }}" class="float-right btn btn-success"> All Users </a>
        </div>
        <div class="row">
            <div class="card-body">
                <form method="POST" action="{{ route('users.update', $user->id) }}">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <label for="username"> Username</label>
                        <input type="text" name="username" class="form-control form-control-user" id="exampleInputEmail"
                            placeholder="Useranme" value="{{ $user->username }}">
                    </div>
                    <div class="form-group">
                        <label for="firstname"> Firstname </label>
                        <input type="text" name="first_name" class="form-control form-control-user"
                            id="exampleInputEmail" placeholder="Firstname" value="{{ $user->first_name }}">
                    </div>
                    <div class="form-group">
                        <label for="lastname"> Lastname</label>
                        <input type="text" name="last_name" class="form-control form-control-user" id="exampleInputEmail"
                            placeholder="Lastname" value="{{ $user->last_name }}">
                    </div>

                    <div class="form-group">
                        <label for="email"> Email</label>
                        <input type="email" name="email" class="form-control form-control-user" id="exampleInputEmail"
                            placeholder="Email Address" value="{{ $user->email }}">
                    </div>


                    <div class="row ml-4">

                        <button type="submit" class="btn btn-primary">
                            {{ __('Update User') }}
                        </button>
                    </div>

                </form>
          

            <div class="row mr-25 float-right">
                <form action="{{ route('users.destroy', $user->id) }}" method="POST"
                    onsubmit="return confirm('Are You Sure')" style="display: inline-block;">
                    @csrf
                    @method('delete')
                    <button class="btn btn-danger"> Delete {{ $user->username }} </button>
                </form>
             </div>
        </div>

        </div>

        <div class="card-header py-3">

            <h3 class="m-0 font-weight-bold text-primary">Change Password</h3>
         
        </div>
        <div class="row">
            <div class="card-body">
                <form method="POST" action="{{ route('users.change.password', $user->id) }}">
                    @csrf
                    <div class="form-group">
                        <label for="Password"> Password</label>
                        <input type="password" name="password" class="form-control form-control-user" id="exampleInputEmail"
                            placeholder="Password" value="">
                    </div>

                    <div class="form-group">
                        <label for="confirm_password">Confirm Password</label>
                        <input type="password" name="confirm_password" class="form-control form-control-user" id="exampleInputEmail"
                            placeholder="Confirm Password" value="">
                    </div>


                    <div class="row ml-4">

                        <button type="submit" class="btn btn-primary">
                            {{ __('Update Password') }}
                        </button>
                    </div>

                </form>
          

            
        </div>
    
    </div>
@endsection
