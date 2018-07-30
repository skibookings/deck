@extends('layouts.app')

@section('title', 'The Ski Deck | Admin')

@section('content')

  <div class="row">
    <div class="container">
      <div class="col-md-12">
        <div class="col-md-8 col-md-offset-2">
        
          <h2>Posts Index 
            @if(Auth::user()['email']==="bookings@ski.co.za")
              <a href="{{ url('/posts/create') }}" class="glyphicon glyphicon-pencil btn btn-default" style="float: right;"></a>
            @endif
          </h2>
          
          @foreach($posts as $post)
          
            <h2><a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a></h2>
          
          <p class="ArticleBody">
            {!! str_limit(strip_tags(nl2br($post['body'])), 300) !!}
            @if (strlen(strip_tags($post['body'])) > 300)
              ... <br><br><a href="{{ route('posts.show', $post->id) }}" class="btn btn-info btn-sm">Read More</a>
            @endif
          </p>
          
          <hr>
          
          @endforeach
          
        </div>
      </div>
    </div>
  </div>

@endsection