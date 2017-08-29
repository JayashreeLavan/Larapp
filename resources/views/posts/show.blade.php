@extends('layouts.app')
@section('content')

<a href="/posts" calss="btn btn-default">Go back! </a>
    <h1>{{$post->title}}</h1>

    <p>{!!$post->body!!}</p>
<hr>

      <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
    
<hr>
@if(!Auth::guest())
@if(Auth::user()->id==$post->user_id)
<a href="/posts/{{$post->id}}/edit" class="btn btn-small btn-default">Edit Post</a>

{!! Form::open(['action' =>['PostsController@destroy',$post->id],'method'=>'POST','class'=>'pull-right']) !!}
{{Form::hidden('_method','DELETE')}}
{{Form::submit('Delete',['class'=>'btn btn-small btn-danger'])}}

{!! Form::close() !!}
@endif
@endif
@endsection