<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $hazifeladat->tanulo }}</title>
</head>
<body>
    <h1>{{ $hazifeladat->tanulo }} házifeladata</h1>
    <p>Házifeladat címe: {{ $hazifeladat->beadott_feladat }} </p>
    <p>Házifeladat linkje: {{ $hazifeladat->link }} </p>
    <p>Szöveges értékelés:{{ $hazifeladat->szoveges_ertekeles}}</p>
    <p>Pont: {{ $hazifeladat->pont}}</p>
</body>
</html>
