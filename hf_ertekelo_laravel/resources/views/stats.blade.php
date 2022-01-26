<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Házifeladat főoldal</title>
</head>
<body>
    <h1>Házifeladatok főoldala</h1>
    <p>Összes beadott házi: {{ $hazifeladatokCount }}</p>
    <p>
        <a href="{{ route('hazifeladatok.index') }}">Házifeladatok listája</a>
    </p>
</body>
</html>
