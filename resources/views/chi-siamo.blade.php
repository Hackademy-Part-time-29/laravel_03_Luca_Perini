<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selfwork230424</title>
</head>
<body>
    <h1>{{$title}}</h1>
    <ul>
        <li> <a href="{{route('homepage')}}">Home</a></li>
        <li> <a href="{{route('servizi')}}">Servizi</a></li>
        <li> <a href="{{route('articles')}}">Articoli</a></li>
    </ul>
    <p>{{$description}}</p>
</body>
</html>