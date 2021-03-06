<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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
Route::view('signup', 'signup');

Route::view('login', 'login');

Route::get('/logout', function () {
    if(session()->has('email')){
        session()->pull('email',null);
    }
    return redirect('/');
});

Route::get('/', function () {
    if(session()->has('email')){
        return redirect('profile');
    }
    return view('welcome');
});


Route::get('profile',[UserController::class,'show']);


Route::post('submit',[UserController::class,'userSignup']);
Route::post('logging',[UserController::class,'userLogin']);



Route::get('delete/{id}',[UserController::class,'delete']);

Route::get('update/{id}',[UserController::class,'updateData']);

Route::post('update',[UserController::class,'updateUser']);