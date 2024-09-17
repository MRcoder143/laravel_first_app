
<h1>User Detail</h1>
@foreach ($data as $user)
        <h3>Id: {{$user->id}}</>
        <h3>Name: {{$user->name}}</h3>
        <h3>Email: {{$user->email}}</h3>
        <h3>Password: {{$user->password}}</h3>
        {{-- <h3>{{$user->password_confirmation}}</h3> --}}
        <h3>City: {{$user->city}}</h3>
        <h3>Address: {{$user->address}} </h3> 
@endforeach
