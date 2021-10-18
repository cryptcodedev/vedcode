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
    return view('home');
});
Route::get('services', function(){
    return view('services');
});
Route::get('about-us', function(){
    return view('about-us');
});
Route::get('contact-us', function(){
    return view('contact-us');
});
Route::get('corporate-solution-service', function(){
    return view('single-service-1');
});
Route::get('call-center-solutions-service', function(){
    return view('single-service-2');
});
Route::get('cloud-development-service', function(){
    return view('single-service-3');
});
Route::get('IOS/MacOS-Apps-service', function(){
    return view('single-service-4');
});
Route::get('android-applications-service', function(){
    return view('single-service-5');
});
Route::get('ux-design-service', function(){
    return view('single-service-6');
});
