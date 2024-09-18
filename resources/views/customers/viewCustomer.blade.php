@extends('layouts.masterLayout')
@section('content')
<h1>View Customer Using Eloquent ORM</h1>
   <div class="container">
        <div class="row">

            <div class="col-6">
                
                <table class="table table-bordered">
                    <tr>
                        <th width="150px">Name :</th>
                        <td>{{$cus->name}}</td>
                    </tr>
                    <tr>
                        <th>Email :</th>
                        <td>{{$cus->email}}</td>
                    </tr>
                    <tr>
                        <th>Phone :</th>
                        <td>{{$cus->phone}}</td>
                    </tr>
                    <tr>
                        <th>City :</th>
                        <td>{{$cus->city}}</td>
                    </tr>
                    <tr>
                        <th>Address :</th>
                        <td>{{$cus->address}}</td>
                    </tr>
                </table>
           
            </div>
        </div>
    <a href="{{route('customers.index')}}" class="btn btn-primary">back</a>
    
    </div>
   
@endsection
