<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Házifeladat módosít</title>
</head>
<body>
    <h1>Házifeladat módosít</h1>
    <form method='POST' action="{{ route('hazifeladatok.update', $hazifeladat->id) }}">
        @method('PATCH')
        @csrf
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div>
            Tanuló:<br>
            <input type="text" name="tanulo" value="{{$hazifeladat->tanulo}}">
        </div>
        <div>
            Beadott feladat:<br>
            <input type="text" name="beadott_feladat" value="{{$hazifeladat->beadott_feladat}}">
        </div>
        <div>
            Link:<br>
            <input type="text" name="link" value="{{$hazifeladat->link}}">
        </div>
        <div>
            Szöveges értékelés:<br>
            <input type="text" name="szoveges_ertekeles" value="{{$hazifeladat->szoveges_ertekeles}}">
        </div>
        <div>
            Pont:<br>
            <input type="number" name="pont" value="{{$hazifeladat->pont}}">
        </div>
        <div>
            <input type="submit" value="Edit">
        </div>
    </form>
</body>
</html>