@extends('layouts.masterLayout')

@section('content')
   <div class="container">
    <div class="row">
        <div class="col-6">
        <h1>Add New User</h1>
            <form action="{{route('addnewuser')}}" method="post">
            @csrf
  <div class="form-group">
    <label for="name">Name:</label>
    <input type="text" value="{{old('username')}}" class="form-control @error('username') is-invalid @enderror " id="name" name="username">
   <span class="text-danger">
    @error('username')
      {{ $message}}
    @enderror
   </span>
  </div>
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" value="{{old('useremail')}}" class="form-control @error('useremail') is-invalid @enderror " id="email" name="useremail">
 <span class="text-danger">
    @error('useremail')
      {{ $message}}
    @enderror
   </span>
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" value="{{old('userpass')}}" class="form-control @error('userpass') is-invalid @enderror " id="pwd" name="userpass">
<span class="text-danger">
    @error('userpass')
      {{ $message}}
    @enderror
   </span>
  </div>
  <div class="form-group">
    <label for="cpwd">Confirm Password:</label>
    <input type="password" value="{{old('userconfirmpass')}}" class="form-control @error('userconfirmpass') is-invalid @enderror " id="cpwd" name="userconfirmpass">
  <span class="text-danger">
    @error('userconfirmpass')
      {{ $message}}
    @enderror
   </span>
  </div>
  
  <div class="form-group">
    <label for="city">City:</label>
    <input type="text "value="{{old('usercity')}}" class="form-control @error('usercity') is-invalid @enderror " id="city" name="usercity">
  <span class="text-danger">
    @error('usercity')
      {{ $message}}
    @enderror
   </span>
  </div>
  
  <div class="form-group">
    <label for="address">Address:</label>
    <input type="text" value="{{old('useraddress')}}" class="form-control @error('useraddress') is-invalid @enderror " id="address" name="useraddress">
  <span class="text-danger">
    @error('useraddress')
      {{ $message}}
    @enderror
   </span>
  </div>
  
  <button type="submit" class="btn btn-primary mt-2">Submit</button>
</form>
        </div>
    </div>
   </div>
@endsection