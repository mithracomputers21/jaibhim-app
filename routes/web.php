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
    return view('welcome');
});

Route::view('jaibhimfoundation-administration', 'jaibhimfoundation-administration');
Route::view('jaibhimfoundation-purpose', 'jaibhimfoundation-purpose');
Route::view('jaibhimfoundation-publication', 'jaibhimfoundation-publication');
Route::view('jaibhimfoundation-activities', 'jaibhimfoundation-activities');
Route::view('jaibhimfoundation-team', 'jaibhimfoundation-team');
Route::view('ambedkariyam-50-purchase', 'ambedkariyam-50-purchase');
Route::view('ambedkariyam-volume-details', 'ambedkariyam-volume-details');
Route::view('jaibhim-20-purpose', 'jaibhim-20-purpose');
Route::view('jaibhim-20-activities', 'jaibhim-20-activities');
Route::get('joining-form', 'JaibhimController@joiningForm');
Route::get('ambedkariyam-ambassadors', 'JaibhimController@ambassadors');
Route::view('contact', 'contact');
Route::view('ayrodesign', 'ayrodesign');
Route::view('ambedkariyam-library-open-procedures', 'ambedkariyam-library-open-procedures');
Route::post('/sendEventMail','JaibhimController@sendMail')->name('send.email');
Route::view('photos', 'photos');
Route::view('videos', 'videos');
Route::view('international-translation-committee', 'international-translation-committee');