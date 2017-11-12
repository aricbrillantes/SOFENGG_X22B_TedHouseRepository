@extends('layouts.app')

@section('content')
<div id="div_work">
    <h1>Upload Work</h1>
    {!! Form::open(['action' => 'WorksController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <hr class="hr2">
        <table class="up_table">
            <tr>
                <!-- STUDY -->
                <td>Study:</td>
                <td>
                    {{Form::text('study', '', ['class' => 'form-control', 'placeholder' => 'Name of study'])}}
                </td>
            </tr>
            <tr>
                <!-- STATUS -->
                <td class="table_up1">Status:</td>
                <td>
                    {{Form::select('status', ['Finished', 'Ongoing', 'Discontinued'], null, ['id' => 'up_status', 'class' =>  'form-control'])}}
                </td>
            </tr>
            <tr>
                <!-- TAGS -->
                <td class="table_up1">Tags:</td>
                <td>
                    <ul id="up_tags">
                    </ul>
                    <br>
                    <!-- NEW TAG -->
                    {{Form::text('', '', ['name' => 'new_tag', 'id' => 'new_tag', 'class' => 'form-control', 'placeholder' => 'New Tag...'])}}
                    {{Form::button('Add', ['class' => 'button_up', 'id' => 'btn_addtag'])}}
                </td>
            </tr>
            <tr>
                <!-- AUTHORS -->
                <td class="table_up1">Co-authors:</td>
                <td>
                    <ul id="up_authors">
                    </ul>
                    <!-- ADD AUTHOR -->
                    {{Form::text('', '', ['name' => 'new_author', 'id' => 'new_author', 'class' => 'form-control', 'placeholder' => 'Add co-author...'])}}
                    {{Form::button('Add', ['class' => 'button_up', 'id' => 'btn_addauthor'])}}
                </td>
            </tr>
            <tr>
                <!-- FILES -->
                <td>File:</td>
                <!-- UPLOAD NEW FILE -->
                <td>
                    {{Form::button('Upload New File', ['class' => 'button_up', 'id' => 'btn_newfile'])}}
                    {{Form::file('document', ['class' => 'form-control', 'id' => 'img_upload', 'style' => 'display: none'])}}
                </td>
            </tr>
            <tr>
                <!-- ABSTRACT -->
                <td class="table_up1">Abstract:</td>
                <td>
                    {{Form::textarea('abstract', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Abstract text'])}}
                </td>
            </tr>
        </table>
        <button id="up_save" class="button_up">Upload</button>
        {{Form::submit('Submit', ['id' => 'submit_work', 'style' => 'display: none'])}}
    {!! Form::close() !!}
</div>
    {{--  <h1>Upload Document</h1>
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
        <div class="form-group">
            {{Form::label('abstract', 'Abstract')}}
            {{Form::textarea('abstract', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Abstract text'])}}
        </div>
        <div class="form-group">
            {{Form::label('document', 'Document')}}
            {{Form::file('document')}}
        </div>
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}  --}}
@endsection