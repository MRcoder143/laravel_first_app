@extends('layouts.masterLayout')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
        <h1>all students</h1>
                    {{$students->links()}}

            <table class="table table-striped table-hover">
            <tr>
                <th>Id</th>
                <th>Student Name</th>
                <th>Email</th>
                <th>City</th>
                <th>Create At</th>
                <th>Update At</th>
            </tr>
            
            @foreach ($students as $item)
                <tr> 
                    <td>{{$item->id}}</td>
                    <td>{{$item->stu_name}}</td>
                    <td>{{ $item->stu_email }}</td>
                    <td>{{ $item->city_name }}</td>
                    <td>{{$item->created_at}}</td>
                    <td>{{$item->updated_at}}</td>
                </tr>
@endforeach   
            </table>
            {{$students->links()}}
        </div>
    </div>
</div>

 
@endsection
