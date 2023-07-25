@php
 use Illuminate\Support\Facades\Auth;   
@endphp
<x-app-layout>
    <x-slot name="header">
      
        @if(session()->has('message'))
        <div class="text-center bg-green-600 text-white p-6 rounded shadow">
        <div class="">
            {{ session()->get('message') }}
        </div>
        </div>
         @endif
      
        <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center">
            {{ __('Activity Details') }} <br> <hr> <br>
        </h2>
        <div class="grid grid-cols-1 lg:grid-cols-2">
          <div>
            Name: {{$env_act->act_name}} <br>
            Description: 
            <p class="truncate">{{$env_act->act_desc}}</p>
          </div>
          <div> 
            Published:  {{ Carbon\Carbon::parse($env_act->created_at)->format('Y-m-d') }} <br>
            Activity Date: {{$env_act->act_date}} <br>
            Activity Time: {{$env_act->acti_time}} <br>
            Volunteers:   @php
            $v_count=0;   
           @endphp
           @foreach ($volunteers as $v)
           @if($v->activity_id==$env_act->id)
           @php
           $v_count++;
           @endphp
           @endif
           @endforeach
           {{$v_count}}
          </div>
        </div>
        
    </x-slot>

    <div class="py-12">
        <div class="p-6 text-gray-900 grid grid-cols-1 lg:grid-cols-5 gap-3">
              
        <div class="col-span-5">
         <!--
  This component uses @tailwindcss/forms

  yarn add @tailwindcss/forms
  npm install @tailwindcss/forms

  plugins: [require('@tailwindcss/forms')]
-->

<section class="bg-white rounded shadow">
    <div class="lg:grid lg:min-h-screen lg:grid-cols-12">
      <section
        class="relative flex h-32 items-end bg-gray-900 lg:col-span-5 lg:h-full xl:col-span-6"
      >
        {{-- <img
          alt="Night"
         
          class="absolute inset-0 h-full w-full object-cover opacity-80"
        /> --}}
        <div  id="mappp" class="absolute inset-0 h-full w-full object-cover opacity-80">

        </div>
        <div class="hidden lg:relative lg:block lg:p-12">
          <a class="block text-white" >
            <span class="sr-only">Home</span>
           
          </a>
  
          <h2 class="mt-6 text-2xl font-bold text-grey-700 sm:text-3xl md:text-4xl">
           {{$env_act->act_name}}
          </h2>
  
          <p class="mt-4 leading-relaxed text-grey-700">
            {{$env_act->act_desc}}
          </p>
        </div>
      </section>
      <input id="actlat" type="hidden" value="{{$env_act->lat}}">
      <input id="actlang" type="hidden" value="{{$env_act->lang}}">
      <script>
        var loclat=document.getElementById('actlat').value;
        var loclang=document.getElementById('actlang').value;
        var j = [loclat,loclang];
       var maap = L.map('mappp').setView(j, 15);
       L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
       maxZoom: 19,
       attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        }).addTo(maap);
        var marker = L.marker(j).addTo(maap);
        maap.scrollWheelZoom.disable();
    </script>
      <main
        aria-label="Main"
        class="flex items-center justify-center align-center px-8 py-8 sm:px-12 lg:col-span-7 lg:py-12 lg:px-16 xl:col-span-6 "
      >
      @if(!empty($status))
      @if($status->status=='completed'||empty($status))
      
      <div>
        This event is closed
          @foreach($completed_event_photo as $cep)
        @php 
        $xxx='';
        $xxx=$cep->photo;
        $xxxtwo= substr($xxx, 0, 2);
        @endphp
        @if($xxxtwo==$env_act->id)
        <div>
            <img src="{{ asset('completed_event/photos/'.$cep->photo) }}" >
        </div>
        @endif
        @endforeach
<div id="gallery" class="relative w-full" data-carousel="slide">
    <!-- Carousel wrapper -->
    <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
         <!-- Item 1 -->
          
        <!-- Item 2 -->
     
      
      
    </div>
    <!-- Slider controls -->
    <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg aria-hidden="true" class="w-6 h-6 text-white dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
            <span class="sr-only">Previous</span>
        </span>
    </button>
    <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg aria-hidden="true" class="w-6 h-6 text-white dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            <span class="sr-only">Next</span>
        </span>
    </button>
</div>

       
        <img src="{{asset('app_logo/main2.jpg')}}" alt="" width="100%" height="2px;">
      </div>
      @else
      <div class="max-w-xl lg:max-w-3xl">
          <div class="relative -mt-16 block lg:hidden">
            <a
              class="inline-flex h-16 w-16 items-center justify-center rounded-full  text-blue-600 sm:h-20 sm:w-20"
              
            >
        
            
            </a>
           
            <h1
              class="mt-2 text-2xl font-bold text-gray-900 sm:text-3xl md:text-4xl"
            >
             {{$env_act->act_name}}
            </h1>
  
            <p class="mt-4 leading-relaxed text-gray-500">
             {{$env_act->act_desc}}
            </p>
            <div>
              
            </div>
          </div>
          <hr> <br>
          <form action="{{route('join.store')}}" method="post" class="mt-8 grid grid-cols-6 gap-6">
            @csrf
            <input type="hidden" name="activity_id" value="{{$env_act->id}}">
            <input type="hidden" name="activity_name" value="{{$env_act->act_name}}">
            <input type="hidden" name="activity_date" value="{{$env_act->act_date}}">
            {{-- different table ma insert ang individual nga volunteer 
            and org nga volunteer so pag if else jd bro inig mag insert naka
           --}}
            
            <div class="col-span-6">
              <strong class="text-red-500">
              @if($errors->any())
              {{ implode('', $errors->all(':message')) }}
              @endif
              </strong>
               <br>
              Volunteer as: 
             <select name="type_of_volunteer" id="volunteer_as" class="text-white bg-green-800 hover:bg-green-900 focus:ring-1 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center ml-4" onchange="display_org_names_input()" required>
               <option value=""></option>
               <option value="individual" > Individual</option>
               <option value="organization"> Organization</option>
             </select>
             <div id="show_if_org" style="display:none;">
              <h1 class="mt-5">Name of group or organization</h1>
              <input type="text" id="org_name" name="org_name" class="rounded outline-0 w-full border-gray-200" required placeholder="organization name - type of organization">
              <br> <br>
              <h1>Name of participants</h1>
              <br>
              <p> <strong class="text-red-500">*</strong>Please separate the names using 
                <kbd class="px-2 py-1.5 text-xs font-semibold text-gray-800 bg-gray-100 border border-gray-200 rounded-lg dark:bg-gray-600 dark:text-gray-100 dark:border-gray-500">Enter</kbd></p>
                
             <textarea name="participants" id="org_participants_names" cols="30" rows="3" class="mt-4 rounded w-full border-gray-200" required></textarea>
             <br><br>
             <h1>Point person phone number (Enter your number if you are the point person)</h1>
             <br>
             <input
                type="text"
                id="point_person_phone_number"
                name="point_person_phone_number"
                class="mt-1 w-full rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm"
                required
                style="appearance: none; -moz-appearance: textfield;"
              />
              <script>
                // Get the input field element
const inputField = document.getElementById('point_person_phone_number');

// Add an input event listener to the input field
inputField.addEventListener('input', function(event) {
  // Get the current input value
  const inputValue = event.target.value;

  // Remove any non-numeric characters from the input
  const numericValue = inputValue.replace(/[^0-9]/g, '');

  // Update the input field value to allow only numbers
  event.target.value = numericValue;
});

              </script>
              <script>
                $("#point_person_phone_number").on("input", function() {
    if (/^0/.test(this.value)) {
      this.value = this.value.replace(/^0/, "")
    }
  })
              </script>
              <br><br>
             
              <br>
              <input
                 type="email"
                 id="point_person_email"
                 name="point_person_email"
                 class="mt-1 w-full rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm opacity-0"
                 required
                 value="{{$user_email}}"
               />
             </div>
             <script>
               function display_org_names_input()
               {
                document.getElementById('show_if_org').style.display = 'block';
                 var i=document.getElementById('volunteer_as').value;
                 if(i=="individual")
                 {
                  document.getElementById('show_if_org').style.display = 'none';
                  document.getElementById('indi_1').style.display = 'block';
                  document.getElementById('indi_2').style.display = 'block';

                  document. getElementById('org_name'). required = false;
                  document. getElementById('org_participants_names'). required = false;
                  document. getElementById('point_person_phone_number'). required = false;
                  document. getElementById('point_person_email'). required = false;

                  document. getElementById('Phone_number'). required = true;
                  document. getElementById('email'). required = true;
                 }
                 else{
                  document.getElementById('indi_1').style.display = 'none';
                  document.getElementById('indi_2').style.display = 'none';

                  document. getElementById('org_name'). required = true;
                  document. getElementById('org_participants_names'). required = true;
                  document. getElementById('point_person_phone_number'). required = true;
                  document. getElementById('point_person_email'). required = true;

                  document. getElementById('Phone_number'). required = false;
                  document. getElementById('email'). required = false;
                 }
               }
             </script>
              
            </div>
            <div class="col-span-6 sm:col-span-3" id="indi_1">
              
              <label
                for="FirstName"
                class="block text-sm font-medium text-gray-700"
              >
                Phone Number
              </label>
  
              <input
                type="text"
                id="Phone_number"
                name="phone_number"
                class="mt-1 w-full rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm"
                required
                placeholder=""
                style="appearance: textfield; -moz-appearance: textfield; -webkit-appearance: none;"
              />
              <script>
                // Get the input field element
const inputField = document.getElementById('Phone_number');

// Add an input event listener to the input field
inputField.addEventListener('input', function(event) {
  // Get the current input value
  const inputValue = event.target.value;

  // Remove any non-numeric characters from the input
  const numericValue = inputValue.replace(/[^0-9]/g, '');

  // Update the input field value to allow only numbers
  event.target.value = numericValue;
});

              </script>
            <script>
              $("#Phone_number").on("input", function() {
  if (/^0/.test(this.value)) {
    this.value = this.value.replace(/^0/, "")
  }
})
            </script>
            </div>
  
            <div class="col-span-6 sm:col-span-3" id="indi_2">
             
              <input
                type="email"
                id="email"
                name="email"
                class="mt-1 w-full rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm opacity-0"
                required
                value="{{$user_email}}"
              />
            </div>
  
            {{-- <div class="col-span-6">
              <label for="Email" class="block text-sm font-medium text-gray-700">
                Email
              </label>
  
              <input
                type="email"
                id="Email"
                name="email"
                class="mt-1 w-full rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm"
              />
            </div> --}}
  
            {{-- <div class="col-span-6 sm:col-span-3">
              <label
                for="Password"
                class="block text-sm font-medium text-gray-700"
              >
                Password
              </label>
  
              <input
                type="password"
                id="Password"
                name="password"
                class="mt-1 w-full rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm"
              />
            </div> --}}
  
            {{-- <div class="col-span-6 sm:col-span-3">
              <label
                for="PasswordConfirmation"
                class="block text-sm font-medium text-gray-700"
              >
                Password Confirmation
              </label>
  
              <input
                type="password"
                id="PasswordConfirmation"
                name="password_confirmation"
                class="mt-1 w-full rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm"
              />
            </div> --}}
  
            <div class="col-span-6">
              {{-- <label for="MarketingAccept" class="flex gap-4">
                <input
                  type="checkbox"
                  id="MarketingAccept"
                  name="marketing_accept"
                  class="h-5 w-5 rounded-md border-gray-200 bg-white shadow-sm"
                />
  
                <span class="text-sm text-gray-700">
                  I want to receive emails about events, product updates and
                  company announcements.
                </span>
              </label> --}}
            </div>
  
            {{-- <div class="col-span-6">
              <p class="text-sm text-gray-500">
                By creating an account, you agree to our
                <a href="#" class="text-gray-700 underline">
                  terms and conditions
                </a>
                and
                <a href="#" class="text-gray-700 underline">privacy policy</a>.
              </p>
            </div> --}}
  
            <div class="col-span-6 sm:flex sm:items-center sm:gap-4">
              <button
                id="join_if_not_joined"
                class="inline-block shrink-0 rounded-md border border-blue-600 bg-blue-600 px-12 py-3 text-sm font-medium text-white transition hover:bg-transparent hover:text-blue-600 focus:outline-none focus:ring active:text-blue-500"
              >
                Book this event
              </button>
             @foreach($joined as $join)
             @if($join->activity_id==$id)
             You already Joined this event 
            <a href="/join/cancel/{{$join->id}}" style="color:blue;">cancel</a>
             <script>
               document.getElementById('join_if_not_joined').style.display="none";
             </script>
             @break
             @endif
             @endforeach
              {{-- <p class="mt-4 text-sm text-gray-500 sm:mt-0">
                Already have an account?
                <a href="#" class="text-gray-700 underline">Log in</a>. --}}
              </p>
            </div>
          </form>
        </div>
      @endif
       @endif
       
      </main>
    </div>
  </section>
  

        </div>
      
    </div>
    </div>
   

</x-app-layout>
