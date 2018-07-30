@extends('layouts.app')

@section('title', 'Water Slide Parties | The Ski Deck Ferndale')

@section('content')

	<div class="row">
		<div class="container">
			<div class="col-md-12">
				<div class="col-md-10 col-md-offset-1">
					<div class="panel panel-bare">
                      
                    <div class="title" align="center">
                      <img style="height: 240px;" src="/images/14433229_998371313608190_263386481962448946_n.png" alt="The Ski Deck Logo">
                    </div>


					
				</div>
			</div>
		</div>
	</div>

  <div class="row">
    <div class="col-md-12 col-md-offset-1">
        
         <div class="container-fluid">
          <h1 style="color: #fff;">Fun Sliding Parties for Summer</h1>
          <div class="row">
            <div align="center" class="col-md-8 col-md-offset-1">

             <img src="images/DSC_351.jpg">

            </div>
          </div>
        </div> 
      
      </div>
  </div>

  <div class="row">
    <div class="col-md-12 col-md-offset-1">
        
         <div class="container-fluid">
          <h1 style="color: #fff;">Bumboarding Parties Johannesburg Ferndale Randburg</h1>
          <div class="row">
            <div class="col-md-8 col-md-offset-1">

            	<h1 style="text-align: center;">{{ $post['title'] }}
                @if(Auth::User()['email']==="bookings@ski.co.za")
                  <a href="{{ route('posts.edit',7) }}" style="float: right;" class="btn btn-warning">EDIT</a>
                @endif
              </h1>

            	<p>
            		{!! $post['body'] !!}
            	</p>

               
            </div>
          </div>
        </div> 
      
      </div>
  </div>
    
@endsection