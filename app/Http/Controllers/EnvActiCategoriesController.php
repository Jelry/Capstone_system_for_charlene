<?php

namespace App\Http\Controllers;

use App\Models\Env_acti_categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class EnvActiCategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
        return view('admin.categories',[
            'env_act_category' =>DB::table('env_acti_categories')
            ->where('user_id','=',Auth::id())->get(),
   ]);
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
        $validated = $request->validate([
            'category_name' => 'required|string|max:255',
            'category_desc' => 'required|string|max:255',
        ]);
 
        $request->user()->Env_acti_categories()->create($validated);
 
        return redirect(route('category.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Env_acti_categories  $env_acti_categories
     * @return \Illuminate\Http\Response
     */
    public function show(Env_acti_categories $env_acti_categories)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Env_acti_categories  $env_acti_categories
     * @return \Illuminate\Http\Response
     */
    public function edit(Env_acti_categories $env_acti_categories)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Env_acti_categories  $env_acti_categories
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Env_acti_categories $env_acti_categories)
    {
        $affected = DB::table('env_acti_categories')
        ->where('id', $request->category_id)
        ->update(['category_name' => $request->category_name, 'category_desc' => $request->category_description]);
        return redirect(route('category.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Env_acti_categories  $env_acti_categories
     * @return \Illuminate\Http\Response
     */
    public function destroy(Env_acti_categories $env_acti_categories)
    {
      
    }
    public function categ_delete(Request $request, $id)
    {
        DB::table('env_acti_categories')->where('id', '=', $id)->delete();
        
        return redirect(route('category.index'));
    }
}
