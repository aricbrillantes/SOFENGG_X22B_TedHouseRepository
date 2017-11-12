@extends('layouts.app')

@section('content')
    <h1><strong>TE<sup>3</sup>D</strong>Workshop</h1>
    <div>
        <p>This is a description placeholder where anyone can put in the description of the page, or put in instructions or messages<p>
    </div>
    
    @if(count($works) > 0)
        <table class="table table-striped">
            @foreach($works as $work)
                <tr>
                    <td><h1><a href="/works/{{$work->id}}">{{$work->study}}</a></h1></td>
                </tr>
            @endforeach
            {{$works->links()}}
        </table>
    @endif
@endsection