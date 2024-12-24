<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plats à préparer</title>
</head>
<body>
    <h1>Plats à préparer pour les commandes en cours</h1>

    @if(empty($platsToPrepare))
        <p>Aucun plat à préparer.</p>
    @else
        <ul>
            @foreach($platsToPrepare as $plat)
                <li>Plat ID: {{ $plat->id }} | Nom: {{ $plat->intitulé }}</li>
            @endforeach
        </ul>
    @endif
</body>
</html>
