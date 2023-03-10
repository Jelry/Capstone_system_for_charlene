<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EnvironmentalActivitiesController;
use App\Http\Controllers\EnvActiCategoriesController;
use App\Http\Controllers\activity_add;
use App\Http\Controllers\activity_edit;
use App\Http\Controllers\activity_view;
use App\Http\Controllers\VolunteerActivityViewController;
use App\Http\Controllers\JoinActivityController;


use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/admin',[AdminController::class,'index'])->middleware(['auth','verified','isAdmin'])->name('admin');
Route::get('/activities',[AdminController::class,'activities'])->middleware(['auth','verified','isAdmin'])->name('activities');

Route::get('/inbox',[AdminController::class,'inbox'])->middleware(['auth','verified','isAdmin'])->name('inbox');
Route::get('/users',[AdminController::class,'users'])->middleware(['auth','verified','isAdmin'])->name('users');
Route::get('/logs',[AdminController::class,'logs'])->middleware(['auth','verified','isAdmin'])->name('logs');
Route::post('update/{id}',[EnvironmentalActivitiesController::class,'create'])->middleware(['auth','verified','isAdmin'])->name('update_activity');
Route::post('acti_delete/{id}',[EnvironmentalActivitiesController::class,'acti_delete'])->middleware(['auth','verified','isAdmin'])->name('delete_activity');
Route::post('categ_delete/{id}',[EnvActiCategoriesController::class,'categ_delete'])->middleware(['auth','verified','isAdmin'])->name('delete_category');
Route::get('activity_add',[activity_add::class,'index'])->middleware(['auth','verified','isAdmin'])->name('activity_add');
Route::post('activity_edit/{id}',[activity_edit::class,'index'])->middleware(['auth','verified','isAdmin']);
Route::get('activity_view/{id}',[activity_view::class,'index'])->middleware(['auth','verified','isAdmin']);

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');
Route::resource('activity', EnvironmentalActivitiesController::class)
    ->only(['index', 'store', 'update', 'edit'])
    ->middleware(['auth', 'verified','isAdmin']);

Route::resource('category', EnvActiCategoriesController::class)
    ->only(['index', 'store', 'update'])
    ->middleware(['auth', 'verified','isAdmin']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


//all volunteer related routes below

Route::get('/dashboard',[HomeController::class,'index'])->middleware(['auth','verified'])->name('dashboard');
Route::get('/view_activity/{id}',[VolunteerActivityViewController::class,'index'])->middleware(['auth','verified','isVolunteer']);

Route::resource('join',JoinActivityController::class)
        ->only(['index', 'store', 'update'])
        ->middleware(['auth','verified']);
        

require __DIR__.'/auth.php';
