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
<form action="{{route('tags.store')}}" method="post">
    @csrf
    <div class="form-group row">
        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('name') }}</label>
        <div class="col-md-6">
            <input id="name" type="text" class="form-control"  name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
        </div>
    </div>

{{--    <div class="form-group row">--}}
{{--        <label for="content" class="col-md-4 col-form-label text-md-right">{{ __('content') }}</label>--}}
{{--        <div class="col-md-6">--}}
{{--            <input id="content" type="text" class="form-control"  name="content" value="{{ old('content') }}" required autocomplete="content" autofocus>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <div class="form-group row">--}}
{{--        <label for="author" class="col-md-4 col-form-label text-md-right">{{ __('author') }}</label>--}}
{{--        <div class="col-md-6">--}}
{{--            <select name="author">--}}
{{--                <option>انتخاب کنید:</option>--}}
{{--                @foreach($users as $user)--}}

{{--                    <option value="{{$user->id}}">--}}
{{--                        {{$user->name}}--}}

{{--                    </option>--}}
{{--                @endforeach--}}

{{--            </select>--}}
{{--        </div>--}}
{{--    </div>--}}


{{--    <div class="form-group row">--}}
{{--        <label for="status" class="col-md-4 col-form-label text-md-right">{{ __('status') }}</label>--}}

{{--        <div class="col-md-6">--}}
{{--            <select name="status" class="form-control @error('status') is-invalid @enderror" >--}}
{{--                <option value="">سطح کاربری:</option>--}}
{{--                <option value="deleted" name="status">deleted</option>--}}
{{--                <option value="verified" name="status">verified</option>--}}

{{--            </select>--}}

{{--            @error('status')--}}
{{--            <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--            @enderror--}}
{{--        </div>--}}
{{--    </div>--}}
    <button type="submit">send</button>

</form>
</body>
</html>
