<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Montant Total</title>
</head>
<body>
    <h1>Montant Total à Payer</h1>
    <p>Commande ID: {{ $commande->id }}</p>
    <p>Montant Total: <strong>{{ $totalAmount }}€</strong></p>
</body>
</html>
