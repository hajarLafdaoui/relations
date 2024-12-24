<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plats de la commande</title>
</head>
<body>
    <h1>Plats de la commande ID: {{ $commande->id }}</h1>

    @if($plats->isEmpty())
        <p>Aucun plat pour cette commande.</p>
    @else
        <ul>
            @foreach($plats as $plat)
                <li>Plat ID: {{ $plat->id }} | Nom: {{ $plat->name }}</li>
            @endforeach
        </ul>
    @endif
</body>
</html>
