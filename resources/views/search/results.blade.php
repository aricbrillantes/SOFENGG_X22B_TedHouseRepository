@extends('layouts.common')

@section('container')
    <!-- DIV FOR BODY -->
    <div id="con">
        <!-- SEARCH RESULTS -->
        <h1>Search Results for <txt id="key">Really Nice</txt></h1>

        <!-- DIV FOR EACH RESULT -->
        <div id="result">
            <a href="/" id="s_name">A Really Nice Thesis</a><br>
            <a href="/" id="s_Author">De la Cruz, Juan</a>
            <a id="s_date">2010, October 31</a>
            
            <a id="s_finished">FINISHED</a>
            <a id="s_ongoing">ONGOING</a>
            <a id="s_unfin">DISCONTINUED</a>

            <br>
            <txt id="txt_tag">Tags: </txt>
            <ul id="s_tags">
                <li><a href="" id="a_tag">Really</a></li>
                <li><a href="" id="a_tag">Nice</a></li>
                <li><a href="" id="a_tag">Thesis</a></li>
                <li><a href="" id="a_tag">Cool</a></li>
            </ul>
        </div>
        
    </div>
@endsection

@section('bottom')
    <!-- PAGE NAVIGATION -->
    <div id="bottom">
        <a href="" id="prev">Prev</a>
        <ul id="pages">
            <li><a href="" id="a_page">1</a></li>
            <li><a href="" id="a_page">2</a></li>
        </ul>
        <a href="" id="next">Next </a>
    </div>
@endsection