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
		</div>
	</div>

  <div class="row">
    <div class="col-md-12 col-md-offset-1">
        
         <div class="container-fluid">
          <h1 style="color: #fff;">Hello World!</h1>
          <div class="row">
            <div align="center" class="col-md-3" style="margin: 4px; border-radius: 20px; padding: 20px">

             <img src="images/a7023a_34a9d8235bf44b04b04473a7e4d8225e.jpg">

            </div>
            <div  align="center" class="col-md-3" style="margin: 10px; border-radius: 20px; padding: 20px">

            	<img src="images/a7023a_589fa8f0e9924589930b0a9c7c230c7a.jpg">
                
            </div>
            <div  align="center" class="col-md-3" style="margin: 4px; border-radius: 20px; padding: 20px">

            	<img src="images/a7023a_d570ae55c2474797a2496ba8edd295ca~mv2.jpg">
               
            </div>
          </div>
        </div> 
      
      </div>
  </div>

  <div class="row">
    <div class="col-md-12 col-md-offset-1">
        
         <div class="container-fluid">
          <h1 style="color: #fff;">Hello World!</h1>
          <div class="row">
            <div align="center" class="col-md-8 col-md-offset-1">

            	<h1 style="text-align: center;">{{ $post['title'] }}
                @if(Auth::User()->email==="bookings@ski.co.za")
                  <a href="{{ route('posts.edit',2) }}" style="float: right;" class="btn btn-warning">EDIT</a>
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
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="/images/a7023a_1da9c79e8f5442548b4b71bbfe792e69~mv2.jpg" alt="Lesson 1">
    </div>

    <div class="item">
      <img src="/images/a7023a_5d4dace90d404758860f765c9897f770~mv2.jpg" alt="Chicago">
    </div>

    <div class="item">
      <img src="/images/a7023a_7f152c67d1224ad89412a0a13fb85a19~mv2.jpg" alt="Bumboarding">
    </div>

    <div class="item">
      <img src="/images/a7023a_e75e02e73aaf471096b3b276092c5301~mv2.jpg" alt="Bumboarding">
    </div>

    <div class="item">
      <img src="/images/a7023a_7ba635c002da4b9abcb0f3f447053844~mv2.jpg" alt="Bumboarding">
    </div>

    <div class="item">
      <img src="/images/a7023a_edfc5eae332145cbaafa1d2b630aeb09~mv2.jpg" alt="Bumboarding">
    </div>

    <div class="item">
      <img src="/images/a7023a_aa7a03675f04406589ca6b5859b3f023~mv2.jpg" alt="Bumboarding">
    </div>

    <div class="item">
      <img src="/images/a7023a_f08d3c2e95af4089b66593e9b15fa5d8~mv2.jpg" alt="Bumboarding">
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