@extends('layout.layout')
@section('content')
    <h1>Liste des etudiants</h1>
    @foreach ($students as $student)
        <p>Prénom : {{$student->firstname}}</p>
        <p>Nom : {{$student->lastname}}</p>
        <p>A commencé le : {{$student->start}}</p>
        <p>Fini le : {{$student->end}}</p>
    @endforeach
@endsection
