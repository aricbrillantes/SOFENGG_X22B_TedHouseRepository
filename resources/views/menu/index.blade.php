@extends('layouts.common')

@section('content')
    <div class="jumbotron text-center">
        {{--  <h1>{{$title}}</h1>  --}}
        {{--  <p>T3D Workhouse</p>  --}}
        <p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a> <a class="btn btn-success btn-lg" href="/register" role="button">Register</a>
    </div>
@endsection