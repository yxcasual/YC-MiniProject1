@extends('layouts.default')

@section('content')


    <div class="card mt-3 pl-2 pr-2">
        <div class="card-title"><h1>Sign Up!!</h1>
            <p class="lead">Please enter your details below.</p></div>

        <div class="card-body">

            <form action="/contact" method="post">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="name">Name</label>
                    <input name="name"  class="form-control"placeholder="name">
                </div>
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input name="email" type="email" class="form-control" id="email" placeholder="name@example.com">
                </div>
                <div class="form-group">
                    <label for="Password">Password</label>
                    <input name="Password"  class="form-control" id="password" placeholder="..">
                </div>
                <div class="form-group">
                    <label for="Password">Confirm Password</label>
                    <input name="Password"  class="form-control" id="password" placeholder="..">
                </div>
                <button type="submit" class="btn btn-primary mb-2">Submit</button>
            </form>
        </div>
    </div>

@endsection