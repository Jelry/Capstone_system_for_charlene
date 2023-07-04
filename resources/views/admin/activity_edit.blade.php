<x-app-layout>
    
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center">
            {{ __('Edit Activity') }}
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
                        <!-- <span class="inline-flex justify-center items-center px-2 ml-3 text-sm font-medium text-gray-800 bg-gray-200 rounded-full dark:bg-gray-700 dark:text-gray-300">Pro</span> -->
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
                  <li>
                     <a href="{{route('logs')}}" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg  hover:bg-gray-100 ">
                        <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd"></path></svg>
                        <span class="flex-1 ml-3 whitespace-nowrap">Registration Logs</span>
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
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 h-full">
            <div  class="bg-white overflow-hidden shadow-sm sm:rounded-lg h-full p-10">
                <h3 class="mb-4 text-xl font-medium text-gray-900 ">EDIT ENVIRONMENTAL ACTIVITY</h3>
                <form class="space-y-6" method="POST" action="{{ route('update_activity')}}"  >
                    @csrf
               
                      <br>
                       <div>
                           <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">Activity Name</label>
                           <input type="text" name="activity_name" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " value="{{$env_act->act_name}}" required>
                       </div>
                       <div>
                          <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">Activity Date(start to end of event)</label>
                          
                          <div class="relative max-w-sm">
                        @php
                        $string = '2023-05-16 to 2023-05-16';
                        $parts = explode(' to ', $string);

                        if (count($parts) === 2) {
                        $date1 = $parts[0];
                        $date2 = $parts[1];
                           }
 
                        @endphp
                           <input type="date" name="activity_date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5" placeholder="Select activity date" required value="{{$date1}}">
                           to
                           <input type="date" name="activity_date_end" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5" placeholder="Select activity date" value="{{$date2}}" required>
                         </div>
                         <div class="relative max-w-sm">
                         <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">Activity Time</label>
                           <input type="time" name="activity_time" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5" placeholder="Select activity time" required value="{{$env_act->acti_time}}">
                         </div>
                         
                      </div>
                      <div>
                       <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">Activity Category</label>
                       {{-- <input type="" name="activity_date" id="email" > --}}
                       <select name="activity_category" id="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " required>
                          <option value="{{$env_act->act_category}}">Current: {{$env_act->act_category}}</option>
                          @foreach($env_cat as $ec)
                          <option value="{{$ec->category_name}}">{{$ec->category_name}}</option>
                          @endforeach
                       </select>
                      <input type="hidden" name="act_category_default" value="{{$env_act->act_category}}">
                      <input type="hidden" name="act_id" value="{{$env_act->id}}">
                      
                   </div>
                   <div>
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">Activity Description</label>
                    <input type="text" name="activity_description" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " value="{{$env_act->act_desc}}" required>
                    </div>
                    <!-- <div class="max-w-sm">
                           <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">Activity Photo (optional)</label>
                           <img src="#" alt="Selected Image" id="previewImage" style="display: none; max-width: 200px; max-height: 200px;">
                          <p>Current: {{$env_act->photo}}</p>
                          <input type="hidden" name="current_image" value="{{$env_act->photo}}">
                           <input type="file" name="image" accept="image/*" id="imageInput" class="mt-4">
                           <script>
    // Get references to the input and image elements
    const imageInput = document.getElementById('imageInput');
    const previewImage = document.getElementById('previewImage');

    // Listen for changes in the input field
    imageInput.addEventListener('change', function() {
        // Get the selected file
        const file = imageInput.files[0];

        // Check if a file is selected
        if (file) {
            // Create a FileReader object
            const reader = new FileReader();

            // Set the image source when the file has been read
            reader.onload = function() {
                previewImage.src = reader.result;
                previewImage.style.display = 'block';
            }

            // Read the file as a data URL
            reader.readAsDataURL(file);
        } else {
            // No file selected, hide the preview image
            previewImage.src = '#';
            previewImage.style.display = 'none';
        }
    });
</script>
                       </div> -->
                    <div><br></div>
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">Activity Exact Location (Current) <strong class="text-teal-600 cursor-pointer" onclick="loc_change()">change</strong> </label>
                    Latitude:
                    <input id="actlat" type="text" name="lat" value="{{$env_act->lat}}" class="border-none" required>
                    Longitude:
                <input id="actlang" type="text" name="lang" value="{{$env_act->lang}}" class="border-none" required>
                
                <div id="mapp" class="h-[500px] w-full">
                  
                </div>
             
              
                {{-- <input id="actloc" type="text" name="latlang" value="{{$t}}"> --}}
               
                {{-- <a href="" id="testhere"></a> --}}
                <script>
                    var loclat=document.getElementById('actlat').value;
                    var loclang=document.getElementById('actlang').value;
                 
                     if(loclat&&loclang){
                        var j = [loclat,loclang];
                     }
                     else
                     {
                        var j = [6.7480,125.3557];
                     }
                   
                    
                    const mapp = L.map('mapp').setView(j, 14);
        
                    const tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    maxZoom: 19,
                    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
                    }).addTo(mapp);
                    
                    var marker = L.marker(j).addTo(mapp);
                    mapp.scrollWheelZoom.disable();

                   
function loc_change() {
   var popupp = L.popup();

function onMapClickk(e) {
    popupp
        .setLatLng(e.latlng)
        .setContent("New Map Location at " + e.latlng.toString())
        .openOn(mapp);
        document.getElementById('actlat').value=e.latlng.lat.toString();
        document.getElementById('actlang').value=e.latlng.lng.toString();
}

mapp.on('click', onMapClickk);

        document.getElementById('actlat').style="border: solid 1px red";
        document.getElementById('actlang').style="border: solid 1px red";
}
                  </script>
                   <br>
                       <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update Activity</button>
                     
                   </form>
            </div>
        </div>
    </div>
    </div>
</x-app-layout>
