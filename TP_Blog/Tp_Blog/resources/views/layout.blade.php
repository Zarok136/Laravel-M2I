<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<!--HEADER-->
<header>
    <h1>PHP SCIENCE</h1>
    <div class="select">@foreach($navbar as $k=>$v)<a href="{{$k}}">{{$v}}</a>@endforeach</div>
</header>
<!--BODY GENERATION VIA VIEW @SEQUENCE-->
<body>
@yield('content')
</body>
@yield('style')
<style>
    body,html{
        margin:0;
        width: 100dvw;
        height: 100dvh;
    }

    h1{
        background-color: #0c5460;
        text-align: center;
        margin-top: 0;
    }

    header{
        background-color: #0c5460;
        color: whitesmoke;
        padding-bottom: 2rem;
        gap: 2rem;
    }
    a{
        text-decoration: none;
        color:whitesmoke ;
        border: 0.1rem solid #1f1f1f;
        border-radius: 1rem;
        padding: 0.5rem;
        transition: background-color 1s ease;
    }

    a:hover{
        background-color: whitesmoke;
        color: #0c5460;
    }

    .select{
        width: 100dvw;
        display: flex;
        flex-direction: row;
        justify-content: center;
        gap: 1rem;
    }
</style>
</html>
