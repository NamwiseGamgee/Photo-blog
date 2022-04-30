@extends('layouts.app')

@section('content')
    <h3>Create Post</h3>
    {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'enctype'=> 'multipart/form-data']) !!}
    
    <div class="form-group">
        {{Form::label('title','Title')}}
        {{Form::text('title','',['class' => 'form-control', 'placeholder' => 'Add Title'])}}

    </div>
    <div class="form-group">
        {{Form::label('description','Description')}}
        {{Form::textarea('description','',['class' => 'form-control', 'placeholder' => 'Add Description'])}}

    </div>
    <div class="form-group">
        {{Form::file('cover_image')}}
    </div>
    {{Form::submit('Post', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection