<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\activity_status;
use App\Models\completed_event_photos;

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
                ->where('role','=','0')->get(),'status'=>DB::table('activity_statuses')->where('created_at','like','%0%')->where('status','=','completed')->get()
       ]);
        }
        else
        {
            return redirect('/dashboard',[
                'env_act_category' =>DB::table('env_acti_categories')
                ->where('user_id','=',Auth::id())->get(),'env_act' =>DB::table('environmental__activities')
                ->where('user_id','=',Auth::id())->orderBy('created_at', 'desc')->get(),'status'=>DB::table('activity_statuses')->where('created_at','like','%0%')->get()
       ]);
        }
      
    }
    public function activities()
    {
       
        return view('admin.activities',[
            'env_act' =>DB::table('environmental__activities')
            ->where('user_id','=',Auth::id())->orderBy('created_at', 'desc')->paginate(5),  'env_cat' =>DB::table('env_acti_categories')
            ->where('user_id','=',Auth::id())->get(),'volunteers' =>DB::table('join_activities')
            ->where('created_at','LIKE','%'."0".'%')->get(),'status'=>DB::table('activity_statuses')->where('created_at','like','%0%')->get()
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
        ->where('role','=','0')->paginate(10),'vjoin' =>DB::table('join_activities')
        ->where('created_at','LIKE','%'."0".'%')->get(),'env_acti'=> DB::table('environmental__activities')->where('created_at','like','%0%')->get()]);
    }
    public function logs()
    {
        $users = User::OrderBy('created_at','desc')->paginate(8);
        return view('admin.logs',['user'=> $users]);
    }
    public function status_change(Request $request)
    {
        
            $status_change = activity_status::updateorcreate(
                ['acti_id' => $request->acti_id],
                ['status' => $request->status],
            );
            $eventPhotos = $request->file('event_photos');
            if($eventPhotos && count($eventPhotos) > 0)
            {
                foreach ($request->file('event_photos') as $photo) {
                    $filename = $request->acti_id . '_' . $photo->getClientOriginalName();
                    $destinationPath = public_path('completed_event/photos');
            
                    // Check if file already exists
                    if (!file_exists($destinationPath . '/' . $filename)) {
                        $photo->move($destinationPath, $filename);
            
                        // Create or update the Photo record
                        completed_event_photos::updateOrCreate(
                            ['photo' => $filename]
                        );
                }}
            }
            else
            {
              
            }
        return back();
    }
    public function welcome()
    {
        return view('welcome',['env_acti'=> DB::table('environmental__activities')->where('created_at','like','%0%')->get(),'status'=>DB::table('activity_statuses')->where('created_at','like','%0%')->orderby('created_at','desc')->paginate(5)]);
    }
    public function guestViewAll()
    {
        return view('guest_view_all',['env_acti'=> DB::table('environmental__activities')->where('created_at','like','%0%')->get(),'status'=>DB::table('activity_statuses')->where('created_at','like','%0%')->orderby('created_at','desc')->get()]);
    }
}
