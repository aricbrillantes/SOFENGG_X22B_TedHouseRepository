@extends('layouts.app')

@section('content')
    <!-- POP UPS -->
    <div id="black"></div>
    
    <!-- UPDATE POP UP -->
    {!! Form::open(['action' => ['WorksController@update', $work->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}  
        <div id="pop_update" class="popup">
            <h1>Update</h1>
            <hr class="hr2">
            <br>
            <table class="up_table">
                <tr>
                    <!-- STUDY -->
                    <td>Study:</td>
                    <td>
                        {{Form::text('study', $work->study, ['class' => 'form-control', 'placeholder' => 'Name of study'])}}
                    </td>
                </tr>
                <tr>
                    <!-- STATUS -->
                    <td class="table_up1">Status:</td>
                    <td>
                        {{Form::select('status', ['Finished', 'Ongoing', 'Discontinued'], $work->status, ['id' => 'up_status', 'class' =>  'form-control'])}}
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
                        {{Form::button($work->document, ['class' => 'button_up', 'id' => 'btn_newfile'])}}
                        {{Form::file('document', ['class' => 'form-control', 'id' => 'img_upload', 'style' => 'display: none'])}}
                    </td>
                </tr>
                <tr>
                    <!-- ABSTRACT -->
                    <td class="table_up1">Abstract:</td>
                    <td>
                        {{Form::textarea('abstract', $work->abstract, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Abstract text'])}}
                    </td>
                </tr>
            </table>
            <button id="up_save" class="button_up" type="button">Save</button>
            <button id="up_cancel" class="button_up" type="button">Cancel</button>
            {{Form::hidden('_method', 'PUT')}}
            {{Form::submit('Submit', ['id' => 'submit_work', 'style' => 'display: none'])}}
        </div>
    {!! Form::close() !!}

    <!-- DELETE POP UP -->
    {!! Form::open(['action' => ['WorksController@destroy', $work->id], 'method' => 'POST']) !!}
        <div id="pop_del" align="center" class="popup">
            Are you sure you want to delete this work?<br>
            <button id="del_cancel" type="button">Cancel</button>
            <button id="del_yes" type="button">Delete</button>
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::submit('Delete', ['id' => 'delete_work', 'style' => 'display: none'])}}
        </div>
    {!! Form::close() !!}

    <!-- DOWNLOAD POP UP -->
    <div id="pop_dl" class="popup">
        <h1>Download</h1>
        <hr class="hr2">

        <!-- FILES TO DOWNLOAD -->
        <div class="div_files">
            <ul id="dl_filelist">
                <li>File 1<button class="dl_indiv">Download</button></li>
                <li>File 2<button class="dl_indiv">Download</button></li>
                <li>File 3<button class="dl_indiv">Download</button></li>
            </ul>
        </div>

        <!-- DOWNLOAD ZIP -->
        <button class="button_del" id="dl_all">Download All</button>
        <button class="button_del" id="dl_cancel">Cancel</button>
    </div>

    <!-- REQ DOWNLOAD POP UP -->
    <div id="pop_rqdl" class="popup">
        <h1>Request Download</h1>
        <hr class="hr2">
        <br>
        <table class="up_table">
            <tr>
                <!-- EMAIL -->
                <td class="table_up1">Email:</td>
                <td>
                    <input type="text" name="email" placeholder="Email Address">
                </td>
            </tr>
        </table>
        <button class="button_del" id="dl_rq">Request</button>
        <button class="button_del" id="dl_rqcancel">Cancel</button>
    </div>

    <!-- REQ PREVIEW POP UP -->
    <div id="pop_rqview" class="popup">
        <h1>Request Full Preview</h1>
        <hr class="hr2">
        <br>
        <table class="up_table">
            <tr>
                <!-- EMAIL -->
                <td class="table_up1">Email:</td>
                <td>
                    <input type="text" name="email" placeholder="Email Address">
                </td>
            </tr>
        </table>
        <button class="button_del" id="view_rq">Request</button>
        <button class="button_del" id="view_vcancel">Cancel</button>
    </div>

    <!-- DIV FOR BODY -->
    <div id="div_work">
        <table>
            <tr>
                <td class="work_details">
                    <!-- NAME -->
                    <h1 id="work_name">{{$work->study}}</h1>
                    <!-- AUTHORS -->
                    <ul id="list_authors">
                        <li><a href="#" class="author">{{$work->user->name}}</a></li>
                    </ul>
                    <!-- DATE -->
                    <a id="work_date">{{$work->created_at}}</a>
                    <br>
                    <!-- TAGS -->
                    <text class="txt_tag">Tags: </text>
                    <ul id="list_tags">
                        {{--  <li><a href="" class="a_tag">Really</a></li>
                        <li><a href="" class="a_tag">Nice</a></li>
                        <li><a href="" class="a_tag">Thesis</a></li>
                        <li><a href="" class="a_tag">Cool</a></li>  --}}
                    </ul>
                    <br>
                    <!-- STATUS -->
                    <a class="status" id="s_finished">{{$work->status}}</a>
                    {{--  <a class="status" id="s_ongoing">ONGOING</a>
                    <a class="status" id="s_unfin">DISCONTINUED</a>  --}}
                    
                    <br>
                    <!-- BUTTONS -->
                    @guest
                        <button id="btndl_guest" class="download">Request Download</button>
                    @else
                        <button id="btndl_member" class="download">Download</button>
                    @endguest
                    
                    @if(!Auth::guest())
                        @if(Auth::user()->id == $work->user_id)
                            <button id="btn_update" class="button_work">Update</button><button id="btn_delete" class="button_work">Delete</button>
                        @endif
                    @endif
                </td>
                <td class="work_view">
                    <button class="btn_select" id="btn_abstract">ABSTRACT</button>
                    <button class="btn_deselect" id="btn_poster">IMAGE</button>
                    <hr>
                    <!-- ABSTRACT -->
                    <div id="abstract">
                        {!! $work->abstract !!}
                    </div>
                    <p align="center" id="poster">
                        <img src="/storage/web_img/poster_sample.png" width="600">
                    </p>
                    <!-- FULL PREVIEW -->
                    <div align="center">
                        @guest
                            <button id="req_preview" class="button_work">REQUEST FULL PREVIEW</button>
                        @else
                            <button id="btn_preview" class="button_work">VIEW FULL PREVIEW</button>
                        @endguest
                    </div>
                </td>
            </tr>
        </table>

        <!-- RELATED WORKS -->
        <div class="related">
            <hr class="relatedhr">
            <h2>Related Works</h2>
                <h4 id="rel_name">Another Really Nice and Slightly Longer Thesis</h4>
                by <a id="rel_author">Author</a>
                <br>
                <h4 id="rel_name">ASDGASGFSHJDKH</h4>
                by <a id="rel_author">Author</a>
                <br>
                <h4 id="rel_name">BB CREAM PA PA PAAA</h4>
                by <a id="rel_author">Momo</a>
        </div>
    </div>

    {{--  <a href="/posts" class="btn btn-default">Go Back</a>
    <h1>{{$post->title}}</h1>
    <img style="width: 100%" src="/storage/cover_images/{{$post->cover_image}}">
    <br><br>
    <div>
        {!! $post->body !!}
    </div>
    <hr>
    <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
    <hr>

    @if(!Auth::guest())
        @if(Auth::user()->id == $post->user_id)
            <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>

            {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
            {!! Form::close() !!}
        @endif
    @endif  --}}
@endsection