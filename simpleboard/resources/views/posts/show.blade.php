@extends('layouts.layouts')

@section('title','Simple Board')

@section('content')

    @if(session('message'))
        {{session('message')}}
    @endif

    <div class="card">
        <div class="card-body">
            <h5 class="card-body">{{ $post->title }}</h5>
            <p class="card-text">{{ $post->content }}</p>

            <div class="d-flex" style="height:36.4">
                <button class="btn btn-outline-primary">Show</button>
                <a href="/posts/{{$post->id}}/edit" class="btn btn-outline-primary">Edit</a>
                <form action="/posts/{{$post->id}}" method="post" onsubmit="if(confirm('Delete? Are you sure?')) {return true} else {return false};"></form>
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <button type="submit" class="btn btn-outline-danger">DELETE</button>
            </div>        
        </div>
    </div>

    <a href="/posts/{{$post->id}}/edit">Edit</a>
    <a href="/posts">index</a>


@endsection