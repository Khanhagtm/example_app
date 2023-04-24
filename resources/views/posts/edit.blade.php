<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update post page</title>
</head>
<body>
<h1>Update this post</h1>
<form action="/post/{{$post->id}}" method="post">
    @csrf
    @method('put')
    <p>Post title</p>
    <input type="text" name="title" value="{{ $post->title }}" >
    <br>
    <p>Post content</p>
    <textarea name="content" >{{ $post->content }}</textarea>
    <br>
    @foreach($tags as $tag)
        <input type="checkbox" value="{{$tag->id}}" name="tags[]" {{ $post->tags->contains($tag)  ? "checked" : ""}}> {{$tag->name}} <br>
    @endforeach
    <br>
    <button type="submit">Create</button>
</form>
</body>
</html>
