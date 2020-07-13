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
<div class="container">
<form action="{{route('posts.store')}}"  method="post">
    @csrf
    @if($errors ->faild)
        <ul>
            @foreach($errors->faild->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif
    <div class="form-group row">
        <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('title') }}</label>
        <div class="col-md-6">
            <input id="title" type="text" class="form-control"  name="title" value="{{ old('title') }}"  autocomplete="title" autofocus>
        </div>
    </div>

    <div class="form-group row">
        <label for="content" class="col-md-4 col-form-label text-md-right" @error('content') is-invalid @enderror>{{ __('content') }}</label>
        <div class="col-md-6">
            <input id="content" type="text" class="form-control"  name="content" value="{{ old('content') }}"  autocomplete="content" autofocus>
        </div>
{{--        @error('content')--}}
{{--        {{$message}}--}}
{{--        @enderror--}}
    </div>

    <div class="form-group row">
        <label for="author" class="col-md-4 col-form-label text-md-right">{{ __('author') }}</label>
        <div class="col-md-6">
            <select name="author">
                <option value="" >انتخاب کنید:</option>
                @foreach($users as $user)

                    <option value="{{$user->id}}">
                        {{$user->name}}

                    </option>
                @endforeach

            </select>
        </div>
    </div>


    <div class="form-group row">
        <label for="status" class="col-md-4 col-form-label text-md-right">{{ __('status') }}</label>

        <div class="col-md-6">
            <select name="status" class="form-control @error('status') is-invalid @enderror" >
                <option value="">سطح کاربری:</option>
                <option value="deleted" >deleted</option>
                <option value="verified">verified</option>

            </select>

{{--                <label for="color"> I have a bike</label><br>--}}
{{--                <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">--}}
{{--                <label for="vehicle2"> I have a car</label><br>--}}
{{--                <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">--}}
{{--                <label for="vehicle3"> I have a boat</label><br><br>--}}
{{--                <input type="submit" value="Submit">--}}
{{--            </form>--}}
{{--            @error('status')--}}
{{--            <span class="invalid-feedback" role="alert">--}}
{{--                <strong>{{ $message }}</strong>--}}
{{--            </span>--}}
{{--            @enderror--}}
        </div>

    </div>
    <div class="col-md-6">
        @foreach($tags as $tag)
            <label for="tags">{{ $tag->name }} </label><br>
            <input type="checkbox" id="tags" name="tags[]" value="{{$tag->id}}">
        @endforeach


    </div>
    <button type="submit">send</button>

</form>
</div>
</body>
</html>
