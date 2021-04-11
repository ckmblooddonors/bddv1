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

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware'=>'auth'],function(){

    // Dashboard Route
    Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('user.dashboard');

    
    // Profile route
    Route::get('/profile',[App\Http\Controllers\User\ProfileController::class, 'edit'])->name('user.profile');
	Route::post('/profile/update',[App\Http\Controllers\User\ProfileController::class, 'update'])->name('user.profile.update');
    
});
Route::name('admin.')->prefix('admin')->middleware(['admincheck'])->group(function () {
    // Administrator Dashboard
    Route::get('/dashboard', App\Http\Controllers\Admin\DashboardController::class)->name('dashboard');

    
	
    // Send email to user asking for blood donation.
    Route::post('usermanager/{usermanager}/sendmail', [App\Http\Controllers\Admin\UserManagerController::class,'sendMail'])->name('usermanager.sendmail');

    // User Manager Reset password sent emails.
    Route::post('usermanager/{usermanager}/resetpassword', [App\Http\Controllers\Admin\UserManagerController::class,'resetPassword'])->name('usermanager.resetpassword');

    // Usermanager
    Route::resource('usermanager', App\Http\Controllers\Admin\UserManagerController::class);
    // Pincode
    Route::resource('pincode', App\Http\Controllers\Admin\PincodeController::class);
});