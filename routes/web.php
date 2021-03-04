<?php

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
    return view('index');
});

Route::view("/signin", 'login');
Route::post("signinval", 'stafflogin@submit');

Route::get("/show_details", 'patientinfo@showdb');

Route::view("/insert_details", 'insert_details');
Route::post("/insert_data", 'patientinfo@insertdb');

Route::get("/update_details", 'patientinfo@updatedb');
Route::post("/change_room", 'patientinfo@changeroom');
Route::post("/confirm_update", 'patientinfo@confirmupdate');

Route::get("/patient_history", 'patientinfo@history');

Route::get("/bill", 'patientinfo@showbill');
Route::post("/check_pid", 'patientinfo@checkid');
Route::post("/confirm_bill", 'patientinfo@confirm');

Route::view("/about", 'about');

Route::get('/logout' , function()
{
    session()->forget('data');
    return redirect('/');
});