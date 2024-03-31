<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="/post/edit/{{$post->id}}" method="POST">
    @csrf
    Заголовок <input name="title" value="{{$post->title}}">
    <br> Описание <input name="desc" value="{{$post->desc}}" >
    <br> Дата <input type="date" value="{{$post->date}}" name="date">
    <br> Текст <textarea name="text">{{$post->text}}</textarea>
    <br><input name="submit" type="submit">
</form>

</body>
</html>
