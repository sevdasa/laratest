<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table{
            padding: 10px;
            background-color: #eee;
        }
        th{
            text-align: center;
            width: 10%;
            background-color: #fff;
            padding: 10px;

        }
        th:first-child{
            text-align: center;
            width: 1%;
            background-color: #fff;
        }
        td{
            text-align: center;
            padding: 10px;
        }

    </style>
</head>
<body>

<table style="width:100%;border:1px solid #ccc">
    <tr>
        <th style="text-align: center">id</th>
        <th>author</th>

        <th>title</th>
        <th>content</th>
        <th>action</th>

    </tr>

    @foreach($posts as $post)
        <tr>
            <td> {{$post ->id }} </td>
            <td>{{$post->user->name}}</td>

            <td>{{$post->title}}</td>


            <td>{{$post->content}}</td>


{{--            <td>{{$post->user->name}}</td>--}}

            <td><a href="{{route('clientPosts.edit',[$post->id])}}">edit</a></td>

        </tr>
    @endforeach

</table>

@if($errors->sucess)
    <ul>
        @foreach($errors->sucess->all() as $error)
            <li style="list-style: none;text-align: center"><div class="sucess" style="background-color:#2d995b;width:300px;height:100px">{{$error}}</div></li>
        @endforeach
    </ul>
@endif



</body>
</html>

