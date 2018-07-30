@extends('layouts.app')

@section('title', 'Skiing and Snowboarding')

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

  <div class="row">
    <div class="col-md-12 col-md-offset-1">
        
         <div class="container-fluid">
          <h1 style="color: #fff;">Kids Parties at The Ski Deck in Ferndale Randburg</h1>
          <div class="row">
             <img src="images/a7023a_0af1d005c94a4ff3a44866dddcb18605~mv2.jpg">
          </div>
        </div> 
      
      </div>
  </div>

  <div class="row">
    <div class="col-md-12 col-md-offset-1">
        
         <div class="container-fluid">
          <h1 style="color: #fff;">Kids Parties in Johannesburg</h1>
          <div class="row">
            <div align="center" class="col-md-8 col-md-offset-1">

            	<h1 style="text-align: center;">{{ $post['title'] }}
                @if(Auth::User()['email']==="bookings@ski.co.za")
                  <a href="{{ route('posts.edit',4) }}" style="float: right;" class="btn btn-warning">EDIT</a>
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

  <div id="myCarousel" class="carousel slide" data-ride="carousel" align="center">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
    <li data-target="#myCarousel" data-slide-to="4"></li>
    <li data-target="#myCarousel" data-slide-to="5"></li>
    <li data-target="#myCarousel" data-slide-to="6"></li>
    <li data-target="#myCarousel" data-slide-to="7"></li>
    <li data-target="#myCarousel" data-slide-to="8"></li>
    <li data-target="#myCarousel" data-slide-to="9"></li>
    <li data-target="#myCarousel" data-slide-to="10"></li>
    <li data-target="#myCarousel" data-slide-to="11"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="/images/a7023a_d83a10128fbb4f5cb9f062c3f11a3ea5~mv2.jpg" alt="Bumboarding">
    </div>

    <div class="item">
      <img src="/images/a7023a_07b5f23886e0418dab641d4b979e22f4~mv2.jpg" alt="Bumboarding">
    </div>

    <div class="item">
      <img src="/images/a7023a_6f2a57b186c44d60ad12e73efbb851ae~mv2.jpg" alt="Bumboarding">
    </div>

    <div class="item">
      <img src="/images/a7023a_5bbaae75e5564fe88ad906ac4fb4e1da~mv2.jpg" alt="Bumboarding">
    </div>

    <div class="item">
      <img src="/images/a7023a_17d0fa3d20e14804ad04f2990ce95fa3~mv2.jpg" alt="Bumboarding">
    </div>

    <div class="item">
      <img src="/images/a7023a_45d9f875e4bf4bd28925e456c3db0dbe~mv2.jpg" alt="Bumboarding">
    </div>

    <div class="item">
      <img src="/images/a7023a_8d0bb7981fc347ceaea1e1b7bb1352a0~mv2.jpg" alt="Bumboarding">
    </div>

    <div class="item">
      <img src="/images/a7023a_25120eb2addb46c39d61b9fb79fbf597~mv2.jpg" alt="Bumboarding">
    </div>

    <div class="item">
      <img src="/images/a7023a_8b0e72eecd2a408d847e42060fdd7e6f~mv2.jpg" alt="Bumboarding">
    </div>

    <div class="item">
      <img src="/images/a7023a_7da5b8f840aa400cabd8f47c9ffded82~mv2.jpg" alt="Bumboarding">
    </div>

    <div class="item">
      <img src="/images/a7023a_d3c55963b4b64be89b1360e6aed9e6d1~mv2.jpg" alt="Bumboarding">
    </div>

    <div class="item">
      <img src="/images/a7023a_e32eb357471c4a35813a5bb9a0fbab7c~mv2.jpg" alt="Bumboarding">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
                  </div>
                </div>
            </div>
        </div>
    </div>
  


@endsection