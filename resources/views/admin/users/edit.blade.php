
@extends('layouts.admin')




@section('content')


    <h1>Edit User</h1>


    <div class="row">


        <div class="col-sm-3">


            <img src="{{$user->photo ? $user->photo->file : 'http://placehold.it/400x400'}}" alt="" class="img-responsive img-rounded">


        </div>


        <div class="col-sm-9">


            <form action="{{ route('users.update', ['id' => $user->id]) }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('PATCH') }}

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" value="{{ $user->name }}" id="name" class="form-control">
                </div>
                <!-- ./.form-group -->

                <div class="form-group">
                    <label for="email">E-mail:</label>
                    <input type="text" name="email" value="{{ $user->email }}"  id="email" class="form-control">
                </div>
                <!-- ./.form-group -->

                <div class="form-group">
                    <label for="role_id">Role</label>
                    {{--<input type="text" name="role_id"  class="form-control">--}}
                    <select name="role_id" value="{{ $user->role_id }}" id="role_id" class="form-control">
                        <option value="1">Administrator</option>
                        <option value="2">sUBSCRIBER</option>
                    </select>
                </div>


                <div class="form-group">
                    <label for="is_active">Is active?</label>
                    <select name="is_active" value="{{ $user->is_active }}" id="is_active" class="form-control">
                        <option value="0">Inactive</option>
                        <option value="1">Active</option>
                    </select>
                </div>
                <!-- ./.form-group -->

                <div class="form-group">
                    <label for="photo_id">Photo:</label>
                    <input type="file" name="photo_id"    id="photo_id" class="form-control">

                </div>
                <!-- ./.form-group -->

                 <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" name="password"  id="password"  class="form-control">
                </div>
                <!-- ./.form-group -->

                <div class="form-group">
                    <button type="submit" name="submit" class="btn btn-success">Update</button>
                </div>
                <!-- ./.form-group -->
            </form>

            <form action="{{ route('users.destroy', ['id' => $user->id]) }}" method="post">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}

                <div class="form-group">
                    <button type="submit" name="submit" class="btn btn-danger">Delete</button>
                </div>
                <!-- ./.form-group -->
            </form>


        </div>


    </div>



    <div class="row">

        @include('includes.form_error')


    </div>





@stop
