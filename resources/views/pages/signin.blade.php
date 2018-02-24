@extends('layouts.default')

@section('content')


    <div class="card mt-3 pl-2 pr-2">
        <div class="card-title"><h1>Log In</h1>
            <p class="lead">Please enter your details below.</p></div>

        <div class="card-body">

            <form action="/contact" method="post">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="username">Username</label>
                    <input name="username"  class="form-control"placeholder="username">
                </div>
                <div class="form-group">
                    <label for="Password">Password</label>
                    <input name="Password"  class="form-control" id="password" placeholder="..">
                </div>
                <button type="submit" class="btn btn-primary mb-2">Submit</button>
            </form>
        </div>
    </div>

@endsection