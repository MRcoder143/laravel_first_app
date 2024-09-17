<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    // public function showPost(string $id){
    //     return view ('profile',compact('id'));
    // }
    public function showPost(){
        return view ('profile');
    }
     public function showBlog(){
        return view ('blog');
    }
}
