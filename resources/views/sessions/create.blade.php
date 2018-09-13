@extends('layouts.master')

@section('content')
    <div class="col-md-6 offset-md-3">
        <h3>Login</h3>

        <form action="/login" method="post">
            {{ csrf_field() }}
            
            @include('layouts.errors')

            <div class="form-group">
              <label for="email">Email</label>
              <input type="text" class="form-control" name="email" id="email" required>
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" name="password" id="password" >
            </div>
            <button type="submit" class="btn btn-success">Login</button>
        </form>
    </div>
@endsection