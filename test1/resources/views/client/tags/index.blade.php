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
<table style="width:100%;border:1px solid #ccc">
    <tr>
        <th style="text-align: center">id</th>
        {{--        <th>post</th>--}}
        <th>tags</th>
        {{--        <th>author</th>--}}
        {{--        <th>action</th>--}}

    </tr>

    @foreach($tags as $tag)
        <tr>
            <td> {{$tag->id }} </td>

            <td>{{$tag->name}}</td>

            {{--            <td>{{$post->content}}</td>--}}

            {{--            <td>{{$post->status}}</td>--}}
            {{--            {{ $user = App\User::find($post)}}--}}
            {{--            @foreach($user = App\User::find(id))--}}
            {{--            <td>{{$post->user->name}}</td>--}}
            {{--            <td><a href="{{route('clientPosts.edit',[$post->id])}}">edit</a></td>--}}

        </tr>
    @endforeach

</table>

</body>
</html>
