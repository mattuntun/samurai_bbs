@extends('layouts.layouts')

@section('title','Simple Board')

@section('content')


    <form action="/posts" method="post">
    {{csrf_field()}}
        <input type="text" name="title">
        <input type="text" name="content">
        <input type="submit">
    </form>

@endsection
