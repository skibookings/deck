@extends('layouts.app')

@section('title', 'The Ski Deck | Contact Us')

@section('content')

  <div class="row">
    <div class="container">
      <div class="col-md-12">
        <div class="col-md-5 col-md-offset-1">
          
        </div>
        <div class="col-md-5">
          <blockquotes>
            <h2>{{ $post['title'] }}
                @if(Auth::User()['email']==="bookings@ski.co.za")
                  <a href="{{ route('posts.edit',5) }}" style="float: right;" class="btn btn-warning">EDIT</a>
                @endif
            </h2>
            <p>
              {!! $post['body'] !!}
            </p>
          </blockquotes>
        </div>
      </div>
    </div>
  </div>

@endsection