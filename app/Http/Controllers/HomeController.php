<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $role=Auth::user()->role;

        if($role==0)
        {
            return view('dashboard',[
                'env_act_category' =>DB::table('env_acti_categories')
                ->where('user_id','=',Auth::id())->get(),'env_act' =>DB::table('environmental__activities')
                ->where('created_at','LIKE','%'."0".'%')->get(),'volunteers' =>DB::table('join_activities')
                ->where('created_at','LIKE','%'."0".'%')->get()
       ]);
        }
        else
        {
            return redirect('/admin');
        }
    }
}
