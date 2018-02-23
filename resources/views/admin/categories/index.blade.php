@extends('layouts.admin')




@section('content')

    <h1>Categories</h1>
    <div class="col-sm-6">
        <form action="{{ route('admin.categories.store') }}", method ="post"  enctype ="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name"  id="name" class="form-control">
            </div>

            <div class="form-group">
                <button class="btn btn-primary" type="submit" name="submit">Create Category</button>
            </div>
        </form>
    </div>

    <div class="col-sm-6">

{{--<table class="table">--}}
    {{--<thead>--}}
      {{--<tr>--}}
        {{--<th>Firstname</th>--}}
        {{--<th>Lastname</th>--}}
        {{--<th>Email</th>--}}
      {{--</tr>--}}
    {{--</thead>--}}
    {{--<tbody>--}}
      {{--<tr>--}}
        {{--<td>John</td>--}}
        {{--<td>Doe</td>--}}
        {{--<td>john@example.com</td>--}}
      {{--</tr>--}}

    {{--</tbody>--}}
  {{--</table>--}}


    @if($categories)
        <table class="table">
            <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Created Date</th>
            </tr>
            </thead>
            <tbody>
            @foreach($categories as $category)

                <tr>
                    <td>{{$category->id}}</td>
                    <td>{{$category->name}}</td>
                    <td>{{$category->created_at ? $category->created_at->diffForHumans() : 'no date'}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>

    @endif
    </div>
@stop