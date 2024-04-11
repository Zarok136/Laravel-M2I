@extends('layouts/layout')
@section('content')
<h1>CONTACT</h1>
<form action="contact.create" method="POST">
    @csrf
    <label for="lastname">Nom:</label>
    <input type="text" name="lastname" id="lastname">
    <label for="name">Prénom:</label>
    <input type="text" name="name" id="name">
    <button>Envoyer</button>
</form>
@endsection

