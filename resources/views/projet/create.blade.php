@extends('layouts.app')


@section('content')

    <h1>Ajouter un projet</h1>


    @if ($errors->any())

        <div class="alert alert-danger">

            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach

            </ul>

        </div>

    @endif

    <form action="{{ url('projet') }}" method="POST">
        @csrf

        <div class="form-group mb-3">
            <label for="nom">Nom du projet:</label>
            <input type="text" class="form-control" id="nom" placeholder="Entrez un nom de projet" name="nom">
        </div>

        <div class="form-group mb-3">

            <label for="description">Description:</label>
            <input type="text" class="form-control" id="description" placeholder="description du projet" name="description">

        </div>


        <div class="form-group mb-3">
            <label for="date_debut">Date Debut:</label>
            <input type="Date" class="form-control" id="date_debut" placeholder="debut du projet" name="date_debut">
        </div>

        <div class="form-group mb-3">
            <label for="date_fin">Date fin:</label>
            <input type="Date" class="form-control" id="date_fin" placeholder="fin du projet" name="date_fin">
        </div>


        <button type="submit" class="btn btn-primary">Enregister</button>

    </form>

@endsection