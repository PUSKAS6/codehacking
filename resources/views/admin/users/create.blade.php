@extends('layouts.admin')


@section('content')
    <h1>Create Users</h1>


    <form action="{{ route('admin.users.store') }}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" class="form-control">
        </div>
        <!-- ./.form-group -->



        <div class="form-group">
            <label for="email">E-mail:</label>
            <input type="email" name="email" id="email"  class="form-control">
        </div>
        <!-- ./.form-group -->

        <div class="form-group">
            <label for="role_id">Role:</label>
            <input type="text" name="role_id"  class="form-control">

            {{--<select name="role_id" id="role_id">--}}
        {{--@foreach($roles as $role)--}}
        {{--<option value="{{ $role->id }}">{{ $role->name }}</option>--}}
        {{--@endforeach--}}
        {{--</select>--}}
        </div>



        <div class="form-group">
            <label for="is_active">Is Active:</label>
            <select name="is_active" id="is_active">
                <option value="1">Active</option>
                <option value="0">Not Active</option>
            </select>
        </div>
        <!-- ./.form-group -->

        <div class="form-group">
            <label for="photo_id">Photo:</label>
            <input type="file" name="photo_id" id="photo_id"  class="form-control">
        </div>
        <!-- ./.form-group -->

        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" name="password" id="password"  class="form-control">
        </div>
        <!-- ./.form-group -->

        <div class="form-group">
            <button class="btn btn-primary" type="submit" name="submit">Create Users</button>
        </div>
        <!-- ./.form-group -->

    </form>

@include('includes.form_error')


@stop