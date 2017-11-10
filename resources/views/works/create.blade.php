@extends('layouts.app')

@section('content')
    <h1>Upload Document</h1>
    {!! Form::open(['action' => 'WorksController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('study', 'Study')}}
            {{Form::text('study', '', ['class' => 'form-control', 'placeholder' => 'Name of study'])}}
        </div>
        <div class="form-group">
            {{Form::label('author', 'Author')}}
            {{Form::text('author', '', ['class' => 'form-control', 'placeholder' => 'Name of author'])}}
        </div>
        <div class="row">
        <div class='col-sm-6'>
            <div class="form-group">
                <div class='input-group date' id='datetimepicker1'>
                    <input type='text' class="form-control" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </div>
        </div>
        
    </div>         
        <!-- <div class="form-group">
            {{Form::label('body', 'Body')}}
            {{Form::textarea('body', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body Text'])}}
        </div> -->
        <!-- <div class="form-group">
            {{Form::file('cover_image')}}
        </div> -->
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection