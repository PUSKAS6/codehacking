@extends('layouts.admin')

@section('content')
    @if(count($comments) > 0)
  <h1>Comments</h1>





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

@foreach($comments as $comment)
        <tr>
          <td>{{$comment->id}}</td>
          <td>{{$comment->author}}</td>
          <td>{{$comment->email}}</td>
          <td>{{$comment->body}}</td>
          <td><a href="{{route('home.post', $comment->post->id)}}">View Post</a></td>
            <td><a href="{{route('admin.comment.replies.show', $comment->id)}}">View Replies</a></td>
          <td>

    @if($comment->is_active ==1)

              <form action="{{ route('comments.update', ['id' => $comment->id]) }}", method ="post"  enctype ="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('PATCH') }}

                {{--<form role="form">--}}
                 <input type="hidden" name="is_active" value="0">
                    <div class="form-group">
                        <button class="btn btn-danger " type="submit" name="submit">Not Approved</button>
                    </div>
                </form>
        @else
                  <form action="{{ route('comments.update', ['id' => $comment->id]) }}", method ="post"  enctype ="multipart/form-data">
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
            <form action="{{ route('comments.destroy', ['id' => $comment->id]) }}", method ="post"  enctype ="multipart/form-data">
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

    <h1 class="text-center">NO COMMENT</h1>
  @endif
    @stop