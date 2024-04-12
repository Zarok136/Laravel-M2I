@extends('layout')
@section('content')
    <h2>Contactez-nous!</h2>

    <!--FORMULAIRE DE CONTACT-->
    <form action="">
        <!--ENTREE DU NOM-->
        <div>
            <label for="">Nom:
                <input type="text">
            </label>
        </div>

        <!--ENTREE DU PRENOM-->
        <div>
            <label for="">Prénom:
                <input type="text">
            </label>
        </div>

        <!--ENTREE DU MAIL-->
        <div>
            <label for="">email:
                <input type="text">
            </label>
        </div>

        <!--ENTREE DU MESSAGE-->
        <div>
            <label for="">Message:
                <textarea>
                </textarea>
            </label>
        </div>
        <button>Envoyer</button>
    </form>


@endsection
