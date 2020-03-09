<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

@if(session('message'))
    {{session('message')}}
@endif

{{$post->title}}
{{$post->content}}

<a href="/posts/{{$post->id}}/edit">Edit</a>
<a href="/posts">index</a>


</body>
</html>