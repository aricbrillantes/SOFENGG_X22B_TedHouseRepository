@extends('layouts.app')

@section('container')
    <!-- DIV FOR BODY -->
    <div id="con">
        <!-- SEARCH RESULTS -->
        <h1>Search Results for <txt id="key">Really Nice</txt></h1>

        <div align="center" id="no_found">
				Nothing found for <txt id="key">Really Nice</txt>
		</div>

        <!-- DIV FOR EACH RESULT -->
        {{--  <div id="result">
            <a href="/" id="s_name">A Really Nice Thesis</a><br>
            <a href="/" id="s_author">De la Cruz, Juan</a>
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
        </div>  --}}
        
    </div>
@endsection