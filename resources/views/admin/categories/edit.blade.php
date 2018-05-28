@extends('layouts.admin')




@section('content')

    <h1>Categories</h1>
    <div class="col-sm-6">
        <form action="{{ route('categories.update', ['id' => $category->id]) }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name"  id="name" class="form-control">
            </div>

            <div class="form-group">
                <button class="btn btn-primary" type="submit" name="submit">Update Category</button>
            </div>
        </form>
    </div>

    <div class="col-sm-6">
        <form action="{{ route('categories.destroy', ['id' => $category->id]) }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}


            <div class="form-group">
                <button type="submit" name="submit" class="btn btn-danger ">Delete Category</button>
            </div>
        </form>

    </div>
@stop