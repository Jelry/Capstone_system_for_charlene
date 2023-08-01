<x-app-layout>
    
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center">
            {{ __('Environmental Activities') }}
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
                    
                     <div class="flex mb-4 justify-between">
                     <a href="{{route('activity_add')}}" type="button"  class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-1.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add</a>
                       <div>
                      
                        Filter by
                        <select name="filter" id="filter" class="rounded focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-1.5 text-left" required  >
  <option value=""></option>
  <option value="name">Name</option>
  <option value="category">Category</option>
  <option value="status">Status</option>
</select>
<script>
      // Function to show/hide select tags based on the selected option
      function toggleSelectVisibility() {
       
    }

    // Call the function on page load (in case the initial option is already "status")
    toggleSelectVisibility();
</script>
<select id="statusSelecttt" style="display: none;" class="rounded focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-1.5 text-center">
    <option value="Open for registration">Open for registration</option>
    <option value="completed">Completed</option>
    <option value="cancelled">Cancelled</option>
</select>
<select name="sort" id="sort" class="rounded focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-1.5 text-center">
  <option value="desc">Descending</option>
  <option value="asc">Ascending</option>
</select>

<a id="filterLink" href="/activities/filterBy/name" class="bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-1.5 text-center text-white">Sort</a>
<a id="filterLink2" href="/activities/filterBy/name" class="bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-1.5 text-center text-white hidden">Sorrt</a>
<script>
  const selectElement = document.getElementById('filter');
  const sortElement = document.getElementById('sort');
  const linkElement = document.getElementById('filterLink');
  const sortElement2 = document.getElementById('statusSelecttt');
  const linkElement2 = document.getElementById('filterLink2');

  selectElement.addEventListener('change', function() {
    updateHref();
     // Get references to both select tags
   
      
       
        const filterLinkSelect = document.getElementById('filterLink');
        const filterLink2Select = document.getElementById('filterLink2');

        // Get the selected option value
        const selectedOption = selectElement.value;

        // Show/hide the statusSelect based on the selected option
        if (selectedOption === 'status') {
          sortElement2.style.display = 'inline-block';
            sortElement.style.display = 'none';
            filterLinkSelect.style.display = 'none';
            filterLink2Select.style.display = 'inline-block';
        } else {
          sortElement2.style.display = 'none';
            sortElement.style.display = 'inline-block';
            filterLinkSelect.style.display = 'inline-block';
            filterLink2Select.style.display = 'none';
        }
  });

  sortElement.addEventListener('change', function() {
    updateHref();
  });
  sortElement2.addEventListener('change', function() {
    updateHref();
  });

  function updateHref() {
    const selectedValue = selectElement.value;
    const sortValue = sortElement.value;
    const newHref = `/activities/filterBy/${selectedValue}/${sortValue}`;
    linkElement.setAttribute('href', newHref);
    const sortValue2 = sortElement2.value;
    const newHref2 = `/activities/filterBy/${selectedValue}/${sortValue2}`;
    linkElement2.setAttribute('href', newHref2);
  }
</script>







                  
                       
                       </div>
                     </div>
<div class="overflow-hidden overflow-x-auto rounded-lg border border-gray-200">
   <table class="min-w-full divide-y divide-gray-200 text-sm">
     <thead class="bg-gray-100">
       <tr>
         {{-- <th class="sticky inset-y-0 left-0 bg-gray-100 px-4 py-2 text-left">
           <label class="sr-only" for="SelectAll">Select All</label>
 
           <input
             class="h-5 w-5 rounded border-gray-200"
             type="checkbox"
             id="SelectAll"
           />
         </th> --}}
         <th
           class="whitespace-nowrap px-4 py-2 text-left font-medium text-gray-900"
         >
           <div class="flex items-center gap-2">
             Date
 
             {{-- <svg
               xmlns="http://www.w3.org/2000/svg"
               class="h-4 w-4 text-gray-700"
               viewBox="0 0 20 20"
               fill="currentColor"
             >
               <path
                 fill-rule="evenodd"
                 d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                 clip-rule="evenodd"
               />
             </svg> --}}
           </div>
         </th>
         <th
           class="whitespace-nowrap px-4 py-2 text-left font-medium text-gray-900"
         >
           <div class="flex items-center gap-2">
             Time
 
             {{-- <svg
               xmlns="http://www.w3.org/2000/svg"
               class="h-4 w-4 text-gray-700"
               viewBox="0 0 20 20"
               fill="currentColor"
             >
               <path
                 fill-rule="evenodd"
                 d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                 clip-rule="evenodd"
               />
             </svg> --}}
           </div>
         </th>
         <th
           class=" px-4 py-2 text-left font-medium text-gray-900"
         >
           <div class="flex items-center gap-2">
             Activity Name
 
             {{-- <svg
               xmlns="http://www.w3.org/2000/svg"
               class="h-4 w-4 text-gray-700"
               viewBox="0 0 20 20"
               fill="currentColor"
             >
               <path
                 fill-rule="evenodd"
                 d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                 clip-rule="evenodd"
               />
             </svg> --}}
           </div>
         </th>
         <th
           class=" px-4 py-2 text-left font-medium text-gray-900"
         >
           <div class="flex items-center gap-2">
            Status
 
   
           </div>
         </th>
         <th
           class="whitespace-nowrap px-4 py-2 text-left font-medium text-gray-900"
         >
           <div class="flex items-center gap-2">
             Volunteers
 
             {{-- <svg
               xmlns="http://www.w3.org/2000/svg"
               class="h-4 w-4 text-gray-700"
               viewBox="0 0 20 20"
               fill="currentColor"
             >
               <path
                 fill-rule="evenodd"
                 d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                 clip-rule="evenodd"
               />
             </svg> --}}
           </div>
         </th>
         <th
           class="whitespace-nowrap px-4 py-2 text-left font-medium text-gray-900"
         >
           <div class="flex items-center gap-2">
             Description
 
             {{-- <svg
               xmlns="http://www.w3.org/2000/svg"
               class="h-4 w-4 text-gray-700"
               viewBox="0 0 20 20"
               fill="currentColor"
             >
               <path
                 fill-rule="evenodd"
                 d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                 clip-rule="evenodd"
               />
             </svg> --}}
           </div>
         </th>
         <th
           class="whitespace-nowrap px-4 py-2 text-left font-medium text-gray-900"
         >
           Category
         </th>
       
         <th
         class="whitespace-nowrap px-4 py-2 text-left font-medium text-gray-900"
       >
         Action
       </th>
       </tr>
     </thead>
 
     <tbody class="divide-y divide-gray-200">
      
       @foreach ($env_act as $item)
       @foreach($status as $statusess)
          @if($item->id == $statusess->acti_id)
          @if($statusess->status=='cancelled')
          {{-- modal for status of environmental activities --}}
                        
                        <!-- Modal toggle -->
                        
                        {{-- <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-1.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                           Add
                         </button> --}}
                        
                         <!-- Main modal -->
                         <div id="authentication-modal{{$item->id}}" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
                             <div class="relative w-full h-full max-w-md md:h-auto ">
                                 <!-- Modal content -->
                                 <div class="relative bg-white rounded-lg shadow">
                                     <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="authentication-modal{{$item->id}}">
                                         <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                         <span class="sr-only">Close modal</span>
                                     </button>
                                     <div class="px-6 py-6 lg:px-8">
                                         <h6 class="mb-4 text-xl font-medium text-gray-900 ">Change activity status of  <strong class="text-green-400">{{$item->act_name}}</strong></h6>
                                         <form class="space-y-6" method="POST" action="{{ route('activities.status') }}" enctype="multipart/form-data">
                                          @csrf
                                         <div>
                                          Current:  @foreach($status as $statuses)
                                  @if($item->id == $statuses->acti_id)
                                    {{$statuses->status}}
                                  @endif
                                 @endforeach
                                         </div>
                                         <input type="hidden" name="acti_id" value="{{$item->id}}">
                                         change to:
                                         <select name="status" id="statusSelect{{$item->id}}" class="rounded shadow m-2 mb-2 " required onchange="toggleFileInput{{$item->id}}()">
                                          <option value=""></option>
                                          <option value="Open for registration">Open for registration</option>
                                          <option value="completed">completed</option>
                                          <option value="cancelled">cancelled</option>
                                         </select>
                                         <br> <br>
                                         <label for=""> You may upload pictures of the event if it is completed</label>
                                         <br>
                                         <input name="event_photos[]" type="file" id="pictureInput{{$item->id}}" style="display: none;" accept="image/*" multiple>
                                         <br>
                                          <script>
                                            function toggleFileInput{{$item->id}}() {
                          var selectElement{{$item->id}} = document.getElementById("statusSelect{{$item->id}}");
                          var fileInput{{$item->id}} = document.getElementById("pictureInput{{$item->id}}");
                        
                          if (selectElement{{$item->id}}.value === "completed") {
                            fileInput{{$item->id}}.style.display = "block";
                          } else {
                            fileInput{{$item->id}}.style.display = "none";
                          }
                        }
                        
                                          </script>
                                         <br>
                                             <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update status</button>
                                           
                                         </form>
                                     </div>
                                 </div>
                                
                                 
                             </div>
                            
                         </div> 
                         
                                                {{-- end for modal for status of environmental activities --}}
                                     
                               <tr>
                                {{-- <td class="sticky inset-y-0 left-0 bg-white px-4 py-2">
                                  <label class="sr-only" for="Row1">Row 1</label>
                        
                                  <input
                                    class="h-5 w-5 rounded border-gray-200"
                                    type="checkbox"
                                    id="Row1"
                                  />
                                </td> --}}
                                <td class=" px-4 py-2 font-medium text-gray-900">
                                  {{$item->act_date}}
                                </td>
                                <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                                  {{$item->acti_time}}
                                </td>
                                <td class="px-4 py-2 text-gray-700">
                                  {{$item->act_name}}
                                </td>
                                <td class="px-4 py-2 text-gray-700" style="width:8em;">
                                 
       
       
        @foreach($status as $statuses)
          @if($item->id == $statuses->acti_id)
          @if($statuses->status=='completed')
          <strong
          class="rounded bg-green-100 px-3 py-1.5 text-xs font-medium text-green-600 cursor-pointer ml-1" data-modal-target="authentication-modal{{$item->id}}" data-modal-toggle="authentication-modal{{$item->id}}"
        >
        {{$statuses->status}}
  </strong>
          @endif
          @if($statuses->status=='Open for registration')
          <strong
          class="rounded bg-blue-100 px-3 py-1.5 text-xs font-medium text-blue-600 cursor-pointer ml-1" data-modal-target="authentication-modal{{$item->id}}" data-modal-toggle="authentication-modal{{$item->id}}"
        >
        {{$statuses->status}}
  </strong>
          @endif
          @if($statuses->status=='cancelled')
          <strong
          class="rounded bg-red-100 px-3 py-1.5 text-xs font-medium text-red-600 cursor-pointer ml-1" data-modal-target="authentication-modal{{$item->id}}" data-modal-toggle="authentication-modal{{$item->id}}"
        >
        {{$statuses->status}}
  </strong>
          @endif
        
            
          @endif
         @endforeach
        
      
        
                                </td>
                                <td class="whitespace-nowrap px-4 py-2 text-gray-700">
                                  @php
                                  $v_count=0;   
                                 @endphp
                                 @foreach ($volunteers as $v)
                                 @if($v->activity_id==$item->id)
                                 @php
                                 $v_count++;
                                 @endphp
                                 @endif
                                 @endforeach
                                 {{$v_count}}
                                </td>
                                <td class=" px-4 py-2 text-gray-700">{{$item->act_desc}}</td>
                                <td class="whitespace-nowrap px-4 py-2">
                                  <strong
                                    class="rounded  px-3 py-1.5 text-xs font-medium text-teal-700"
                                  >
                                    {{$item->act_category}}
                                  </strong>
                                </td>
                                
                                <td class="whitespace-nowrap px-4 py-2">
                                
                           
                                
                                 <form action="/activity_edit/{{$item->id}}" method="post" class="p-0 m-0 text-blue-700">
                                  @csrf
                                  <input type="hidden" name="act_id_btch" value="{{$item->id}}">
                                  <div class="flex flex-col items-center">
                                  <strong
                                  class="rounded bg-green-100 px-3 py-1.5 text-xs font-medium text-green-700 cursor-pointer mr-1" 
                                >
                                <a href="/activity_view/{{$item->id}}">view</a> 
                                </strong>
                        
                                  <button type="submit">edit</button>
                        
                                  @foreach($status as $statusess)
          @if($item->id == $statusess->acti_id)
          @if($statusess->status=='completed')
          @else 
          <strong
          class="rounded bg-red-100 px-3 py-1.5 text-xs font-medium text-red-700 cursor-pointer ml-1" data-modal-target="delete{{$item->id}}{{$item->act_date}}" data-modal-toggle="delete{{$item->id}}{{$item->act_date}}"
        >
        delete
          
        </strong>
          @endif 
          @endif 
          @endforeach
                                  </div>
                        
                                
                                </form>
                                
                               </td>
                              </tr>
                            
                                {{-- modal for deleting environmental activities --}}
                                                
                        <!-- Modal toggle -->
                        
                        
                        <!-- Main modal -->
                        <div id="delete{{$item->id}}{{$item->act_date}}" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
                          <div class="relative w-full h-full max-w-md md:h-auto">
                              <!-- Modal content -->
                              <div class="relative bg-red-500 rounded-lg shadow">
                                  <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="delete{{$item->id}}{{$item->act_date}}">
                                      <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                      <span class="sr-only">Close modal</span>
                                  </button>
                                  <div class="px-6 py-6 lg:px-8">
                                      <h3 class="mb-4 text-xl font-medium text-white ">DELETE ENVIRONMENTAL ACTIVITY?</h3>
                                      <form class="space-y-6" method="POST" action="{{ route('delete_activity',$item->id) }}"  >
                                       @csrf
                                       <div class="text-white">Activity name: {{$item->act_name}}</div>
                                        <h3> This action is irreversible</h3>
                                       <input type="hidden" name="delete_activity" value="{{$item->id}}">
                                      <br>
                                          <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Delete Activity</button>
                                        
                                      </form>
                                  </div>
                              </div>
                          </div>
                        </div> 
                        
                                             {{-- end for modal for deleting environmental activities --}}
          @endif
          
          @endif
         @endforeach
      
       @endforeach
       
     </tbody>
   </table>
  
 </div>

                   </div>
                    
                </div>
            </div>
        </div>
    </div>
    </div>
</x-app-layout>
