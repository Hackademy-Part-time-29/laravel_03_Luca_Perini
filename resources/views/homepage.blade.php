<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercitazione 23/04/2024</title>
</head>
<body>
    <h1>{{$title}}</h1>
    <ul>
        <li> <a href="{{route('chi-siamo')}}">Chi siamo</a></li>
        <li> <a href="{{route('servizi')}}">Servizi</a></li>
        <li> <a href="{{route('articles')}}">Articoli</a></li>
    </ul>
    <p>{{$description}}</p>
</body>
</html>