@extends('layouts.layouts')

@section('title','Simple Board')

@section('content')

<h1>New Post</h1>

@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif

    <form action="/posts" method="post">
    {{csrf_field()}}

    <div class="form-group">
        <label for="exampleInputEmail1">Title</label>
        <input type="text" class="form-control" ariadescribedby="emailHelp" name="title" value="{{old('title')}}">
    </div>
    <div class="form-group">
        <label for="exampleInputPasswoed1">Content</label>
        <textarea class="form-control" name="content" value="{{old('title')}}"></textarea>    
    </div>

        <button type="submit" class="btn btn-outline-primary">Submit</button>

    </form>

@endsection
