<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
   public function showUsers(){
        $users = DB::table('users')
        ->orderBy('name')
        ->paginate(3,['*'],'pg');
        // return $users;
        return view('allUsers',['data' => $users]);
        // foreach($users as $user)
        // dd($users);
   }
   public function singleUser(string $id){
        $user = DB::table('users')->where('id',$id)->get();
     //    return $user;
        return view('user',['data' => $user]);
        // foreach($users as $user)
        // dd($users);
   }

   public function addUser(Request $req){
     $req->validate([
          'username' => ['required','string','max:255'],
          'useremail' => ['required','string','email','max:255','unique:users,email'],
          'userpass' => ['required','string','min:8'],
          'userconfirmpass' => ['required','string','min:8','same:userpass'],
          'usercity' => ['required','string','max:255'],
          'useraddress' => ['required','string','max:255']
     ]);
     $user = DB::table('users')->insert(
          [
               'name' => $req->username,
               'email' => $req->useremail,
               'password' => $req->userpass,
               'password_confirmation' => $req->userconfirmpass,
               'city' => $req->usercity,
               'address' => $req->useraddress,
               'created_at' => now(),
               'updated_at' => now()
          ]
     );
     if($user){
          return redirect()->route('users');
          // echo "<h1>Record added successfully</h1>";
     }
   }

     public function updateUserForm(string $id){
          // $user = DB::table('users')->where('id',$id)->get();
          $user = DB::table('users')->find($id);
          return view('updateuserform',['data'=>$user]);
          // return view('editUser',['data' => $user]);
     }
   public function updateUser(Request $req, $id){
     $user = DB::table('users')
          ->where('id', $id)
          ->update([
              'name' => $req->username,
               'email' => $req->useremail,
               'password' => $req->userpass,
               'password_confirmation' => $req->userconfirmpass,
               'city' => $req->usercity,
               'address' => $req->useraddress,
               'updated_at' => now()
          ]);
     if($user){
          return redirect()->route('users');
     }
   }

   public function deleteUser(string $id){
     $user = DB::table('users')
          ->where('id', $id)
          ->delete();
     if($user){
          return redirect()->route('users');
     }
   }
}
