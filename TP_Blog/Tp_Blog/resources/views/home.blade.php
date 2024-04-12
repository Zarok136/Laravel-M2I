@extends('layout')
@section('content')
    <h2>Bienvenue sur le blog php Science</h2>
    <p>Bienvenue! Ici tu pourra poster des informations concernant la science. Tu a plusieurs onglets de disponibles:
    <ul>
        <li>Acceuil : Comme son nom l'indique tu reviens sur la page d'acceuil.</li>
        <li>Contact : Ici tu peux envoyer un message pour tout éventuel problème.</li>
        <li>Tableau Periodique Des Elements : Tu trouvera sur cette page un magnifique tableau periodique des éléments pour t'aider au besoin.(EN COURS DE CREATION)</li>
    </ul></p>
    <a class="button" href="/creationarticle">Créer un article</a>

@endsection

@section('style')
    <style>
    .button{
        background-color: #0c5460;
        margin:2rem 0 0 1rem;

    }
    ul{
        display: flex;
        justify-content: center;
        align-items: center;
    }

    </style>
@endsection
