@extends('layouts.masterLayout')

@section('content')
   <div class="container">
    <div class="row">
        <div class="col-6">
        <h1>Update User</h1>
            <form action="{{route('updateUser',$data->id)}}" method="post">
            @csrf
  <div class="form-group">
    <label for="name">Name:</label>
    <input type="text" value="{{$data->name}}" class="form-control" id="name" name="username">
  </div>
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" value="{{$data->email}}" class="form-control" id="email" name="useremail">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" value="{{$data->password}}" class="form-control" id="pwd" name="userpass">
  </div>
  <div class="form-group">
    <label for="cpwd">Confirm Password:</label>
    <input type="password" value="{{$data->password_confirmation}}" class="form-control" id="cpwd" name="userconfirmpass">
  </div>
  
  <div class="form-group">
    <label for="city">City:</label>
    <input type="text" value="{{$data->city}}" class="form-control" id="city" name="usercity">
  </div>
  
  <div class="form-group">
    <label for="address">Address:</label>
    <input type="text" value="{{$data->address}}" class="form-control" id="address" name="useraddress">
  </div>
  
  <button type="submit" class="btn btn-warning mt-2">Update</button>
</form>
        </div>
    </div>
   </div>
@endsection