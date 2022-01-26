<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><a href="{{ route('home') }}">Vissza a főoldalra</a></p>

    <table>
        <tr>
            <th>Tanuló</th>
            <th>Beadott feladat</th>
            <th>Link</th>
            <th>Szöveges értékelés</th>
            <th>Pont</th>
        </tr>
    @foreach ($hazifeladatok as $hazifeladat)
        <tr>
            <td>
                <a href="{{ route('hazifeladatok.show', $hazifeladat->id) }}">{{ $hazifeladat->tanulo }}</a>
            </td>
            <td>{{ $hazifeladat->beadott_feladat }}</td>
            <td>{{ $hazifeladat->link }}</td>
            <td>{{ $hazifeladat->szoveges_ertekeles }}</td>
            <td>{{ $hazifeladat->pont }}</td>
            <td>
                <form method="POST" action="{{route('hazifeladatok.destroy',$hazifeladat->id)}}">
                    @csrf
                    @method('DELETE')
                <button type="submit">Törlés</button>
                </form>
            </td>
        </tr>
    @endforeach
    </table>
</body>
</html>
