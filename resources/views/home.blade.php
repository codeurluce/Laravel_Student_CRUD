<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel application</title>
</head>
<body>
    <h1>Bienvenue sur la page d'acceuil</h1>
    <ul>
        @foreach ($classes as $item)
        <li>{{ $item->libelle }}</li>
        @endforeach
    </ul>

    <x-menu />
</body>
</html>