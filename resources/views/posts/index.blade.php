@extends('layouts.app')

@section('content')
    
    
<h3>Posts</h3>

    @if(count($posts) > 0)
        @foreach($posts as $post)

            
            <div class="card" style="width: 18rem;">
                <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}">
                <div class="card-body">
                <h5 class="card-title">{{$post->title}}</h5>
                
                
                </div>
            </div>
            <div class="well">
                <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                <small> Uploaded by {{$post->created_at}} by {{$post->user->name}}</small>
            </div>
        @endforeach
        {{$posts->links()}}
    @else  
        <p> No posts found <p>
    @endif

@endsection