@extends('layouts.app')

@section('content')
    <h1>Upload Document</h1>
    {!! Form::open(['action' => 'WorksController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('study', 'Study')}}
            {{Form::text('study', '', ['class' => 'form-control', 'placeholder' => 'Name of study'])}}
        </div>
        <div class="form-group">
            {{Form::label('author', 'Author/s')}}
            {{Form::text('author', '', ['class' => 'form-control', 'placeholder' => 'Name of author'])}}
        </div>
        <div class="form-group">
            {{Form::label('status', 'Status')}}
            <br>
            {{Form::select('status', ['Finished', 'Ongoing', 'Discontinued'], null, ['class' =>  'form-control'])}}
        </div>  
        {{--  <div class="form-group">
            <div class='input-group date' id='datetimepicker1'>
                <input type='text' class="form-control" />
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
            </div>
        </div>  --}}
        <div class="form-group">
            {{Form::label('abstract', 'Abstract')}}
            {{Form::textarea('abstract', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Abstract text'])}}
        </div>
        <div class="form-group">
            {{Form::label('document', 'Document')}}
            {{Form::file('document')}}
        </div>
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection