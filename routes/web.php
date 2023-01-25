<?php

use App\Http\Controllers\ProfileController;
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

Route::view('jaibhim-20-purpose', 'jaibhim-20-purpose');
Route::view('jaibhimfoundation-administration', 'jaibhimfoundation-administration');
Route::view('ambedkariyam-50-purchase', 'ambedkariyam-50-purchase');
Route::view('ambedkariyam-ambassadors', 'ambedkariyam-ambassadors');
Route::view('ambedkariyam-library-open-procedures', 'ambedkariyam-library-open-procedures');
Route::view('ambedkariyam-volume-details', 'ambedkariyam-volume-details');
Route::view('contact', 'contact');
Route::view('international-translation-committee', 'international-translation-committee');
Route::view('jaibhim-20-activities', 'jaibhim-20-activities');
Route::view('jaibhimfoundation-activities', 'jaibhimfoundation-activities');
Route::view('jaibhimfoundation-publication', 'jaibhimfoundation-publication');
Route::view('jaibhimfoundation-purpose', 'jaibhimfoundation-purpose');
Route::view('jaibhimfoundation-team', 'jaibhimfoundation-team');
Route::view('photos', 'photos');
Route::view('videos', 'videos');
Route::view('joiningform', 'joiningform');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
