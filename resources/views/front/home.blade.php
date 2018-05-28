@extends('layouts.blog-home')

@section('content')
    <div class="container">
    {{--<div class="container">--}}
    <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">
@if($posts)

    @foreach($posts as $post)

            <h2>
                <a href="#">{{$post->title}}</a>
            </h2>
            <p class="lead">
                by {{$post->user->name}}</a>
            </p>
            <p><span class="glyphicon glyphicon-time"></span>{{$post->created_at->diffForHumans()}}</p>
            <hr>
            <img class="img-responsive" src="http://placehold.it/900x300" alt="">
            <hr>
            <p>{{str_limit($post->body, 5)}}</p>
            <a class="btn btn-primary" href="{{route('home.post', $post->id)}}">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

            <hr>
@endforeach
@endif
            <!-- Pagination -->
<div class="row">
    <div class="col-sm-6 col-sm-offset-5">
{{$posts->render()}}
    </div>
</div>
        </div>

        <!-- Blog Sidebar Widgets Column -->
        @include('includes.sidebar')

    </div>
    <!-- /.row -->
    </div>

@endsection
