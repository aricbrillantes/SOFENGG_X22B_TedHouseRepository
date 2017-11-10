@extends('layouts.app')

@section('content')
    <h1>Works</h1>
    @if(count($works) > 0)
        @foreach($works as $work)
            <div class="well">
                <div class="row">
                    <!-- <div class="col-md-4 col-sm-4">
                        <img style="wdith" src="/storage/cover_images/{{$post->cover_image}}">
                    </div> -->
                    <div class="col-md-8 col-sm-4">
                        <h3><a href="/works/{{$work->id}}">{{$work->study}}</a></h3>
                        <small>Written on {{$work->created_at}} by {{$work->user->name}}</small>
                    </div>
                </div>
            </div>
        @endforeach
        {{$works->links()}}
    @else
        <p>No works found</p>
    @endif
@endsection