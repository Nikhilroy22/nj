<?php



use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;

use App\Http\Controllers\postview;


use App\Http\Controllers\homecontroller;
use App\Http\Controllers\Auth\authcontroller;
use App\Http\Controllers\bets;
use App\Http\Controllers\Auth\AuthUser;
use App\Http\Controllers\Auth\signupcontroller;


use App\Http\Controllers\LocaleController;

/*
Langaguge post
*/
Route::post('/locale', LocaleController::class)->name('locale.change');



Route::get('/', [homecontroller::class, 'index'])->name('home');
// User Manager
Route::get('add_post', [AuthUser::class, 'addpost'])->name('add.post');

//authcontroller
Route::get('/login', [authcontroller::class, 'loginview'])->name('login');
Route::post('/login', [authcontroller::class, 'loginstore'])->name('login');
Route::post('/logout', [authcontroller::class, 'logout']);

Route::get('/signup', [signupcontroller::class, 'signupview'])->name('signup');

Route::post('/signup', [signupcontroller::class, 'signupstore']);
// 404 page
Route::get('404', function(){
  
  return view('errors.404');
})->name('404');

//Profile

Route::get('profile', function (){

  return view('Auth.profile');
});

// Message
Route::get('meg', function(){
  
  return view('message');
});


//Admin Route
require __DIR__.'/admin.php';


//Slug post Cat

Route::get('/{slug}', [postview::class, 'postopen']);


