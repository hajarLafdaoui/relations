<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Commandes d'hier</title>
</head>
<body>
    <h1>Commandes Affectées Hier</h1>
    <p>Serveur: {{ $serveur->nom }}</p>
    <p>Date: {{ $yesterday->format('d/m/Y') }}</p>
    <p>Nombre total des commandes affectées: <strong>{{ $totalCommandes }}</strong></p>
</body>
</html>
