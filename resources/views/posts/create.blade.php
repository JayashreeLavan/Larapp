@extends('layouts.app')
@section('content')

<a href="/posts" class="btn btn-default">Go back! </a>
    <h1>create new Post</h1>
 {!! Form::open(['action' => 'PostsController@store','method' => 'POST','enctype'=> 'multipart/data']) !!}
    <div class = "form-group">
    {{Form::label('title','Title')}}
    {{Form::text('title','',['class'=>'form-control','placeholder'=>'Title'])}}
    </div>
    <div class = "form-group">
    {{Form::label('Body','Body')}}
    {{Form::textarea('body','',['id' => 'article-ckeditor','class'=>'form-control','placeholder'=>'Body'])}}
    </div>

    <div class="form-group">
    {{Form::file('cover_image')}}
    </div>


    {{Form::submit('Submit',['class'=>'btn btn-primary'])}}

{!! Form::close() !!}


 @endsection