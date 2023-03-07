<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
        $role=Auth::user()->role;

        if($role==1)
        {
         
            return view('admin.index',[
                'env_act_category' =>DB::table('env_acti_categories')
                ->where('user_id','=',Auth::id())->get(),'env_act' =>DB::table('environmental__activities')
                ->where('user_id','=',Auth::id())->get(),'volunteers' =>DB::table('users')
                ->where('role','=','0')->get(),
       ]);
        }
        else
        {
            return redirect('/dashboard',[
                'env_act_category' =>DB::table('env_acti_categories')
                ->where('user_id','=',Auth::id())->get(),'env_act' =>DB::table('environmental__activities')
                ->where('user_id','=',Auth::id())->get(),
       ]);
        }
      
    }
    public function activities()
    {
       
        return view('admin.activities',[
            'env_act' =>DB::table('environmental__activities')
            ->where('user_id','=',Auth::id())->get(),  'env_cat' =>DB::table('env_acti_categories')
            ->where('user_id','=',Auth::id())->get(),'volunteers' =>DB::table('join_activities')
            ->where('created_at','LIKE','%'."0".'%')->get()
   ]);
    }
    public function categories()
    {
        return view('admin.categories');
    }
    public function inbox()
    {
        return view('admin.inbox');
    }
    public function users()
    {
        return view('admin.users',['volunteers' =>DB::table('users')
        ->where('role','=','0')->get(),'vjoin' =>DB::table('join_activities')
        ->where('created_at','LIKE','%'."0".'%')->get()]);
    }
    public function logs()
    {
        return view('admin.logs');
    }
}
