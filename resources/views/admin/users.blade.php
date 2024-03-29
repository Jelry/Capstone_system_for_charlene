<x-app-layout>
    
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center">
            {{ __('Users') }}
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
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 grid grid-cols-1 lg:grid-cols-3 gap-3">
              <div>
              <input type="text" id="searchInput" class="rounded shadow" placeholder="search volunteer">
<a id="filterLink" href="/volunteers/filterBy/name" class="bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-1.5 text-center text-white">Search</a>

<script>
  document.getElementById('filterLink').addEventListener('click', function(event) {
    event.preventDefault(); // Prevent the default behavior of the anchor tag

    var searchValue = document.getElementById('searchInput').value;
    var url = '/volunteers/filterBy/' + encodeURIComponent(searchValue);

    window.location.href = url; // Redirect to the dynamically generated URL
  });
</script>

              </div>    

   <table class="w-full text-sm text-left text-gray-500 col-span-3">
       <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
           <tr>
               <th scope="col" class="px-6 py-3">
                  Volunteer name
               </th>
               <!-- <th scope="col" class="px-6 py-3">
                   Account Created Date
               </th> -->
               <th scope="col" class="px-6 py-3">
                   Email
               </th>
               <th scope="col" class="px-6 py-3">
                   Activities Joined
               </th>
               
           </tr>
       </thead>
       <tbody>
          @foreach($volunteers as $v)
          <tr class="bg-white border-b ">
            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                {{$v->name}}
            </th>
            <!-- <td class="px-6 py-4">
               {{ Carbon\Carbon::parse($v->created_at)->format('Y-m-d') }}
            </td> -->
            <td class="px-6 py-4">
                {{$v->email}}
            </td>
            <td class="px-6 py-4 " data-tooltip-target="tooltip-default{{$v->id}}">
            <div id="tooltip-default{{$v->id}}" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
              
               @foreach($vjoin as $vjoinnn)
               @if($v->id==$vjoinnn->user_id)
                     @foreach($env_acti as $ea)
                        @if($vjoinnn->activity_id==$ea->id)
                        {{$ea->act_name}} <br> <hr class="color-white">
                        @endif
                     @endforeach
               @endif
               @endforeach
               <div class="tooltip-arrow" data-popper-arrow></div>
            </div>
               @php
               $cc=0;
               @endphp
               @foreach($vjoin as $vjoinn)
               @if($v->id==$vjoinn->user_id)
               @php
                $cc++;   
               @endphp
               @endif
               @endforeach
               {{$cc}}
            </td>
           
        </tr>
          @endforeach
          
       </tbody>
   </table>

<div>{{$volunteers->links()}}</div>
                </div>
            </div>
        </div>
    </div>
    </div>
</x-app-layout>
