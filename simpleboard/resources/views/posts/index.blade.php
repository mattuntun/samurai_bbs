<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Posts</h1>

@foreach($posts as $post)
    <a href="/posts/{{ $post->id }}">{{$post->title}}</a>
    <a href="/posts/{{ $post->id }}">{{$post->content}}</a>
    <a href="/posts/{{ $post->id }}/edit">Edit</a>

    <form action="/posts/{{ $post->id }}" method="POST" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else { return false };">
        <input type="hidden" name="_method" value="DELETE">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <button type="submit">Delete</button>
    </form>
@endforeach

<a href="/posts/create">New Post</a>




    
</body>
</html>