@extends('layouts.master')

@section('content')
<div class="col-md-8 offset-md-2">
    <form action="/create" method="post" enctype="multipart/form-data" >
        {{ csrf_field() }}

        @include('layouts.errors')

        <div class="form-group">
          <label for="">Title</label>
          <input type="text" class="form-control" name="title" id="title" required>
        </div>

        <div class="form-group">
          <label for="">Body</label>
          <textarea class="form-control" name="body" id="body" rows="3"></textarea>
        </div>

        <div class="form-group">
          <label for="image">Post Image</label>
          <input type="file" class="form-control-file" name="image" id="image" >
        </div>

        <button type="submit" class="btn btn-primary">Publish</button>
    </form>
  </div>

  <script src="https://cdn.ckeditor.com/4.10.0/standard/ckeditor.js"></script>


<script>
    CKEDITOR.replace( 'body' );
</script>

@endsection