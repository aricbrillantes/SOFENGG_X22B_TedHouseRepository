@extends('layouts.homepage')

@include('tempstyle.style')

@section('title')
    <div id="jumbotron">
    <h1 id="jdisplay"><strong>TE<sup>3</sup>D</strong>Workshop</h1>
    </div>
@endsection

@section('works')
    <div id="container">
        <!-- rows for example notifs use foreach to automate -->
        <div id="row">
            <div id="col">
                <h3>Notification Name</h3>
                <h4>Details</h4>
                <small>tag</small>
            </div>
            <div id="col">
                <h3>Notification Name</h3>
                <h4>Details</h4>
                <small>tag</small>
            </div>
            <div id="col">
                <h3>Notification Name</h3>
                <h4>Detailsl</h4>
                <small>tag</small>
            </div>
        </div>
    </div>
    
@endsection