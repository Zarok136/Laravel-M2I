<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{url($style)}}">
    <title>Layout</title>
</head>
<body>
<header>
<h1>Bienvenue sur mon site!</h1>
<ul>@foreach($navbar as $k=>$v)<li><a href="{{$k}}">{{$v}}</a></li>@endforeach</ul>
</header>
<main>@yield('content')</main>
</body>

</html>
