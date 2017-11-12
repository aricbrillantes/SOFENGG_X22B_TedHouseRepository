@extends('layouts.app')

@section('content')
    <div id="con">
    @if(count($works) > 0)
        <h1 id="author_search">Works</h1>
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
        @foreach($works as $work)
        <!-- DIV FOR EACH RESULT -->
			<div id="result">
				<a href="/works/{{$work->id}}" id="s_name">{{$work->study}}</a><br>
				<!-- AUTHORS -->
				<ul id="list_authors">
					<li><a href="#" class="author">{{$work->user->name}}</a></li>
                    @php
                        $work->co_authors = explode(',', $work->co_authors);
                    @endphp

                    @foreach($work->co_authors as $author)
                        <li><a href="#" class="author">{{ $author }}</a></li>
                    @endforeach
				</ul>

				<a id="s_date">{{$work->created_at}}</a>
				
                @if($work->status == 'Finished')
				    <a id="s_finished">FINISHED</a>
                @elseif($work->status == 'Ongoing')
                    <a id="s_ongoing">ONGOING</a>
                @else
                    <a id="s_unfin">DISCONTINUED</a> 
                @endif

				<br>
				<txt id="txt_tag">Tags: </txt>
				<ul id="s_tags">
                    @php
                        $work->tag = explode(',', $work->tag);
                    @endphp

                    @foreach($work->tag as $tag)
                        <li><a href="" id="a_tag">{{ $tag }}</a></li>
                    @endforeach
				</ul>
			</div>
			
		
            {{--  <div class="well">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        @if($work->document != 'no-doc.png')
                            <img style="width: 50%" src="/storage/web_img/doc.png">
                        @else
                            <img style="width: 50%" src="/storage/web_img/no-doc.png">
                        @endif
                    </div>
                    <div class="col-md-8 col-sm-4">
                        <h3><a href="/works/{{$work->id}}">{{$work->study}}</a></h3>
                        <small>Uploaded on {{$work->created_at}} by {{$work->user->name}}</small>
                    </div>
                </div>
            </div>  --}}
        @endforeach
        {{$works->links()}}
    @else
        <div align="center" id="no_found">
            No works found
        </div>
    @endif
    </div>
@endsection