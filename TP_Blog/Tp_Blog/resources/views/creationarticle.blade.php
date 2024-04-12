@extends('layout')
@section('content')
    <form action="/contact" method="POST">
        <!--VERIFICATION CSRF SINON CA MARCHE PAS-->
        @csrf
        <!--ENTREE DU PSEUDO-->
        <div>
            <label for="pseudo">Pseudo:
                <input type="text" name="pseudo" id="pseudo">
            </label>
        </div>

        <!--ENTREE DU TITRE DE L'ARTICLE-->
        <div>
            <label for="titre">Titre de l'article:
                <input name="titre" id="titre">
            </label>
        </div>
        <!--ENTREE DU CONTENU DE L'ARTICLE-->
        <div>
            <label for="contenu">Contenu de l'article:
                <textarea name="contenu" id="contenu">
                </textarea>
            </label>
        </div>
        <button>Envoyer</button>
    </form>


@endsection


