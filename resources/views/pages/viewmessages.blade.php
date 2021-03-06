@extends('layouts.default')

@section('content')

    <div class="card mt-3 pl-2 pr-2">
        <div class="card-title"><h1>View Messages</h1>
        <div class="card-body">

    <table class="table">
        <thead class="thead-inverse">
        <tr>
            <th>#</th>
            <th>Contact messages</th>
            <th>Deletion</th>

        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">1</th>
            <td><a class="card-link" href="/bootcard">Sample message 1</a></td>
            <td>
                @include('includes.delform')
            </td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td><a class="card-link" href="/bootcard">Sample message 2</a></td>
            <td>@include('includes.delform')</td>

        </tr>
        <tr>
            <th scope="row">3</th>
            <td><a class="card-link" href="/bootcard">Sample message 3</a></td>
            <td>@include('includes.delform')</td>

        </tr>
        </tbody>
    </table>
        </div>
    </div>

@endsection