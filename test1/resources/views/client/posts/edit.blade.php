<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>admineditPost</title>
</head>
<body>
<form action="{{route('clientPosts.update',[$post])}}" method="post">
    @csrf
    @method('put')
    <div class="form-group row">
        <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('title') }}</label>
        <div class="col-md-6">
            <input id="title" type="text" class="form-control"  name="title" value="{{$post->title}}" required autocomplete="title" autofocus>
        </div>
    </div>

    <div class="form-group row">
        <label for="content" class="col-md-4 col-form-label text-md-right">{{ __('content') }}</label>
        <div class="col-md-6">
            <input id="content" type="text" class="form-control"  name="content" value="{{ $post->content }}" required autocomplete="content" autofocus>
        </div>
    </div>
    <button>edit</button>
</form>
<form action="{{ route('clientPosts.destroy',[$post]) }}" method="post">
    @csrf
    @method('delete')
    <button >delete</button>
</form>
</body>
</html>
