@extends('layouts.admin')


@section('content')
    <h1>Edit Post</h1>
    <div class="row">

        <div class="col-sm-3">


            <img src="{{$post->photo ? $post->photo->file : 'http://placehold.it/400x400'}}" alt="" class="img-responsive img-rounded">


        </div>

        <div class="col-sm-9">

        <form action="{{ route('posts.update', ['id' => $post->id]) }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}

            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" value="{{ $post->user->name }}" id="name" class="form-control">
            </div>
            <!-- ./.form-group -->



            {{--<div class="form-group">--}}
                {{--<label for="category_id">Category:</label>--}}


    {{--@foreach($categories as $category)--}}

        {{--<option value=co"{{$category['id']}}">{{$category['name'] }}</option>--}}

    {{--@endforeach--}}

            {{--</div>--}}
            {{--<div class="form-group">--}}
                {{--<label for="category_id">Category</label>--}}
                {{--<input type="text" name="category_id" value="{{ $post->category_id }}"  class="form-control">--}}
                {{--<select name="category_id"  id="category_id->name" >"class="form-control">--}}
                    {{--<option value="1">PHP</option>--}}
                    {{--<option value="2">LARAVEL</option>--}}
                {{--</select>--}}
            {{--</div>--}}
            <div class="form-group">
                <label for="category_id">Category:</label>
                <input type="text" name="category_id" value="{{ $post->category->name }}" id="category_id" class="form-control">
                <select name="category_id"  id="category_id->name" >"class="form-control">
                <option value="1">PHP</option>
                <option value="2">LARAVEL</option>
                </select>
            </div>




            <div class="form-group">
                <label for="photo_id">Photo:</label>
                <input type="file" name="photo_id"   id="photo_id" class="form-control" >
            </div>
            <!-- ./.form-group -->

            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" name="title" value="{{ $post->title}}" id="title" class="form-control">
            </div>
            <!-- ./.form-group -->

            <div class="form-group">
                <label for="body">Description:</label>
                <textarea name="body"   id="body"  rows="3" class="form-control" >{{ $post->body }}
                </textarea>
            </div>
            <!-- ./.form-group -->

            <div class="form-group">
                <button class="btn btn-primary " type="submit" name="submit">Create Post</button>
            </div>
            <!-- ./.form-group -->

        </form>

            <form action="{{ route('posts.destroy', ['id' => $post->id]) }}" method="post">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}

                <div class="form-group">
                    <button type="submit" name="submit" class="btn btn-danger ">Delete Post</button>
                </div>
                <!-- ./.form-group -->
            </form>
    </div>
    </div>
    <div class="row">
        @include('includes.form_error')

    </div>
@stop