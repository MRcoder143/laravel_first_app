@extends('layouts.masterLayout')
@section('content')
<h1>Customer List Using Eloquent ORM</h1>

    <a href="{{route('customers.create')}}" class="btn btn-primary mb-3">Add New</a>

    <div class="container">
        <div class="row">
            @if (session('status'))
            <div class="alert alert-success">
                {{session('status')}}
            </div>
                 
            @endif
        </div>
    </div>

    <div class="container">
        <div class="row">

            <div class="col-12">
                
                <table class="table table-striped table-hover">
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>City</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Action</th>
                </tr>
                @foreach ($customers as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->email}}</td>
                        <td>{{$item->city}}</td>
                        <td>{{$item->address}}</td>
                        <td>{{$item->phone}}</td>
                        <td>
                        <a href="{{route('customers.show',$item->id)}}" class="btn btn-success">View</a>
                        <a href="{{route('customers.edit',$item->id)}}" class="btn btn-warning">Edit</a>
                        <a href="" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                    </table>
           
            </div>
        </div>
    </div>
    
@endsection
