@extends('layouts.masterLayout')

@section('content')

   
    <div class="container">
     <h2>Update Customer Using Eloquent ORM</h2>
        <div class="row">
            <div class="col-6">
                    <form action="{{route('customers.update',$customer->customer_id)}}" method="post">
    @csrf
    @method('put')
  <div class="form-group">
    <label for="name">Name:</label>
    <input type="text" value="{{$customer->name}}" class="form-control" id="name" name="cname">
  </div>
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" value="{{$customer->email}}" class="form-control" id="email" name="cemail">
  </div>
  <div class="form-group">
    <label for="phone">Phone:</label>
    <input type="text" value="{{$customer->phone}}" class="form-control" id="phone" name="cphone">
  </div>
  <div class="form-group">
    <label for="city">City:</label>
    <input type="text" value="{{$customer->city}}" class="form-control" id="city" name="ccity">
  </div>
  <div class="form-group">
    <label for="address">Address:</label>
    <input type="text" value="{{$customer->address}}" class="form-control" id="address" name="caddress">
  </div>
  <button type="submit" class="btn btn-warning mt-3">Update</button>
</form>
            </div>
        </div>
    </div>
@endsection