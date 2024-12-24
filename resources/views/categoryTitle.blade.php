<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Category Title</title>
</head>
<body>
    @if (isset($titreCategorie))
        <h1>Category Title: {{ $titreCategorie }}</h1>
    @else
        <h1>No Category Title Available</h1>
    @endif
</body>
</html>
