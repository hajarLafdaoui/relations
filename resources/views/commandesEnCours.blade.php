<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Commandes en cours</title>
</head>
<body>
    <h1>Commandes en cours pour {{ $serveur->name }}</h1>
 
        <ul>
            @foreach($commandesEnCours as $commande)
                <li>Commande ID: {{ $commande->id }}, Date: {{ $commande->created_at }}</li>
            @endforeach
        </ul>
</body>
</html>
