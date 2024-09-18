@extends('layouts.masterLayout')


@section('content')

<h1>All user List Using Query builder</h1>

    <div class="container">
        <a href="/adduser" class="btn btn-primary mb-2">Add</a>
        <div class="row">
          <div>
                Total Records: {{$data->total()}}
                </div>
         <div class="col-12">
                <table class="table table-striper table-hover">
                <tr>
                  
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Password Confirmation</th>
                    <th>City</th>
                    <th>Address</th>
                    <th class="text-center">Action</th>
                </tr>
                
                @foreach ($data as $id => $user)
                    
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->password}}</td>
                        <td>{{$user->password_confirmation}}</td>
                        <td>{{$user->city}}</td>
                        <td> {{$user->address}} </td>
                        <td> <a href="{{route('singleUser', $user->id)}}" class="btn btn-primary badge btn-sm">View</a>
                         <a href="{{route('deleteUser', $user->id)}}" class="btn btn-danger badge btn-sm">Delete</a>
                         <a href="{{route('updateuserform', $user->id)}}" class="btn btn-warning badge btn-sm">Update</a> </td>
                    </tr>
                    @endforeach  
                </table>
                <div>
                    {{$data->links()}}
                </div>
            </div>
        </div>
    </div>
@endsection
