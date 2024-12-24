<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Commandes Servi mais Non Payées</title>
</head>
<body>
    <h1>Commandes Servi mais Non Payées</h1>

    @if($commandes->isEmpty())
        <p>Aucune commande en état "Servi" mais non payée.</p>
    @else
        <ul>
            @foreach($commandes as $commande)
                <li>Commande ID: {{ $commande->id }} | Date: {{ $commande->created_at }} | Montant: {{ $commande->montant }}</li>
            @endforeach
        </ul>
    @endif
</body>
</html>
