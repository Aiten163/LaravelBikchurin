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
<form method="post" action="/post/new">
    @csrf
    <p>Заголовок <input type="text" name="title"></p>
    <p>Описание <input type="text" name="desc"></p>
    <p>Текст <textarea type="text" name="text"> </textarea></p>
    <p><input type="submit"></p>
</form>
</body>
</html>
