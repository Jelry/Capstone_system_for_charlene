<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }
    public function index()
    {
        $role=Auth::user()->role;

        if($role==0)
        {
            return view('dashboard',[
                'env_act_category' =>DB::table('env_acti_categories')
                ->where('user_id','=',Auth::id())->get(),'env_act' =>DB::table('environmental__activities')
                ->where('created_at','LIKE','%'."0".'%')->orderBy('priority_level', 'desc')->orderBy('acti_time', 'asc')->get(),'volunteers' =>DB::table('join_activities')
                ->where('created_at','LIKE','%'."0".'%')->get(),'status'=>DB::table('activity_statuses')->where('created_at','like','%0%')->get()
       ]);
        }
        else
        {
            return redirect('/admin');
        }
    }
    public function completedEvents()
    {
        $role=Auth::user()->role;

        if($role==0)
        {
            return view('volunteer.completed_events',[
                'env_act_category' =>DB::table('env_acti_categories')
                ->where('user_id','=',Auth::id())->get(),'env_act' =>DB::table('environmental__activities')
                ->where('created_at','LIKE','%'."0".'%')->orderBy('created_at', 'desc')->paginate(8),'volunteers' =>DB::table('join_activities')
                ->where('created_at','LIKE','%'."0".'%')->get(),'status'=>DB::table('activity_statuses')->where('created_at','like','%0%')->get()
       ]);
        }
        else
        {
            return redirect('/admin');
        }
    }
}
