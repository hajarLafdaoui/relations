<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Commandes avec plus de 5 plats</title>
</head>
<body>
    <h1>Commandes avec plus de 5 plats différents</h1>

    @if($commandes->isEmpty())
        <p>Aucune commande avec plus de 5 plats différents.</p>
    @else
        <ul>
            @foreach($commandes as $commande)
                <li>Commande ID: {{ $commande->id }} | Plats demandés: {{ $commande->plats->count() }}</li>
            @endforeach
        </ul>
    @endif
</body>
</html>
