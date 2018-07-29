@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-bare">
                <div class="panel-bare">Welcome to The Ski Deck Online</div>

                <div class="panel-bare" align="center">
                  <div class="content">
                      
                    <div class="title">
                      <img style="height: 240px;" src="/images/14433229_998371313608190_263386481962448946_n.png" alt="The Ski Deck Logo">
                    </div>
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
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
      <img src="/images/a7023a_5d3237e4f131412596c5ff631f99fc14~mv2.jpg" alt="Chicago">
    </div>

    <div class="item">
      <img src="/images/a7023a_15c62ae0c91e4dd484c28b3a8554fa2b~mv2_d_4608_3072_s_4_2.jpg" alt="Bumboarding">
    </div>

    <div class="item">
      <img src="/images/a7023a_f7bbae0f0b7e4a2abedbfde3118310e5~mv2_d_4608_3072_s_4_2.jpg" alt="Bumboarding">
    </div>

    <div class="item">
      <img src="/images/a7023a_61b215837bed4563b593f222887114b7~mv2.jpg" alt="Bumboarding">
    </div>

    <div class="item">
      <img src="/images/a7023a_6556dfe6f4e84a16a02b88038790ff65~mv2.jpg" alt="Bumboarding">
    </div>

    <div class="item">
      <img src="/images/a7023a_9592db6e3b8f4367b3ea70ea828d1e5b~mv2.jpg" alt="Bumboarding">
    </div>

    <div class="item">
      <img src="/images/a7023a_b9d40086600847d198817a566d290369~mv2.jpg" alt="Bumboarding">
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
  
  <div class="row">
    <div class="col-md-12 col-md-offset-1">
        
         <div class="container-fluid">
          <h1 style="color: #fff;">Hello World!</h1>
          <div class="row">
            <div align="center" class="col-lg-4" style="background-color:#5491f2; color: #fff; margin: 4px; border-radius: 20px; padding: 20px">
             <blockquote>
              <h3>
                  SKIING AND SNOWBOARDING
              </h3>
              <p>
                Learning to ski in South Africa is essential 
                to the enjoyment of a ski holiday eliminating 
                the discomfort of learning in the resort and 
                spending the first week on the beginner's slopes. 
                Rather be exploring the slopes, skiing from 
                restaurant to restaurant, and getting full value 
                out of your ski lift pass from day one! 
              </p>
              <a href="#" class="btn btn-primary">Read More...</a>
             </blockquote>   
            </div>
            <div  align="center" class="col-lg-4" style="background-color:#5491f2; color: #fff; margin: 10px; border-radius: 20px; padding: 20px">
             <blockquote>
                <h3>
                  SKI AND SNOWBOARD SHOP
              </h3>
              <p>
                Keep Warm. Stay Dry. Be Comfortable. 
                All while looking great in all weather conditions!
                Our policy is to stock practical, 
                good quality ski clothing, 
                supplying the best value for money 
                on all the important items essentail 
                to your comfort and enjoyment so that 
                we compare most favorably with the 
                european market.
              </p>
              <a href="#" class="btn btn-primary">Read More...</a>
             </blockquote>   
            </div>
            <div  align="center" class="col-lg-2" style="background-color:#5491f2; color: #fff; margin: 4px; border-radius: 20px; padding: 20px">
             <blockquote>
                <h3>
                  KIDS FUN PARTIES
              </h3>
              <p>

                We have the best party venue in town!

              </p>
              <a href="#" class="btn btn-primary">Read More...</a>
             </blockquote>   
            </div>
          </div>
        </div> 
      
      </div>
  </div>
  
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
        
         <div class="container-fluid">
          <div class="col-md-9 panel-heading">
            <blockquote>
              <h1>
                @if(Auth::User()['email']==="bookings@ski.co.za")
                  <a href="{{ route('posts.edit',3) }}" style="float: right;" class="btn btn-warning">EDIT</a>
                @endif
                 {{ $post['title'] }}
              </h1>
              <hr>
              {!! nl2br($post['body']) !!}
             </blockquote>
            
          </div>
          <div class="col-md-2">
              <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2FSkiDeck%2Fposts%2F1480429515402365&width=500" 
                      width="500" height="575" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" 
                      allow="encrypted-media">
              </iframe>
              <hr>
            <iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2FSkiDeck%2F&width=450&layout=standard&action=like&size=small&show_faces=true&share=true&height=80&appId=1599715780054881" 
                    width="450" height="80" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" 
                    allow="encrypted-media">
            </iframe>
            
          </div>
        </div> 
      
      </div>
  </div>
  <div class="row">
    <div class="container">
      <div class="col-md-12">
        <div class="col-md-8 col-md-offset-3">
          <div class="fb-comments" data-href="https://www.facebook.com/pg/SkiDeck/posts/?ref=page_internal" data-numposts="5">
          </div>          
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
