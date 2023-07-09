<x-app-layout>
    
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>
    <div class="grid grid-cols-1 md:grid-cols-5">
    <div class="col-span-1">
        

        <aside class="w-64 py-12 lg:pl-8" aria-label="Sidebar">
            <div class="overflow-y-auto py-4 px-3 bg-gray-50 rounded  ">
               <ul class="space-y-2">
                  <li>
                     <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg  hover:bg-gray-100 ">
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
                     <a href="/users" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg  hover:bg-gray-100 ">
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
                     <a
                     href="{{route('activities')}}"
                     class="group flex flex-col justify-between rounded-sm bg-white p-8 shadow-xl transition-shadow hover:shadow-lg"
                   >
                     <div>
                       <h3 class="text-5xl font-bold text-indigo-600">
                      @if($env_act->count()>1000)
                      1000+
                      @else
                      {{$env_act->count()}}
                      @endif
                      </h3>
                       <div class="mt-4 border-t-2 border-indigo-100 pt-2">
                         <p class="text-sm font-medium uppercase tracking-widest text-gray-500">
                           Activities
                         </p>
                       </div>
                     </div>
                   
                     <div class="mt-16 inline-flex items-center text-indigo-600">
                       <p class="text-lg font-medium">View Activities</p>
                   
                       <svg
                         xmlns="http://www.w3.org/2000/svg"
                         class="ml-3 h-6 w-6 transform transition-transform group-hover:translate-x-3"
                         fill="none"
                         viewBox="0 0 24 24"
                         stroke="currentColor"
                       >
                         <path
                           stroke-linecap="round"
                           stroke-linejoin="round"
                           stroke-width="2"
                           d="M17 8l4 4m0 0l-4 4m4-4H3"
                         />
                       </svg>
                     </div>
                   </a>
                   
                    </div>
                    <div>
                     <a
                     href="{{route('activities')}}"
                     class="group flex flex-col justify-between rounded-sm bg-white p-8 shadow-xl transition-shadow hover:shadow-lg"
                   >
                     <div>
                       <h3 class="text-5xl font-bold text-indigo-600"> 
                         @if($status->count()>1000)
                        1000+
                        @else
                        {{$status->count()}}
                        @endif</h3>
                       <div class="mt-4 border-t-2 border-indigo-100 pt-2">
                         <p class="text-sm font-medium uppercase tracking-widest text-gray-500">
                          Completed Activities
                         </p>
                       </div>
                     </div>
                   
                     <div class="mt-16 inline-flex items-center text-indigo-600">
                       <p class="text-lg font-medium">View all activities</p>
                   
                       <svg
                         xmlns="http://www.w3.org/2000/svg"
                         class="ml-3 h-6 w-6 transform transition-transform group-hover:translate-x-3"
                         fill="none"
                         viewBox="0 0 24 24"
                         stroke="currentColor"
                       >
                         <path
                           stroke-linecap="round"
                           stroke-linejoin="round"
                           stroke-width="2"
                           d="M17 8l4 4m0 0l-4 4m4-4H3"
                         />
                       </svg>
                     </div>
                   </a>
                   
                    </div>
                    <div>
                     <a
                     href="/users"
                     class="group flex flex-col justify-between rounded-sm bg-white p-8 shadow-xl transition-shadow hover:shadow-lg"
                   >
                     <div>
                       <h3 class="text-5xl font-bold text-indigo-600">{{$volunteers->count()}}</h3>
                       <div class="mt-4 border-t-2 border-indigo-100 pt-2">
                         <p class="text-sm font-medium uppercase tracking-widest text-gray-500">
                           Volunteers
                         </p>
                       </div>
                     </div>
                   
                     <div class="mt-16 inline-flex items-center text-indigo-600">
                       <p class="text-lg font-medium">View Volunteers</p>
                  
                       <svg
                         xmlns="http://www.w3.org/2000/svg"
                         class="ml-3 h-6 w-6 transform transition-transform group-hover:translate-x-3"
                         fill="none"
                         viewBox="0 0 24 24"
                         stroke="currentColor"
                       >
                         <path
                           stroke-linecap="round"
                           stroke-linejoin="round"
                           stroke-width="2"
                           d="M17 8l4 4m0 0l-4 4m4-4H3"
                         />
                       </svg>
                     </div>
                   </a>
                   
                    </div>
                    
                    
                </div>
                <div class="mx-auto w-full overflow-hidden rounded shadow p-4">
@php
    $counts = array_fill(0, 12, 0); // Initialize an array of 12 elements with 0 count for each month

    foreach ($env_act as $item) {
        $month = Carbon\Carbon::parse($item->created_at)->format('n') - 1;
        $counts[$month]++;
    }
@endphp

<canvas
  data-te-chart="line"
  data-te-dataset-label="Activities created"
  data-te-labels="['January', 'February' , 'March' , 'April' , 'May' , 'June' , 'July', 'August','September','October','November','December']"
  data-te-dataset-data="{{ json_encode($counts) }}"
></canvas>

@php
    $countss = array_fill(0, 12, 0); // Initialize an array of 12 elements with 0 count for each month

    foreach ($status as $item) {
        $month = Carbon\Carbon::parse($item->created_at)->format('n') - 1;
        $countss[$month]++;
    }
@endphp
<br> <br> <br>
<canvas
  data-te-chart="line"
  data-te-dataset-label="Activities completed"
  data-te-labels="['January', 'February' , 'March' , 'April' , 'May' , 'June' , 'July', 'August','September','October','November','December']"
  data-te-dataset-data="{{ json_encode($countss) }}"
></canvas>
</div>
            </div>
        </div>
    </div>
    </div>
</x-app-layout>
