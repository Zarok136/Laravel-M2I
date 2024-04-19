<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lydiapp</title>
</head>
<header>
    <a href="{{route('index')}}">Liste des etudiants</a>
    <a href="{{route('list')}}">Ajouter un etudiant</a>
</header>
<body>
@yield('content')
</body>
</html>
