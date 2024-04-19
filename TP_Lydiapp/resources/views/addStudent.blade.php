@extends('layout.layout')
@section('content')
    <h1>Ajouter un etudiant</h1>

    <form action="{{route('index')}}" method="POST">
    @csrf
        <div>
            <label for="firstname">Firstname:
                <input type="text" name="firstname" id="firstname" required>
            </label>
        </div>


        <div>
            <label for="lastname">Lastname:
                <input type="text" name="lastname" id="lastname" required>
            </label>
        </div>


        <div>
            <label for="course">Course:
                <select name="course" id="course" required>
                    <option value="">Please select a course for your student</option>
                    <option value="DWWM">DWWM</option>
                    <option value="CDA">CDA</option>
                </select>
            </label>
        </div>

        <div>
            <label for="start">Start at:
                <input type="date" name="start" id="start" required>
            </label>
        </div>

        <div>
            <label for="end">End at:
                <input type="date" name="end" id="end" required>
            </label>
        </div>

        <button type="submit">Add student</button>

    </form>
@endsection
