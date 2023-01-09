@extends('layouts.app')

@section('content')

    <div class="row">

        <div class="col-lg-11">

            <h2>Gestion Phase</h2>

        </div>

        <div class="col-lg-1">
            <a class="btn btn-success" href="{{ url('phase/create') }}">Ajouter</a>
        </div>

    </div>



    @if ($message = Session::get('success'))

        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>

    @endif



    <table class="table table-bordered">

        <tr>

            <th>No</th>
            <th>Nom Phase</th>
            <th>Duree</th>
            <th>Priorite</th>
            <th>Actions</th>

        </tr>

        @foreach ($phases as $index => $phase)

            <tr>
                <td>{{ $index }}</td>
                <td>{{ $phase->nomPhase }}</td>
                <td>{{ $phase->duree }}</td>
                <td>{{ $phase->priorite }}</td>
                <td>

                    <form action="{{ url('phase/'. $phase->idPhase) }}" method="POST">
                        @csrf
                        @method('DELETE')

                        <!-- <a class="btn btn-info" href="{{ url('phase/'. $phase->id) }}">Voir</a> -->
                        <a class="btn btn-primary" href="{{ url('phase/'. $phase->idPhase .'/edit') }}">Modifier</a>

                        <button type="submit" class="btn btn-danger">Supprimer</button>

                    </form>
                </td>

            </tr>

        @endforeach
    </table>

@endsection