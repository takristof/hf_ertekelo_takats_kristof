<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Új házifeladat</title>
</head>
<body>
    <h1>Új házifeladat</h1>
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <p>{{$error}}</p>
        @endforeach
    @endif
    <form method='POST' action="{{ route('hazifeladatok.store') }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div>
            Tanuló:<br>
            <input type="text" name="tanulo" value="{{old('tanulo')}}">
            @error('tanulo')
                <p>{{$message}}</p>
            @enderror
        </div>
        <div>
            Beadott feladat:<br>
            <input type="text" name="beadott_feladat" value="{{old('beadott_feladat')}}">
            @error('beadott_feladat')
                <p>{{$message}}</p>
            @enderror
        </div>
        <div>
            Link:<br>
            <input type="text" name="link" value="{{old('link')}}">
            @error('link')
                <p>{{$message}}</p>
            @enderror
        </div>
        <div>
            <input type="submit" value="Create">
        </div>
    </form>
</body>
</html>
