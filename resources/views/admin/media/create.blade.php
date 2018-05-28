@extends('layouts.admin');

@section('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.2.0/min/dropzone.min.css">

    @stop

@section('content')
    <h1>Upload Media</h1>

    <form action="{{ route('admin.media.store') }}", method ="post" class='dropzone' enctype ="multipart/form-data">
        {{ csrf_field() }}
    </form>
@stop

@section('scripts')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.2.0/min/dropzone.min.js"></script>


@stop