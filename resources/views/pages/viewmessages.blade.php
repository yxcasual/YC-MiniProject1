@extends('layouts.default')

@section('content')



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


@endsection