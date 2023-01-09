@extends('layouts.app')


@section('content')


    <h1>Modifier projet</h1>


    @if ($errors->any())

        <div class="alert alert-danger">

            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>

        </div>

    @endif

    <form method="post" action="{{ url('projet/'. $projet->id) }}" >
        @method('PATCH')
        @csrf


        <div class="form-group mb-3">

            <label for="nom">Nom Projet:</label>
            <input type="text" class="form-control" id="nom" placeholder="Entrer Nom du projet" name="nom" value="{{ $projet->nom }}">

        </div>

        <div class="form-group mb-3">

            <label for="description">Description:</label>
            <input type="text" class="form-control" id="description" placeholder="Entrer description" name="description" value="{{ $projet->description }}">

        </div>

        <div class="form-group mb-3">

            <label for="date_debut">Date Debut:</label>
            <input type="Date" class="form-control" id="date_debut" placeholder="Date_debut" name="date_debut" value="{{ $projet->date_debut }}">

        </div>

        <div class="form-group mb-3">

            <label for="date_fin">Date Fin:</label>
            <input type="Date" class="form-control" id="date_fin" placeholder="Date_fin" name="date_fin" value="{{ $projet->date_fin }}">

        </div>

        <button type="submit" class="btn btn-primary">Enregistrer</button>

    </form>

@endsection