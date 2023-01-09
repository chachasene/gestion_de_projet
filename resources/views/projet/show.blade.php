@extends('layouts.app')


@section('content')

    <h1>Gestion Projet</h1>


    <table class="table table-bordered">

        <tr>
            <th>Nom Projet:</th>
            <td>{{ $projet->nom }}</td>
        </tr>

        <tr>

            <th>Description:</th>
            <td>{{ $projet->description }}</td>

        </tr>

        <tr>

            <th>Date Debut:</th>
            <td>{{ $projet->date_debut }}</td>

        </tr>

        <tr>

            <th>Date Fin:</th>
            <td> {{ $projet->date_fin }}</td>

        </tr>
        

    </table>
    <a class="btn btn-success" href="{{ url('projet/'. $projet->id) }}">Ajouter Phase</a>

@endsection