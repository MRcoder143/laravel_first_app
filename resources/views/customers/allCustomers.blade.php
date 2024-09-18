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
                        <td>{{$item->customer_id}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->email}}</td>
                        <td>{{$item->city}}</td>
                        <td>{{$item->address}}</td>
                        <td>{{$item->phone}}</td>
                        <td>
                        <a href="{{route('customers.show',$item->customer_id)}}" class="btn btn-success badge">View</a>
                        </td>
                       <td>
                        <a href="{{route('customers.edit',$item->customer_id)}}" class="btn btn-warning badge">Edit</a>
                        </td>
                        <td>
                        <form action="{{route('customers.destroy',$item->customer_id)}}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger badge">Delete</button>
                        </form>
                        </td>
                    </tr>
                    @endforeach
                    </table>
           
            </div>
        </div>
        {{$customers->links()}}
    </div>
    
@endsection
