<?php

namespace App\Http\Controllers;

use App\Models\JoinActivity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class JoinActivityController extends Controller
{
    public function cancel($id)
    {
        JoinActivity::destroy($id);
        return back()->with('message', 'You cancelled your booking if you change your mind you can still book this event again!');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('volunteer.my_bookings',['my_bookings'=>DB::Table('join_activities')->where('user_id',"=",Auth::id())->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $indi_number="63".$request->phone_number;
        $org_number="63".$request->point_person_phone_number;
        if($request->type_of_volunteer=="individual")
        {
            $validated = $request->validate([
                'activity_id' => 'required',
                'type_of_volunteer' => 'required|string|max:255',
                'phone_number' => 'required|string|max:11',
                'email' => 'required|email|max:255',
            ]);
            $request->user()->JoinActivity()->create($validated);
            // return ('you have successfully joined as an individual volunteer');
           
            // return redirect('/dashboard');
          //send sms notif to individual volunteer
          $basic  = new \Vonage\Client\Credentials\Basic("47b2a912", "M95O9ZVHVlHxYIZv");
          $client = new \Vonage\Client($basic);
            $response = $client->sms()->send(
                new \Vonage\SMS\Message\SMS($indi_number,"Greenisenios", 'Greenisenios - Hello volunteer! this is to notify you that you have joined an environmental activity named :'.$request->activity_name.'this activity will be held on :'.$request->activity_date.' Save the date! See you there!')
            );
            
            $message = $response->current();
            
            if ($message->getStatus() == 0) {
                echo "The message was sent successfully\n";
            } else {
                echo "The message failed with status: " . $message->getStatus() . "\n";
            }
            //end of sending sms notif to individual volunteer
                //Show the server response
                return back()->with('message', 'You have successfully joined as an individual volunteer!');
                
        }
        // end of execution if volunteer is individual
        else{
            $validated = $request->validate([
                'activity_id' => 'required',
                'type_of_volunteer' => 'required|string|max:255',
                'org_name' => 'required|string|max:255',
                'participants' => 'required',
                'point_person_phone_number' => 'required|string|max:11',
                'point_person_email' => 'required|email|max:255',
            ]);
            $request->user()->JoinActivity()->create($validated);
            // return ('you have successfully joined as an organization');
            //send sms notif to org volunteer
            $basic  = new \Vonage\Client\Credentials\Basic("47b2a912", "M95O9ZVHVlHxYIZv");
            $client = new \Vonage\Client($basic);
            $response = $client->sms()->send(
                new \Vonage\SMS\Message\SMS($org_number,"Greenisenios", 'Greenisenios - Hello volunteer! this is to notify you that you have joined an environmental activity named :'.$request->activity_name.'this activity will be held on :'.$request->activity_date.'You are registered to the event as organization and you are the point person. Please notify everyone under your org about the event date. See you there!')
            );
            
            $message = $response->current();
            
            if ($message->getStatus() == 0) {
                echo "The message was sent successfully\n";
            } else {
                echo "The message failed with status: " . $message->getStatus() . "\n";
            }
            //end of sending sms notif to individual org
            return back()->with('message', 'You have successfully joined as an organization!');
            // return redirect('/dashboard');
        }
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\JoinActivity  $joinActivity
     * @return \Illuminate\Http\Response
     */
    public function show(JoinActivity $joinActivity)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\JoinActivity  $joinActivity
     * @return \Illuminate\Http\Response
     */
    public function edit(JoinActivity $joinActivity)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\JoinActivity  $joinActivity
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, JoinActivity $joinActivity)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\JoinActivity  $joinActivity
     * @return \Illuminate\Http\Response
     */
    public function destroy(JoinActivity $joinActivity)
    {
        //
    }
}
