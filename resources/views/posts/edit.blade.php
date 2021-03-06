@extends('layouts.app')
@section('content')

<a href="/posts" calss="btn btn-default">Go back! </a>
    <h1>Edit Post</h1>
 {!! Form::open(['action' => ['PostsController@update',$post->id],'method' => 'POST']) !!}
    <div class = "form-group">
    {{Form::label('title','Title')}}
    {{Form::text('title',$post->title,['class'=>'form-control','placeholder'=>'Title'])}}
    </div>
    <div class = "form-group">
    {{Form::label('Body','Body')}}
    {{Form::textarea('body',$post->body,['id' => 'article-ckeditor','class'=>'form-control','placeholder'=>'Body'])}}
    </div>

    {{Form::hidden('_method','PUT')}}
    {{Form::submit('Submit',['class'=>'btn btn-primary'])}}

{!! Form::close() !!}


 @endsection