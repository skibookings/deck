@extends('layouts.app')

@section('title', 'The Ski Deck | Admin')

@section('content')

  <div class="row">
    <div class="container">
      <div class="col-md-12">
        <div class="col-md-8 col-md-offset-2">
        
          <h2>Posts Index <a href="{{ url('/posts/create') }}" class="glyphicon glyphicon-pencil btn btn-default" style="float: right;"></a></h2>
          
          @foreach($posts as $post)
          
            <h2><a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a></h2>
          
            <p>
              {!! nl2br($post->body) !!}
            </p>
          
          <hr>
          
          @endforeach
          
        </div>
      </div>
    </div>
  </div>

@endsection