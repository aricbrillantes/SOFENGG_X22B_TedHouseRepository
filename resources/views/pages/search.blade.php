@extends('layouts.app')

@section('content')
    @php
        $search_txt = implode(' ', $arr_search);
    @endphp

    @if(!empty($result))
        <!-- DIV FOR BODY -->
        <div id="con">
            <!-- SEARCH RESULTS -->
            <h1 id="normal_search">Search Results for <txt id="key">{{ $search_txt }}</txt></h1>
            <!-- <h1 id="tag_search">Works with the Tag <txt id="key">Nice</txt></h1> -->
            {{--  <h1 id="author_search">Works by<txt id="key">Juan De la Cruz</txt></h1>  --}}
            <div class="div_sort">
                Sort By:
                <select id="sort">
                    <option>Date</option>
                    <option>Name</option>
                    <option>Finished Works</option>
                    <option>Ongoing Works</option>
                    <option>Discontinued Works</option>
                </select>
                <button id="btn_sort">Go</button>
            </div>

            <!-- DIV FOR EACH RESULT -->
            @foreach($result as $key)
                <div id="result">
                    <a href="/works/{{ $key->id }}" id="s_name">{{ $key->study }}</a><br>
                    <!-- AUTHORS -->
                    <ul id="list_authors">
                        @php
                            $key->co_authors = explode(',', $key->co_authors);
                        @endphp

                        @foreach($key->co_authors as $author)
                            <li><a href="" class="author">{{ $author }}</a></li>
                        @endforeach
                    </ul>

                    <a id="s_date">{{ $key->created_at }}</a>
                    

                    @if($key->status == 'Finished')
                        <a id="s_finished">FINISHED</a>
                    @elseif($key->status == 'Ongoing')
                        <a id="s_ongoing">ONGOING</a>
                    @else
                        <a id="s_unfin">DISCONTINUED</a> 
                    @endif

                    <br>
                    <txt id="txt_tag">Tags: </txt>
                    <ul id="s_tags">
                        @php
                            $key->tag = explode(',', $key->tag);
                        @endphp

                        @foreach($key->tag as $tag)
                            <li><a href="" id="a_tag">{{ $tag }}</a></li>
                        @endforeach
                    </ul>
                </div>
            @endforeach
        </div>
    @else
        <!-- IF NOTHING FOUND -->
        <div align="center" id="no_found">
            Nothing found for <txt id="key">{{ $search_txt }}</txt>
        </div>
    @endif
@endsection