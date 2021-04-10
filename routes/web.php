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
	Route::get('/profile',[App\Http\Controllers\User\ProfileController::class, 'edit'])->name('user.profile');
	Route::post('/profile/update',[App\Http\Controllers\User\ProfileController::class, 'update'])->name('user.profile.update');
	Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('user.dashboard');
});
Route::name('admin.')->prefix('admin')->middleware(['admincheck'])->group(function () {
	
});