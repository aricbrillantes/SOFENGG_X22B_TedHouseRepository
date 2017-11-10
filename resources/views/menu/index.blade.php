@extends('layouts.homepage')

@include('tempstyle.style')

@section('title')
    <div id="jumbotron">
    <h1 id="jdisplay"><strong>TE<sup>3</sup>D</strong>Workshop</h1>
        <div id="jcontainer">
            <p id="jdescription">
                This is a description placeholder where anyone can put in the description of the page, or put in instructions or messages
            <p>
        </div>
    </div>
@endsection

@section('works')
    <div id="container">
        <!-- rows for example works -->
            <div id ="well">
                @if(count($works) > 0)
                    @foreach($works as $w)
                        <div id ="well">
                            <div id="col">
                                <h3><a href="/works/{{$w->id}}">{{$w->study}}</a></h3>
                                <h4>{{$w->author}}</h4>
                                <small>Tags: {{$w->tag}}</small><br>
                                <small>{{$w->date_started}}</small>
                            </div>
                        </div>
                    @endforeach   
                @else   
                    <p>No studies found</p>
                @endif
            </div>
    </div>    
@endsection