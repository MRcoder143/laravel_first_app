<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\CommentController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/profile', function () {
    return view('profile');
});

// Route::controller(PostController::class)->group(function(){
// // Route::get("/post/{id}",[PostController::class,'showPost'])->name('post');
// Route::get("/post",'showPost')->name('post');
// Route::get("/blog",'showBlog')->name('blog');

// });

Route::get("test",TestController::class);

Route::controller(UserController::class)->group(function(){
Route::get('/allUsers','showUsers')->name('users');
Route::get('/user/{id}','singleUser')->name('singleUser');
Route::post('/add','addUser')->name('addnewuser');
// Route::put('/update/{id}','updateUser')->name('updateUser');
Route::post('/update/{id}','updateUser')->name('updateUser');
Route::get('/updateUserForm/{id}','updateUserForm')->name('updateuserform');
Route::get('/delete/{id}','deleteUser')->name('deleteUser');

});
// Route::get('/',[UserController::class,'showUsers']);
Route::view('adduser','/addUser');

Route::get('/allStudents',[StudentController::class,'showStudents'])->name('students');



// customer resource routes

Route::resource('customers',CustomerController::class);
Route::resource('posts',PostController::class);
Route::resource('posts.comments',CommentController::class)->shallow();
// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });

// Route::view('/post', 'post');

//Parameter value 
// Route::get('/post/{id?}', function ($id = null) {
//     if($id){
// return "<h1>Post id is .'$id'.</h1>";
//}else
//{
//return "no value found";
//}
// });

//Multiple Parameter value 
// Route::get('/post/{id?/comment/{cmttd?}}', function ($id = null, $cmttd = null) {
//      if($id){
// return "<h1>Post id is .'$id'.</h1>";
//}else
//{
//return "no value found";
//}    
// });

// routes constraints
// Route::get('/post/{id?}', function ($id = null) {
//      if($id){
// return "<h1>Post id is $id</h1>";
// }else
// {
// return "no value found";
// }    
// })->whereNumber('id');


// multiple constraints
// Route::get('/post/{id?}/comment/{cmtid?}', function ($id = null, $cmtid = null) {
//      if($id){
// return "<h1>Post id is $id and comment id is $cmtid</h1>";
// }else
// {
// return "no value found";
// }    
// })->whereNumber('id')->whereAlpha('cmtid');



// named routes

// Route::get('/post-page/{id?}', function ($id = null) {
//      if($id){
// return "<h1>Post id is $id</h1>";
// }else
// {
// return "no value found";
// }    
// })->whereNumber('id')->name('post');






