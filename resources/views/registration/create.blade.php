@extends('layouts.master')

@section('content')
    <div class="col-md-6 offset-md-3">
        <h3>Sign up</h3>
        <form action="/register" method="post">
            {{ csrf_field() }}
            @include('layouts.errors')
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control" name="name" id="name" required>
            </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" name="email" id="email" required>
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" name="password" id="password" required>
            </div>
            <div class="form-group">
                <label for="password">Confirm Password</label>
                <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" required>
              </div>
            <button type="submit" class="btn btn-success">Sign up</button>
        </form>
    </div>
@endsection