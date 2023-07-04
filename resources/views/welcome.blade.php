
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Greenisenos</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('custom_style/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="icon" href="{{ asset('app_logo/main.png') }}" type="image/x-icon">

    <link rel="stylesheet" href="{{asset('custom_style/assets/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{asset('custom_style/assets/css/templatemo-onix-digital.css')}}">
    <link rel="stylesheet" href="{{asset('custom_style/assets/css/animated.css')}}">
    <link rel="stylesheet" href="{{asset('custom_style/assets/css/owl.css')}}">
<!--

TemplateMo 565 Onix Digital

https://templatemo.com/tm-565-onix-digital

-->
  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="/" class="logo">
              <img src="app_logo/main.png">
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              
              <li class="scroll-to-section"><a href="#events">Events</a></li> 
              <li class="scroll-to-section"><a href="{{route('register')}}">Create Account</a></li> 
              <li class="scroll-to-section"><div class="main-red-button-hover"><a href="{{route('login')}}">Login</a></div></li> 
            </ul>        
            <a class='menu-trigger'>
                <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div class="main-banner" id="top">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6 align-self-center">
              <div class="owl-carousel owl-banner">
                <div class="item header-text">
                  <h6>Digos City</h6>
                  <h2>Environmental <em>Activities Scheduler</em>  <span>System</span></h2>
                  <p> with Geo-tagging and SMS Notification</p>
                  <div class="down-buttons">
                    <div class="main-blue-button-hover">
                      <a href="register">Join Us Now</a>
                    </div>
                    <!-- <div class="call-button">
                      <a href="#"><i class="fa fa-phone"></i> 010-020-0340</a>
                    </div> -->
                  </div>
                </div>
               
               
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  

  <div id="events" class="our-portfolio section">
    <div class="portfolio-left-dec">
      <img src="custom_style/assets/images/portfolio-left-dec.png" alt="">
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading">
            <h2>Join <span>us</span> on our latest <em>events</em>  now!</h2>
           
          </div>
        
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="owl-carousel owl-portfolio">
          @foreach($status as $s)
            @foreach($env_acti as $ea)
              @if($ea->id == $s->acti_id)
                @if($s->status=='uncompleted')
                <div class="item">
              <div class="thumb">
                @if($ea->photo=='')
                <img src="custom_style/assets/images/default_activity.jpg" alt="no activity photo"  class="object-cover h-96 w-48">
                @else
                <img src="environmental_activities/photos/{{$ea->photo}}" alt="no activity photo" class="object-cover">
                @endif
               
                <div class="hover-effect">
                  <div class="inner-content">
                    <a><h4>{{$ea->act_name}}</h4></a>
                    <a href="{{route('guest_view_all')}}" class="btn rounded shadow text-white">View all</a>
                    
                  </div>
                </div>
              </div>
            </div>
                @endif
              @endif
            @endforeach
          @endforeach
           

          </div>
                  
        </div>
        
      </div>
    </div>
  </div>

  

  
  
  

  
  

 

  <footer>
    <div class="container">
      <div class="row">
      
       
        
        <div class="col-lg-12">
          <div class="copyright">
            <p>Copyright © 2023 Greenisenos. All Rights Reserved. 
            <br>
            <!-- Designed by <a rel="nofollow" href="https://templatemo.com" title="free CSS templates">TemplateMo</a></p> -->
          </div>
        </div>
      </div>
    </div>
  </footer>


  <!-- Scripts -->
  <script src="{{asset('custom_style/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('custom_style/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('custom_style/assets/js/owl-carousel.js')}}"></script>
  <script src="{{asset('custom_style/assets/js/animation.js')}}"></script>
  <script src="{{asset('custom_style/assets/js/imagesloaded.js')}}"></script>
  <script src="{{asset('custom_style/assets/js/custom.js')}}"></script>

  <script>
  // Acc
    $(document).on("click", ".naccs .menu div", function() {
      var numberIndex = $(this).index();

      if (!$(this).is("active")) {
          $(".naccs .menu div").removeClass("active");
          $(".naccs ul li").removeClass("active");

          $(this).addClass("active");
          $(".naccs ul").find("li:eq(" + numberIndex + ")").addClass("active");

          var listItemHeight = $(".naccs ul")
            .find("li:eq(" + numberIndex + ")")
            .innerHeight();
          $(".naccs ul").height(listItemHeight + "px");
        }
    });
  </script>
</body>
</html>