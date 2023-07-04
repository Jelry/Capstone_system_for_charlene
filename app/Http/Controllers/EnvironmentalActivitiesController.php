<?php

namespace App\Http\Controllers;

use App\Models\Environmental_Activities;
use App\Models\activity_status;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;


class EnvironmentalActivitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.activities');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
          // start saving the new image 
          // start saving the image 
          if ($request->hasFile('image')) {
            $filenameWithExt1 = $request->file('image')->getClientOriginalName();
            $filename1 = pathinfo($filenameWithExt1, PATHINFO_FILENAME);
            $extension1 = $request->file('image')->getClientOriginalExtension();
            $filenameToStore1 = $filename1.'_'.time().'.'.$extension1;
            $path = $request->file('image')->move(public_path('environmental_activities/photos'),$filenameToStore1);
            // $user->photo = $filenameToStore;
           
        }
        // end saving the image
     
        $path1 = public_path('environmental_activities/photos') . '/' . $request->current_image;

        if (File::exists($path1)) {
        File::delete($path1);
        // File has been successfully deleted
        } else {
        // File does not exist
        }
        // end saving the new image
        $affected = DB::table('environmental__activities')
        ->where('id', $request->act_id)
        ->update(['act_name' => $request->activity_name, 'act_date' => $request->activity_date.' to '.$request->activity_date_end, 'act_category' => $request->activity_category, 'act_desc' => $request->activity_description, 
        'latlang' => "-", 'lat' => $request->lat, 'lang' => $request->lang,'acti_time' => $request->activity_time,'photo'=>$request->image]);
        return redirect(route('activities'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'activity_name' => 'required|string|max:555',
            'activity_date' => 'required|string|max:255',
            'activity_category' => 'required|string|max:255',
            'activity_description' => 'required|string|max:255',
        ]);
         // start saving the image 
         $filenameToStore = '';
         if ($request->hasFile('image')) {
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
            $filenameToStore = $filename.'_'.time().'.'.$extension;
            $path = $request->file('image')->move(public_path('environmental_activities/photos'),$filenameToStore);
            // $user->photo = $filenameToStore;
           
        }
        // end saving the image
        $request->user()->Environmental_Activities()->create([
            'user_id' => Auth::id(),
            'act_name' => $request->activity_name,
            'act_date' => $request->activity_date.' to '.$request->activity_date_end,
            'act_category' => $request->activity_category,
            'act_desc' => $request->activity_description,
            'latlang' => $request->latlang,
            'lat' => $request->lat,
            'lang' => $request->lang,
            'acti_time' =>$request->activity_time,
            'photo' => $filenameToStore,
        ]);
        // $env_act = new Environmental_Activities();
        // $env_act->user_id = Auth::id();
        // $env_act->act_name = $request->activity_name;
        // $env_act->act_date = $request->activity_date.' to '.$request->activity_date_end;
        // $env_act->act_category = $request->activity_category;
        // $env_act->act_desc = $request->activity_description;
        // $env_act->latlang = $request->latlang;
        // $env_act->lat = $request->lat;
        // $env_act->lang = $request->lang;
        // $env_act->acti_time =$request->activity_time;
        // $env_act->photo = $filenameToStore;
        // $env_act->save();

        $status = new activity_status();
        $env_acti_latest = Environmental_Activities::latest()->first();
        $status->acti_id = $env_acti_latest->id;
        $status->status = "uncompleted";
        $status->save();

 
        return redirect(route('activities'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Environmental_Activities  $environmental_Activities
     * @return \Illuminate\Http\Response
     */
    public function show(Environmental_Activities $environmental_Activities)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Environmental_Activities  $environmental_Activities
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Environmental_Activities $environmental_Activities)
    {
       
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Environmental_Activities  $environmental_Activities
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Environmental_Activities $environmental_Activities)
    {
      
   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Environmental_Activities  $environmental_Activities
     * @return \Illuminate\Http\Response
     */
    public function destroy(Environmental_Activities $environmental_Activities)
    {
        //
    }
    public function acti_delete(Request $request, $id)
    {
        $deleted = DB::table('environmental__activities')->where('id', '=', $id)->delete();
        return redirect(route('activities'));
    }
}
