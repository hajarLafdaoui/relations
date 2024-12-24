<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


    @if($plats->isEmpty())
        <p>No plats found for this category.</p>
    @else
        <ul>
            @foreach($plats as $plat)
                <li>{{ $plat->intitulé }} </li>
            @endforeach
        </ul>
    @endif

</body>
</html>