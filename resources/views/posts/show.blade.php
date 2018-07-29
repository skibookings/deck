@extends('layouts.app')

@section('title', "$post->title")

@section('content')

    <div class="container">
      <div class="col-md-12">
  <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <h2> {{ $post->title }} </h2>
            <p> {!! nl2br($post->body) !!} </p>
          </div>
          @if(Auth::user()->email==='bookings@ski.co.za')
        <a href="{{ route('posts.edit',$post->id) }}" class="btn btn-warning" style="float: right;">EDIT</a>
        @endif
      </div>
  <div class="row">
      <div class="col-md-2 col-md-offset-1">
      </div> 
  </div>
    </div>
  </div>

@endsection