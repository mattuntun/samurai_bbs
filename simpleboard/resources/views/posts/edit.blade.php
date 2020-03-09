<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="/posts/{{$post->id}}" method="post">
{{csrf_field()}}
    <input type="hidden" name="_method" value="PUT">
    <input type="text" name="title" value="{{$post->title}}">
    <input type="text" name="content" value="{{$post->content}}">
    <input type="submit">
</form>

</body>
</html>