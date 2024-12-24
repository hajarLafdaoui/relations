<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Composition of {{ $plat->intitulé }}</h1>
<table>
    <thead>
        <tr>
            <th>Id</th>
            <th>Libellé</th>
            <th>Quantité</th>
            <th>Unité</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($compositions as $composition)
            <tr>
                <td>{{ $composition->id }}</td>
                <td>{{ $composition->libelle }}</td>
                <td>{{ $composition->pivot->quantite }}</td>
                <td>{{ $composition->pivot->unité }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

</body>
</html>