@extends('layouts.master')

@section('content')

<div class="col-md-8 offset-md-2">
    <h4 class="text-center">Edit post</h4>
    <form action="/edit" method="post">
        {{ csrf_field() }}

        @include('layouts.errors')

        <input type="hidden" name="id" value="{{$post->id}}">

        <div class="form-group">
          <label for="">Title</label>
          <input type="text" class="form-control" name="title" id="title" value="{{$post->title}}" required>
        </div>

        <div class="form-group">
          <label for="">Body</label>
          <textarea class="form-control" name="body" id="body" rows="3">{{$post->body}}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection