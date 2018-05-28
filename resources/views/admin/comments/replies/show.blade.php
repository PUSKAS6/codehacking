@extends('layouts.admin')

@section('content')



@if(count($replies) > 0)

        <h1>Replies</h1>

        <table class="table">
            <thead>
            <tr>
                <th>id</th>
                <th>Author</th>
                <th>Email</th>
                <th>Body</th>
            </tr>
            </thead>
            <tbody>

        @foreach($replies as $reply)

                    <tr>
                        <td>{{$reply->id}}</td>
                        <td>{{$reply->author}}</td>
                        <td>{{$reply->email}}</td>
                        <td>{{$reply->body}}</td>
                        <td><a href="{{route('home.post',$reply->comment->post->id)}}">View Post</a></td>

                        <td>

            @if($reply->is_active == 1)

                                <form action="{{ route('admin.comment.replies.update', ['id' => $reply->id]) }}", method ="post"  enctype ="multipart/form-data">
                                    {{ csrf_field() }}
                                    {{ method_field('PATCH') }}

                                    {{--<form role="form">--}}
                                    <input type="hidden" name="is_active" value="0">

                                    <div class="form-group">
                                        <button class="btn btn-danger " type="submit" name="submit">Not Approved</button>
                                    </div>

                                </form>

                @else

                                <form action="{{ route('admin.comment.replies.update', ['id' => $reply->id]) }}", method ="post"  enctype ="multipart/form-data">
                                    {{ csrf_field() }}
                                    {{ method_field('PATCH') }}

                                    {{--<form role="form">--}}
                                    <input type="hidden" name="is_active" value="1">

                                    <div class="form-group">
                                        <button class="btn btn-success " type="submit" name="submit">Approved</button>
                                    </div>

                                </form>

            @endif
                        </td>

                        <td>

                                <form action="{{ route('admin.comment.replies.destroy', ['id' => $reply->id]) }}", method ="post"  enctype ="multipart/form-data">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}

                                    {{--<form role="form">--}}

                                    <div class="form-group">
                                        <button class="btn btn-danger " type="submit" name="submit">Delete</button>
                                    </div>

                                </form>
                        </td>

                    </tr>


        @endforeach

            </tbody>
        </table>


            @else
        <h1 class="text-center">NO REPLIES</h1>
@endif

@stop