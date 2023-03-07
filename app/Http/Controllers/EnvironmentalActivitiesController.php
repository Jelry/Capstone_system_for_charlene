<?php

namespace App\Http\Controllers;

use App\Models\Environmental_Activities;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

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
        $affected = DB::table('environmental__activities')
        ->where('id', $request->act_id)
        ->update(['act_name' => $request->activity_name, 'act_date' => $request->activity_date, 'act_category' => $request->activity_category, 'act_desc' => $request->activity_description, 
        'latlang' => "-", 'lat' => $request->lat, 'lang' => $request->lang]);
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
 
        $request->user()->Environmental_Activities()->create([
            'act_name' => $request->activity_name,
            'act_date' => $request->activity_date,
            'act_category' => $request->activity_category,
            'act_desc' => $request->activity_description,
            'latlang' => $request->latlang,
            'lat' => $request->lat,
            'lang' => $request->lang,
        ]);
 
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
