<?php

use App\Http\Controllers\OceneConntroller;
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
    $ocene = \App\Models\Ocene::all();
    // dd($ocene)
    return view('welcome',compact('ocene'));
});

Route::view("/dodaj-ocenu","addGrade");
Route::post("/add-user-grade",[OceneConntroller::class,'addGrade']);
