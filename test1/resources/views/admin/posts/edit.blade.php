<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>admineditPost</title>
    <style>

    </style>
</head>
<body>
<form action="{{route('posts.update',[$post])}}" method="post">
    @csrf
    @method('put')

    @if($errors ->faild)
        <ul>
            @foreach($errors->faild->all() as $error)
                <li style="list-style: none;text-align: center"><div class="faild" style="background-color: red;width:300px;height:40px">{{$error}}</div> </li>
            @endforeach
        </ul>
    @endif

    <div class="form-group row">
        <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('title') }}</label>
        <div class="col-md-6">
            <input id="title" type="text" class="form-control @error('status') is-invalid @enderror"  name="title" value="{{$post->title}}"  autocomplete="title" autofocus>
        </div>
    </div>

    <div class="form-group row">
        <label for="content" class="col-md-4 col-form-label text-md-right">{{ __('content') }}</label>
        <div class="col-md-6">
            <input id="content" type="text" class="form-control @error('status') is-invalid @enderror"  name="content" value="{{ $post->content }}"  autocomplete="content" autofocus>
        </div>
    </div>
    <div class="form-group row">
        <label for="status" class="col-md-4 col-form-label text-md-right" >{{ __('status') }}</label>

        <div class="col-md-6">
            <select name="status" class="form-control" >
                <option value="">وضعیت پست :</option>
                <option value="deleted" name="status">deleted</option>
                <option value="verified" name="status">verified</option>

            </select>
        </div>
    </div>


    <button >edit</button>
</form>

{{--<form action="{{ route('posts.delete') }}" method="post">--}}
{{--    @csrf--}}
{{--    @method('delete')--}}
{{--    <button >delete</button>--}}
{{--</form>--}}
</body>
</html>
