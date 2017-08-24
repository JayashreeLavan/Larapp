@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                  <a href="/posts/create" class="btn btn-primary">Create Post</a>
                      @if(count($posts)>0)
                  <h1> Your Blog posts</h1>

             
                  <table class="table table-striped">
<tr>
<th>Title</th>
<th></th>
<th></th>
</tr>
@foreach($posts as $post)
<tr>
<td>{{$post->title}}</td>
<td><a href="/posts/{{$post->id}}/edit" class="btn btn-small btn-default">Edit Post</a>
</td><td>
{!! Form::open(['action' =>['PostsController@destroy',$post->id],'method'=>'POST','class'=>'pull-right']) !!}
{{Form::hidden('_method','DELETE')}}
{{Form::submit('Delete',['class'=>'btn btn-small btn-danger'])}}

{!! Form::close() !!}
</td>
</tr>

@endforeach


                  </table>

@else
<br><br>
You have no posts
                  @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
