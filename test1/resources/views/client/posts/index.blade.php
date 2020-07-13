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
        <th>title</th>
        <th>content</th>
        <th>status</th>
        <th>author</th>
        <th>tags</th>
        <th>action</th>

    </tr>

    @foreach($posts as $post)
        <tr>
            <td> {{$post ->id }} </td>

            <td>{{$post->title}}</td>

            <td>{{$post->content}}</td>

            <td>{{$post->status}}</td>
            <td>{{$post->author}}</td>

            {{--            {{ $user = App\User::find($post)}}--}}
{{--         <td>   @foreach($user = App\User::find(id))--}}
        <td>
            @foreach($post->tags as $tag)
            {{$tag->name}}
            @endforeach
          </td>

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
{{--        <form method="post" action="">--}}
{{--            @csrf--}}

{{--            <div class="form-group row">--}}
{{--                <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('title') }}</label>--}}
{{--                <div class="col-md-6">--}}
{{--                    <input id="title" type="text" class="form-control"  name="title" value="{{ $post -> title}}">--}}
{{--                </div>--}}

{{--            </div>--}}

{{--            <div class="form-group row">--}}
{{--                <label for="content" class="col-md-4 col-form-label text-md-right">{{ __('content') }}</label>--}}
{{--                <div class="col-md-6">--}}
{{--                    <input id="content" type="text" class="form-control"  name="content" value="{{ $post->content }}">--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="form-group row">--}}
{{--                <label for="author" class="col-md-4 col-form-label text-md-right">{{ __('author') }}</label>--}}
{{--                <div class="col-md-6">--}}
{{--                    <input id="author" type="text" class="form-control"  name="author" value="{{ $post->author }}">--}}
{{--                </div>--}}
{{--            </div>--}}


{{--            <div class="form-group row">--}}
{{--                <label for="status" class="col-md-4 col-form-label text-md-right">{{ __('status') }}</label>--}}
{{--                <div class="col-md-6">--}}
{{--                    <input id="status" type="text" class="form-control"  name="status" value="{{ $post->status }}">--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </form>--}}





</body>
</html>

