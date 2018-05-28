@extends('layouts.admin')


@section('content')

    @include('includes.tinyeditor')

    <h1>Create Post</h1>
<div class="row">

    <form action="{{ route('admin.posts.store') }}", method ="post"  enctype ="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name"  id="name" class="form-control">
        </div>
        <!-- ./.form-group -->



        <div class="form-group">
            <label for="category_id">Category:</label>

            <select name="category_id" id="category_id" class="form-control">
                <option value="1">PHP</option>

                <option value="2">JAVASCRIPT</option>



            </select>


        </div>



        {{--<div class="form-group">--}}
            {{--<label for="category_id">Category:</label>--}}
            {{--<select name="category_id" id="category_id" class="form-control" >--}}
                {{--<option value="1">Active</option>--}}
                {{--<option value="0">Not Active</option>--}}
            {{--</select>--}}
        {{--</div>--}}
        <!-- ./.form-group -->

        <div class="form-group">
            <label for="photo_id">Photo:</label>
            <input type="file" name="photo_id"   id="photo_id"class="form-control" >
        </div>
        <!-- ./.form-group -->

        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" name="title"  id="title" class="form-control">
        </div>
        <!-- ./.form-group -->

        <div class="form-group">
            <label for="body">Description:</label>
            <textarea name="body" rows="3" id="body" class="form-control" ></textarea>
        </div>
        <!-- ./.form-group -->

        <div class="form-group">
            <button class="btn btn-primary" type="submit" name="submit">Create Post</button>
        </div>
        <!-- ./.form-group -->

    </form>
</div>

<div class="row">
    @include('includes.form_error')

</div>
@stop