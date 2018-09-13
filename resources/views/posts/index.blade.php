@extends('layouts.master')

@section('content')

    @foreach ($posts as $post)
    <div class="row">
            <div class="col-md-4">
                <img class="img-thumbnail" src="/images/{{$post->image}}" alt="" > 
            </div>
            <div class="col-md-8" id="post-content">
                <h3><a href="/{{$post->id}}">{!! $post->title !!}</a></h3>
                <p>{!! str_limit($post->body, $limit = 150, $end = '...') !!}</p>
                <a href="/{{$post->id}}">Read more</a>
            </div>
    </div>
    <hr>
    @endforeach
    {{$posts->links()}}
@endsection
