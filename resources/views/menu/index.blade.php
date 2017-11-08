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
        <div id="row">
            <div id="col">
                <h3>Work 1</h3>
                <h4>author and/or study</h4>
                <small>tag</small>
            </div>
            <div id="col">
                <h3>Work 2</h3>
                <h4>author and/or study</h4>
                <small>tag</small>
            </div>
            <div id="col">
                <h3>Oh  look one more</h3>
                <h4>author and/or study</h4>
                <small>tag</small>
            </div>
        </div>
    </div>
    
@endsection