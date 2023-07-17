<x-app-layout>
    <x-slot name="header">

    </x-slot>
    <div class="py-12 grid grid-cols-1 lg:grid-cols-5">
        
            <div class="col-span-1"></div>
            <div class="col-span-3 bg-white w-full">
                <div class="flex items-center">
                    <h1 class="pl-6">Joined as</h1>
                    <select name="" id="volunteer_as" class="m-4 rounded shadow" onchange="display_org_names_input()" >
                        <option value="individual">individual</option>
                        <option value="organization">organization</option>
                    </select> 
                   
                </div>
           
             <div id="indi_view" class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500 ">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Joined As
                            </th>
                            <th scope="col" class="px-6 py-3">
                                email used
                            </th>
                            <th scope="col" class="px-6 py-3">
                                phone number used
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Joined Date
                            </th>
                            <th>
                                Days Left
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($my_bookings as $indi_bookings)
                        @if($indi_bookings->type_of_volunteer=="individual")
                        <tr class="bg-white border-b ">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                              
                                Individual
                             
                           
                            </th>
                            <td class="px-6 py-4">
                                {{$indi_bookings->email}}
                            </td>
                            <td class="px-6 py-4">
                               {{$indi_bookings->phone_number}}
                            </td>
                            <td class="px-6 py-4">
                                {{ Carbon\Carbon::parse($indi_bookings->created_at)->format('Y-m-d') }}
                            </td>
                            <td>
                    @foreach($acti as $actt)
                  
                    
                    @if($actt->id==$indi_bookings->activity_id)
                    @foreach($status as $ss)
                    @if($ss->acti_id == $actt->id)
                    @if($ss->status=='on going')
 <!-- getting the date range -->
 @php 
                    $dateRange = $actt->act_date;

// Split the string by the word "to"
$dates = explode(" to ", $dateRange);

// Get the first date from the $dates array
$firstDate = $dates[0];



$activityDate = $firstDate;

    $currentDate = new DateTime();
    $activityDate = new DateTime($activityDate);
    $interval = $currentDate->diff($activityDate);
    $daysLeft = $interval->days;
    echo "There are {$daysLeft} days left before the activity.";
                    @endphp
                    @else 
                    N/A
                    @endif
                    @endif
                    @endforeach
                   
                   
                    @endif
                    @endforeach
                </td>
                            <td class="px-6 py-4">
                                <a href="/view_activity/{{$indi_bookings->activity_id}}" class="font-medium text-blue-600  hover:underline">View</a>
                            </td>
                        </tr>   
                        @endif
                        @endforeach 
                    </tbody>
                </table>
            </div>
           

<div id="org_view" class="relative overflow-x-auto shadow-md sm:rounded-lg hidden">
    <table class="w-full text-sm text-left text-gray-500 ">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Joined As
                </th>
                <th scope="col" class="px-6 py-3">
                    email used
                </th>
                <th scope="col" class="px-6 py-3">
                    phone number used
                </th>
                <th scope="col" class="px-6 py-3">
                    Date Joined
                </th>
                <th>
                    Days Left
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
               
            </tr>
        </thead>
        <tbody>
            @foreach($my_bookings as $org_bookings)
            @if($org_bookings->type_of_volunteer=="organization")
            <tr>
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                 Organization
                </th>
                <td class="px-6 py-4">
                    {{$org_bookings->point_person_email}}
                </td>
                <td class="px-6 py-4">
                    {{$org_bookings->point_person_phone_number}}
                </td>
                <td class="px-6 py-4">
                    {{ Carbon\Carbon::parse($org_bookings->created_at)->format('Y-m-d') }}
                </td>
                <td>
                    @foreach($acti as $act)
                  
                    
                    @if($act->id==$org_bookings->activity_id)
                    @foreach($status as $s)
                    @if($s->acti_id == $act->id)
                    @if($s->status=='on going')
 <!-- getting the date range -->
 @php 
                    $dateRange = $act->act_date;

// Split the string by the word "to"
$dates = explode(" to ", $dateRange);

// Get the first date from the $dates array
$firstDate = $dates[0];



$activityDate = $firstDate;

    $currentDate = new DateTime();
    $activityDate = new DateTime($activityDate);
    $interval = $currentDate->diff($activityDate);
    $daysLeft = $interval->days;
    echo "There are {$daysLeft} days left before the activity.";
                    @endphp
                    @else 
                    N/A
                    @endif
                    @endif
                    @endforeach
                   
                   
                    @endif
                    @endforeach
                </td>
                <td class="px-6 py-4">
                    <a href="/view_activity/{{$org_bookings->activity_id}}" class="font-medium text-blue-600  hover:underline">View</a>
                </td>
            </tr>
            @endif
            @endforeach
           
        </tbody>
    </table>
</div>
            </div>
            <div class="col-span-1"></div>

        

    </div>
    <script>
        function display_org_names_input()
        {
          var i=document.getElementById('volunteer_as').value;
          if(i=="individual")
          {
           document.getElementById('org_view').style.display = 'none';
           document.getElementById('indi_view').style.display = 'block';
          }
          else{
            document.getElementById('org_view').style.display = 'block';
           document.getElementById('indi_view').style.display = 'none';
          }
        }
      </script>
</x-app-layout>