<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class activity_edit extends Controller
{
   public function index(Request $request, $id)
   {
    return view('admin.activity_edit',[
        'env_act' =>DB::table('environmental__activities')
        ->where('id','=',$id)->first(),  'env_cat' =>DB::table('env_acti_categories')
        ->where('user_id','=',Auth::id())->get(),'id'=>$id
]);
   }
}
