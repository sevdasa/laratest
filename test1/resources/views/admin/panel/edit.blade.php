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

    <h1>hello {{auth()->user()->name}}</h1>
<form action="{{route('paneladmin.update',[$user])}}" method="post">
    @csrf
    @method('put')

    @if($errors ->faild)
        <ul>
            @foreach($errors->all() as $error)
                <li style="list-style: none;text-align: center"><div class="alert alert-danger" style="background-color: red;width:300px;height:40px">{{$error}}</div> </li>
            @endforeach
        </ul>
    @endif

    <div class="form-group row">
        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('email') }}</label>
        <div class="col-md-6">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"  name="email" value="{{$user->email}}"  autocomplete="email" autofocus>
        </div>
    </div>

    <div class="form-group row">
        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('password') }}</label>
        <div class="col-md-6">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"  name="password" value="{{ null }}"  autocomplete="password" autofocus>
        </div>
    </div>
    <div class="form-group row">
        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('password repeat') }}</label>
        <div class="col-md-6">
            <input id="password" type="text" class="form-control @error('password') is-invalid @enderror"  name="password_confirmation" value="{{ null }}"   autofocus>
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
