@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="/works/create" class="btn btn-primary">Create Work</a>
                    <h3>Your Works</h3>
                    @if(count($works) > 0)
                        <table class="table table-striped">
                            <tr>
                                <td>Title</td>
                                <td></td>
                                <td></td>
                            </tr>
                            @foreach($works as $work)
                                <tr>
                                    <td><a href="/works/{{$work->id}}">{{$work->study}}</a></td>
                                    <td>
                                        {!! Form::open(['action' => ['WorksController@destroy', $work->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
                                        {{Form::hidden('_method', 'DELETE')}}
                                        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    @else
                        <p>You have no works</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
