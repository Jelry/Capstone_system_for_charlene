<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

class activity_add extends Controller
{
    public function index()
    {
        return view('admin.activity_add',[
            'env_act' =>DB::table('environmental__activities')
            ->where('user_id','=',Auth::id())->get(),  'env_cat' =>DB::table('env_acti_categories')
            ->where('user_id','=',Auth::id())->get(),
   ]);
    }
}
