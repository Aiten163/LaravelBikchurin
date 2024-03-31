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
<table>
    <tr>
        <td>
            ID
        </td>
        <td>
            Заголовок
        </td>
        <td>
            Краткое описание
        </td>
    </tr>
@foreach($posts as $post)
        <tr>
            <td>
                {{$post->id}}
            </td>
            <td>
                <a href="http://laravelbikchurin/post/{{$post->id}}">{{$post->title}}</a>
            </td>
            <td>
                {{$post->desc}}
            </td>
            <td>
                <a href="http://laravelbikchurin/post/edit/{{$post->id}}"><button>Редактировать</button></a>
            </td>
            <td>
                <a href="http://laravelbikchurin/post/del/{{$post->id}}"><button>Удалить</button></a>
            </td>
        </tr>
@endforeach
</table>
</body>
</html>
