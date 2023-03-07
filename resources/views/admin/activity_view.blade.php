<x-app-layout>
    
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center">
            {{ __('View Activity Details') }}
        </h2>
    </x-slot>
    <div class="grid grid-cols-1 lg:grid-cols-5">
    <div class="col-span-1">
        

        <aside class="w-64 py-12 lg:pl-8" aria-label="Sidebar">
            <div class="overflow-y-auto py-4 px-3 bg-gray-50 rounded  ">
               <ul class="space-y-2">
                  <li>
                     <a href="{{route ('admin')}}" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg  hover:bg-gray-100 ">
                        <svg aria-hidden="true" class="w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path><path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path></svg>
                        <span class="ml-3">Dashboard</span>
                     </a>
                  </li>
                  <li>
                     <a href="{{ route('activities')}}" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg  hover:bg-gray-100 ">
                        <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>
                        <span class="flex-1 ml-3 whitespace-nowrap">Activities</span>
                        <span class="inline-flex justify-center items-center px-2 ml-3 text-sm font-medium text-gray-800 bg-gray-200 rounded-full dark:bg-gray-700 dark:text-gray-300">Pro</span>
                     </a>
                  </li>
                  <li>
                    <a href="{{route('category.index')}}" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg  hover:bg-gray-100 ">
                       <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5 4a3 3 0 00-3 3v6a3 3 0 003 3h10a3 3 0 003-3V7a3 3 0 00-3-3H5zm-1 9v-1h5v2H5a1 1 0 01-1-1zm7 1h4a1 1 0 001-1v-1h-5v2zm0-4h5V8h-5v2zM9 8H4v2h5V8z" clip-rule="evenodd"></path></svg>
                       <span class="flex-1 ml-3 whitespace-nowrap">Categories</span>
                    </a>
                 </li>
                  <!-- <li>
                     <a href="{{route('inbox')}}" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg  hover:bg-gray-100 ">
                        <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M8.707 7.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l2-2a1 1 0 00-1.414-1.414L11 7.586V3a1 1 0 10-2 0v4.586l-.293-.293z"></path><path d="M3 5a2 2 0 012-2h1a1 1 0 010 2H5v7h2l1 2h4l1-2h2V5h-1a1 1 0 110-2h1a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V5z"></path></svg>
                        <span class="flex-1 ml-3 whitespace-nowrap">Inbox</span>
                        <span class="inline-flex justify-center items-center p-3 ml-3 w-3 h-3 text-sm font-medium text-blue-600 bg-blue-200 rounded-full dark:bg-blue-900 dark:text-blue-200">3</span>
                     </a>
                  </li> -->
                  <li>
                     <a href="{{route('users')}}" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg  hover:bg-gray-100 ">
                        <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path></svg>
                        <span class="flex-1 ml-3 whitespace-nowrap">Volunteers</span>
                     </a>
                  </li>
                  <!-- <li>
                     <a href="{{route('logs')}}" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg  hover:bg-gray-100 ">
                        <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd"></path></svg>
                        <span class="flex-1 ml-3 whitespace-nowrap">Logs</span>
                     </a>
                  </li> -->
                  <li>
                     <form method="POST" action="{{ route('logout') }}" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg  hover:bg-gray-100 ">
                        @csrf
                        <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z" clip-rule="evenodd"></path></svg>
                      
                        <x-dropdown-link :href="route('logout')"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-dropdown-link>
                    </form>
                  </li>
                
               </ul>
            </div>
         </aside>
         
 
    </div>
    <div class="py-12 col-span-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 grid grid-cols-1 lg:grid-cols-3 gap-3">
                   
                    <div class="col-span-3">
                        <!--
  This component uses @tailwindcss/forms and @tailwindcss/typography

  yarn add @tailwindcss/forms @tailwindcss/typography
  npm install @tailwindcss/forms @tailwindcss/typography

  plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')]

  @layer components {
    .no-spinner {
      -moz-appearance: textfield;
    }

    .no-spinner::-webkit-outer-spin-button,
    .no-spinner::-webkit-inner-spin-button {
      margin: 0;
      -webkit-appearance: none;
    }
  }
-->

<section>
    <div class="relative max-w-screen-xl px-4 py-8 mx-auto">
      <div class="grid items-start grid-cols-1 gap-8 md:grid-cols-2">
        <div class="grid grid-cols-1 gap-4 md:grid-cols-1">
            <div id="mappp" class="h-[300px] w-full">

            </div>
            <div class="flex">Latitude: {{$env_act->lat}}</div>
            <div class="flex">Longitude: {{$env_act->lang}}</div>
            <input id="actlat" type="hidden" value="{{$env_act->lat}}">
            <input id="actlang" type="hidden" value="{{$env_act->lang}}">
            <script>
                var loclat=document.getElementById('actlat').value;
                var loclang=document.getElementById('actlang').value;
                var j = [loclat,loclang];
               var maap = L.map('mappp').setView(j, 13);
               L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
               maxZoom: 19,
               attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
                }).addTo(maap);
                var marker = L.marker(j).addTo(maap);
                maap.scrollWheelZoom.disable();
            </script>
            {{-- <img
            alt="Les Paul"
            src="https://images.unsplash.com/photo-1456948927036-ad533e53865c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
            class="object-cover w-full aspect-square rounded-xl"
          /> --}}
  
          {{-- <div class="grid grid-cols-2 gap-4 lg:mt-4">
            <img
              alt="Les Paul"
              src="https://images.unsplash.com/photo-1456948927036-ad533e53865c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
              class="object-cover w-full aspect-square rounded-xl"
            />
  
            <img
              alt="Les Paul"
              src="https://images.unsplash.com/photo-1456948927036-ad533e53865c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
              class="object-cover w-full aspect-square rounded-xl"
            />
  
            <img
              alt="Les Paul"
              src="https://images.unsplash.com/photo-1456948927036-ad533e53865c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
              class="object-cover w-full aspect-square rounded-xl"
            />
  
            <img
              alt="Les Paul"
              src="https://images.unsplash.com/photo-1456948927036-ad533e53865c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
              class="object-cover w-full aspect-square rounded-xl"
            />
          </div> --}}
        </div>
  
        <div class="sticky top-0">
          <strong
            class="rounded-full border border-blue-600 bg-gray-100 px-3 py-0.5 text-xs font-medium tracking-wide text-blue-600"
          >
           Published on: {{ Carbon\Carbon::parse($env_act->created_at)->format('Y-m-d') }}
          </strong>
  
          <div class="flex justify-between mt-8">
            <div class="max-w-[35ch]">
              <h1 class="text-2xl font-bold">
                {{$env_act->act_name}}
              </h1>
  
              <p class="mt-0.5 text-sm">Date of Activity: {{$env_act->act_date}}</p>
  
              <div class="mt-2 -ml-0.5 flex">
                <svg
                  class="w-5 h-5 text-yellow-400"
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 20 20"
                  fill="currentColor"
                >
                  <path
                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                  />
                </svg>
  
                <svg
                  class="w-5 h-5 text-yellow-400"
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 20 20"
                  fill="currentColor"
                >
                  <path
                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                  />
                </svg>
  
                <svg
                  class="w-5 h-5 text-yellow-400"
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 20 20"
                  fill="currentColor"
                >
                  <path
                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                  />
                </svg>
  
                <svg
                  class="w-5 h-5 text-yellow-400"
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 20 20"
                  fill="currentColor"
                >
                  <path
                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                  />
                </svg>
  
                <svg
                  class="w-5 h-5 text-gray-200"
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 20 20"
                  fill="currentColor"
                >
                  <path
                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                  />
                </svg>
              </div>
            </div>
  
            <p class="text-sm text-green-500 cursor-pointer">
              <form action="/activity_edit/{{$env_act->id}}" method="post" class="p-0 m-0 text-blue-700">
                @csrf
              <button type="submit">edit</button>
              </form>
            </p>
          </div>
  
          <details
            class="group relative mt-4 [&_summary::-webkit-details-marker]:hidden"
          >
            <summary class="block">
              <div>
                <div class="prose max-w-none group-open:hidden">
                  <p>
                    {{-- Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa
                    veniam dicta beatae eos ex error culpa delectus rem tenetur,
                    architecto quam nesciunt, dolor veritatis nisi minus
                    inventore, rerum at recusandae? --}}
                    {{$env_act->act_desc}}
                  </p>
                </div>
  
                <span
                  class="mt-4 text-sm font-medium underline cursor-pointer group-open:absolute group-open:bottom-0 group-open:left-0 group-open:mt-0"
                >
                
                </span>
              </div>
            </summary>
  
            <div class="pb-6 prose max-w-none">
              {{-- <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa
                veniam dicta beatae eos ex error culpa delectus rem tenetur,
                architecto quam nesciunt, dolor veritatis nisi minus inventore,
                rerum at recusandae?
              </p>
  
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat
                nam sapiente nobis ea veritatis error consequatur nisi
                exercitationem iure laudantium culpa, animi temporibus non! Maxime
                et quisquam amet. A, deserunt!
              </p> --}}
              {{$env_act->act_desc}}
            </div>
          </details>
  
          <form class="mt-8">
            <fieldset>
              <legend class="mb-1 text-sm font-medium">Category:</legend>
  
              <div class="flow-root">
                <div class="-m-0.5 flex flex-wrap">
                  <label for="color_tt" class="cursor-pointer p-0.5">
                    <input
                      type="radio"
                      name="color"
                      id="color_tt"
                      class="sr-only peer"
                    />
  
                    <span
                      class="inline-block px-3 py-1 text-xs font-medium border rounded-full group peer-checked:bg-black peer-checked:text-white bg-black text-white"
                    >
                    {{$env_act->act_category}}
                    </span>
                  </label>
  
                
  
                 
                </div>
              </div>
            </fieldset>
  
            <fieldset class="mt-4">
              <legend class="mb-1 text-sm font-medium">Volunteers:</legend>
  
              <div class="flow-root">
                <div class="-m-0.5 flex flex-wrap">
                  <label for="size_xs" class="cursor-pointer p-0.5">
                    <input
                      type="radio"
                      name="size"
                      id="size_xs"
                      class="sr-only peer"
                    />
  
                    <span
                      class="inline-flex items-center justify-center w-8 h-8 text-xs font-medium border rounded-full group peer-checked:bg-black peer-checked:text-white bg-black text-white"
                    >
                    @php
                    $v_count=0;   
                   @endphp
                   @foreach ($volunteers as $v)
                   @if($v->activity_id==$id)
                   @php
                   $v_count++;
                   @endphp
                   @endif
                   @endforeach
                   {{$v_count}}
                    </span>
                  </label>
  
                 
  
                
  
                
  
                 
                </div>
              </div>
            </fieldset>
  
            <div class="flex mt-8">
              <div>
                <label for="quantity" class="sr-only">Qty</label>
  
                {{-- <input
                  type="number"
                  id="quantity"
                  min="1"
                  value="1"
                  class="w-12 rounded border-gray-200 py-3 text-center text-xs [-moz-appearance:_textfield] [&::-webkit-outer-spin-button]:m-0 [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:m-0 [&::-webkit-inner-spin-button]:appearance-none"
                /> --}}
              </div>
  
              {{-- <button
                type="submit"
                class="block px-5 py-3 ml-3 text-xs font-medium text-white bg-green-600 rounded hover:bg-green-500"
              >
                Add to Cart
              </button> --}}
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <div class="bg-green-600 text-center rounded shadow text-white p-2">
  <h1>Joined as individual</h1>
  </div>
  <table class="w-full text-sm text-left text-gray-500 col-span-3">
    <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
        <tr>
            <th scope="col" class="px-6 py-3">
               Volunteer name
            </th>
            <th scope="col" class="px-6 py-3">
                Date Joined
            </th>
            <th scope="col" class="px-6 py-3">
                Email
            </th>
            <th scope="col" class="px-6 py-3">
                Number
            </th>
            
        </tr>
    </thead>
    <tbody>
    
     @foreach($volunteers as $vv)
     @if($vv->type_of_volunteer=="individual")
    
       <tr class="bg-white border-b ">
         <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
            @foreach($volunteer_names as $vn)
            @if($vv->user_id==$vn->id)
            {{$vn->name}}
            @endif
            @endforeach
         </th>
         <td class="px-6 py-4">
          {{ Carbon\Carbon::parse($vv->created_at)->format('Y-m-d') }}
         </td>
         <td class="px-6 py-4">
          {{$vv->email}}
         </td>
         <td class="px-6 py-4">
          {{$vv->phone_number}}
         </td>
        
     </tr>
     @endif
     @endforeach
   
       
    </tbody>
</table>
<div class="bg-green-600 text-center rounded shadow text-white p-2">
<h1>Joined as Organization</h1>
  </div>
  <table class="w-full text-sm text-left text-gray-500 col-span-3">
    <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
        <tr>
          <th scope="col" class="px-6 py-3">
            Organization
         </th>
            <th scope="col" class="px-6 py-3">
               Point person
            </th>
            <th scope="col" class="px-6 py-3">
               Point person number
            </th>
            <th scope="col" class="px-6 py-3">
               Point person email
            </th>
            <th scope="col" class="px-6 py-3">
                Participants
            </th>
            
        </tr>
    </thead>
    <tbody>
     
      @foreach($volunteers as $vvv)
      @if($vvv->type_of_volunteer=="organization")
     
        <tr class="bg-white border-b ">
          <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
            {{$vvv->org_name}} 
          </th>
          <td class="px-6 py-4">
            @foreach($volunteer_names as $vnn)
            @if($vvv->user_id==$vnn->id)
            {{$vnn->name}}
            @endif
            @endforeach
           </td>
          <td class="px-6 py-4">
            {{$vvv->point_person_phone_number}}
          
          </td>
          <td class="px-6 py-4">
           {{$vvv->point_person_email}}
          </td>
          <td class="px-6 py-4">
           {{$vvv->participants}}
          </td>
         
      </tr>
      @endif
      @endforeach
     
       
    </tbody>
</table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</x-app-layout>
