@extends('layouts.app')

@section('title', 'Post | Edit')

@section('content')

<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="col-md-8 col-md-offset-2">
				
			  {{ Form::model($post, ['route' => ['posts.update', $post], 'method' => 'patch']) }}

			  	<div style="margin-top: 30px;">
				    {{ Form::label('title', 'Title:') }}
				    {{ Form::text('title', null, ['class' => 'form-control']) }}
			  	</div>

			  	<div style="margin-top: 30px;">
				    {{ Form::label('body', 'Content:') }}
				    {{ Form::textarea(nl2br('body'), null, ['class' => 'form-control']) }}  		
			  	</div>

			  	<div style="margin-top: 30px;">
			  	    {{ Form::submit('Update Post', ['class' => 'btn btn-success']) }}
            <a href="{{ route('posts.index') }}" class = 'btn btn-danger btn-lg'>Cancel</a>	
			  	</div>

  			  {{ Form::close() }}

			  	<div>
			  	</div>

			</div>
		</div>
	</div>
</div>






@endsection