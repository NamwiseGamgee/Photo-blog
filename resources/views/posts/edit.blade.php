@extends('layouts.app')

@section('content')
    <h3>Edit Post</h3>
    {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST']) !!}
    
        <div class="form-group">
            {{Form::label('title','Title')}}
            {{Form::text('title',$post->title,['class' => 'form-control', 'placeholder' => 'Add Title'])}}

        </div>
        <div class="form-group">
            {{Form::label('description','Description')}}
            {{Form::textarea('description',$post->description,['class' => 'form-control', 'placeholder' => 'Add Description'])}}

        </div>
        
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Post', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection