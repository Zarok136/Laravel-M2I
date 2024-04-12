@extends('layout')
@section('title')
    contact
@endsection
@section('content')
    <h2>Contactez-nous!</h2>

    <!--FORMULAIRE DE CONTACT-->
    <form action="/contact" method="POST">
        <!--VERIFICATION CSRF SINON CA MARCHE PAS-->
        @csrf
        <!--ENTREE DU NOM-->
        <div>
            <label for="nom">Nom:
                <input type="text" name="nom" id="nom">
            </label>
        </div>

        <!--ENTREE DU PRENOM-->
        <div>
            <label for="prenom">Prénom:
                <input type="text" name="prenom" id="prenom">
            </label>
        </div>

        <!--ENTREE DU MAIL-->
        <div>
            <label for="mail">email:
                <input type="text" name="mail" id="mail">
            </label>
        </div>

        <!--ENTREE DU MESSAGE-->
        <div>
            <label for="message">Message:
                <textarea name="message" id="message">
                </textarea>
            </label>
        </div>
        <button>Envoyer</button>
    </form>


@endsection


@section('style')
    <style>

    </style>
@endsection
