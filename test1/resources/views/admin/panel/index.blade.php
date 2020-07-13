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
{{--        <th>id</th>--}}
        <th>name</th>
        <th>level</th>
        <th>email</th>
        <th>password</th>

    </tr>


        <tr>
            <td> {{$user ->id }} </td>

            <td>{{$user->name}}</td>

            <td>{{$user->level}}</td>

            <td>{{$user->email}}</td>

            <td>password</td>

            <td><a href="{{route('paneladmin.edit',[$user->id])}}" style="color:#2d995b;">edit your profile</a></td>
            <td>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" >
                    @csrf
                    <button>logout</button>

                </form>
            </td>


            <td>
{{--                <form action="{{route('panel.destroy',[$user])}}" method="post">--}}
{{--                    @method('delete')--}}
{{--                    @csrf--}}
{{--                    <button type="submit">delete</button>--}}
{{--                </form>--}}
            </td>

        </tr>

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

