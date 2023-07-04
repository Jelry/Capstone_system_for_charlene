
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

<link rel="icon" href="{{ asset('app_logo/main.png') }}" type="image/x-icon">

        <link rel="stylesheet" href="https://unpkg.com/flowbite@1.6.0/dist/flowbite.min.css" />
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />
        <link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap"
  rel="stylesheet" />
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/tw-elements.min.css" />
<script src="https://cdn.tailwindcss.com/3.3.0"></script>
<script>
  tailwind.config = {
    darkMode: "class",
    theme: {
      fontFamily: {
        sans: ["Roboto", "sans-serif"],
        body: ["Roboto", "sans-serif"],
        mono: ["ui-monospace", "monospace"],
      },
    },
    corePlugins: {
      preflight: false,
    },
  };
</script>
        <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"><script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/datepicker.min.js"></script>
        
        
       
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
      
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
            <a href="/" class="logo mt-4">
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
          @foreach($status as $s)
            @foreach($env_acti as $ea)
              @if($ea->id == $s->acti_id)
                @if($s->status=='uncompleted')
                <div class="item">
                <!--
  This component uses @tailwindcss/typography

  yarn add @tailwindcss/typography
  npm install @tailwindcss/typography

  plugins: [require('@tailwindcss/typography')]
-->

<section>
  <div class="relative mx-auto max-w-screen-xl px-4 py-8">
    <div>
      <p class="text-2xl font-normal lg:text-3xl">{{$ea->act_name}}</p>

      <p class="mt-1 text-sm text-gray-500">{{$ea->act_date}}</p>
    </div>

    <div class="grid gap-8 lg:grid-cols-4 lg:items-start">
      <div class="lg:col-span-3">
        <div class="relative mt-4">
         
          <div  id="mappp{{$ea->id}}" class="h-72 w-full rounded-xl object-cover lg:h-[300px]">
          </div>

          <div
            class="absolute bottom-4 left-1/2 inline-flex -translate-x-1/2 items-center rounded-full bg-black/75 px-3 py-1.5 text-white"
          >
          

            <span class="ms-1.5 text-xs">Lat lang</span>
          </div>
        </div>

        <ul class="mt-1 flex gap-1 m-1">
       {{$ea->act_desc}}
        </ul>
      </div>

      <div class="lg:sticky lg:top-0">
        <form class="space-y-4 lg:pt-8">
          <fieldset>
            <legend class="text-lg font-bold">Category</legend>

           {{$ea->act_category}}
          </fieldset>

          <fieldset>
            <legend class="text-lg font-bold">Time</legend>

            <div class="mt-2 flex flex-wrap gap-1">
              <label for="material_cotton" class="cursor-pointer">
                <input
                  type="radio"
                  id="material_cotton"
                  name="material"
                  class="peer sr-only"
                  checked
                />

                <span
                  class="block rounded-full border border-gray-200 px-3 py-1 text-xs peer-checked:bg-gray-100"
                >
                  {{$ea->acti_time}}
                </span>
              </label>

              <label for="material_wool" class="cursor-pointer">
                <input
                  type="radio"
                  id="material_wool"
                  name="material"
                  class="peer sr-only"
                  checked
                />

             
              </label>
            </div>
          </fieldset>

        

          <div>
          
          </div>

          <button
         
            class="w-full rounded bg-red-400 px-6 py-3 text-sm font-bold uppercase tracking-wide text-white"
          >
          <a href="register" class="text-white">  Be a volunteer</a>
          
          </button>
          <div>
           <a href="login" class="text-sm text-center">Log in</a>
        
          </div>
           
        </form>
      </div>

      <div class="lg:col-span-3">
        <div class="prose max-w-none">
          <p>
           
          </p>
        </div>
      </div>
    </div>
  </div>
</section> <br>
                </div>
                <div  class="h-[1px] w-full">

</div>
<input id="actlat{{$ea->id}}" type="hidden" value="{{$ea->lat}}">
<input id="actlang{{$ea->id}}" type="hidden" value="{{$ea->lang}}">
<script>
    var loclat=document.getElementById('actlat{{$ea->id}}').value;
    var loclang=document.getElementById('actlang{{$ea->id}}').value;
    var j = [loclat,loclang];
   var maap = L.map('mappp{{$ea->id}}').setView(j, 13);
   L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
   maxZoom: 19,
   attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    }).addTo(maap);
    var marker = L.marker(j).addTo(maap);
    maap.scrollWheelZoom.disable();
</script>
                @endif
              @endif
            @endforeach
          @endforeach
        


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