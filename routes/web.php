<?php

use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/',[Homecontroller::class,'index']);
Route::get('/home',[Homecontroller::class,'redirect']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::get('/add_doctor_view',[AdminController::class,'addview']);
Route::post('/upload_doctor',[AdminController::class,'upload']);
Route::post('/appointment',[Homecontroller::class,'appointment']);
Route::get('/myappointment',[Homecontroller::class,'myappointment']);
Route::get('/cancel_appoint/{id}',[Homecontroller::class,'cancel_appoint']);
Route::get('/showappointment',[Admincontroller::class,'showappointment']);
Route::get('/approved/{id}',[AdminController::class,'approved']);
Route::get('/canceled/{id}',[AdminController::class,'canceled']);
Route::get('/showdoctors',[AdminController::class,'showdoctors']);
Route::get('/deletedoctor/{id}',[AdminController::class,'deletedoctor']);
Route::get('/update_doctor/{id}',[AdminController::class,'update_doctor']);
Route::post('/editdoctor/{id}',[AdminController::class,'editdoctor']);