<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class VolunteerActivityViewController extends Controller
{
    public function index(Request $request, $id)
    {
        return view('volunteer.activity_view',[
            'env_act' =>DB::table('environmental__activities')
            ->where('id','=',$id)->first(),  'env_cat' =>DB::table('env_acti_categories')
            ->where('user_id','=',Auth::id())->get(),'id'=>$id,'joined'=>DB::table('join_activities')->where('user_id',"=",Auth::id())->get(),'volunteers' =>DB::table('join_activities')
            ->where('created_at','LIKE','%'."0".'%')->get(),'status'=>DB::table('activity_statuses')->where('acti_id','=',$id)->first(),'completed_event_photo' => DB::table('completed_event_photos')->get()
    ]);
    }
}
