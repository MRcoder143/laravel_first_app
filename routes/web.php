<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/profile', function () {
    return view('profile');
});




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






