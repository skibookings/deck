@extends('layouts.app')

@section('title', 'The Ski Deck | Admin')

@section('content')

  <h2>
    Create New Post
  </h2>

  <form action="{{ route('posts.store') }}" method="post">
    <div class="form-group">      
    <input type="text" name="title" placeholder="title" class="form-control">
    </div>
    <div class="form-group">  
    <input type="file" name="image" placeholder="upload image file" class="form-control">
    </div>
    <div class="form-group">  
    <input type="text" name="video" placeholder="paste video iframe code" class="form-control">
    </div>
    <div class="form-group">  
    <textarea name="body" id="" cols="30" rows="10" placeholder="type text here.." class="form-control"></textarea>
    </div>
    <div class="form-group">
    <input type="text" name="fbposts" placeholder="paste posts iframe code" class="form-control">
    </div>
    <div class="form-group">  
    <input type="text" name="fbcomments" placeholder="paste comments code" class="form-control">
    </div>
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <hr>
    <input type="submit" value="Create Post" class="btn btn-primary btn-block">
  </form>

@endsection