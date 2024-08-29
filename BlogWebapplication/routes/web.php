<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\visitorController;
use App\Http\Controllers\Admincontroller;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
// use App\Http\Controllers\Controller;
// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[visitorController::class,'index'])->name('Home');
Route::get('/Browser',[visitorController::class,'BrowserPostsF'])->name('BrowserPage');
Route::get('/VComment',[visitorController::class,'Addcomment'])->name('comment');
Route::get('/ViewPost',[visitorController::class,'ViewPost'])->name('V_Post');

Route::get('/Admin',[Admincontroller::class,'index_c'])->name('admin');
Route::get('/U_Details',[UserController::class,'UserIndex'])->name('UserDetails');


Route::get('/U_register',[RegisterController::class,'Register'])->name('Register');
Route::get('/U_login',[RegisterController::class,'Login_U'])->name('Sign1');