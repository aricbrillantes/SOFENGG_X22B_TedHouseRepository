@extends('layouts.common')

@section('content')
    <div class="jumbotron text-center">
        <h1>{{$title}}</h1>
        <p>TedHouse Works</p>
        <p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a> <a class="btn btn-success btn-lg" href="/register" role="button">Register</a>
    </div>
@endsection