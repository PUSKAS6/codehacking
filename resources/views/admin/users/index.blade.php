@extends('layouts.admin')




@section('content')

@if(Session::has('deleted_user'))

    <p class="bg-danger">{{session('deleted_user')}}</p>

@endif
    <h1>Users</h1>


    <table class="table">
        <thead>
        <tr>
            <th>Id</th>
            <th>Photo</th>
            <th>Name</th>
            <th>Email</th>
            <th>Role</th>
            <th>Active</th>
            <th>Created at</th>
            <th>Updated at</th>
        </tr>
        </thead>
        <tbody>
        @if($users)

            @foreach($users as $user)

        <tr>
            <td>{{$user->id}}</td>
            <td> <img height="30" src="{{$user->photo ? $user->photo->file : 'http://placehold.it/400x400'}}" alt=""></td>
            <td><a href="{{route('admin.users.edit', $user->id)}}">{{$user->name}}</a></td>
            <td>{{$user->email}}</td>
            <td>{{$user->role ? $user->role->name : 'User has no role'}}</td>
            <td>{{$user->is_active == 1 ? 'Active' : 'Not Active' }}</td>
            <td>{{$user->created_at}}</td>
            <td>{{$user->updated_at}}</td>
        </tr>

        @endforeach

        @endif
        </tbody>
    </table>




@stop