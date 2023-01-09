@extends('layouts.app')


@section('content')


    <h1>Modifier phase</h1>


    @if ($errors->any())

        <div class="alert alert-danger">

            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>

        </div>

    @endif

    <form method="post" action="{{ url('phase/'. $phase->idPhase) }}" >
        @method('PATCH')
        @csrf


        <div class="form-group mb-3">

            <label for="nomPhase">Nom Phase:</label>
            <input type="text" class="form-control" id="nomPhase" placeholder="Entrer Nom" name="nomPhase" value="{{ $phase->nomPhase }}">

        </div>

        <div class="form-group mb-3">

            <label for="duree">duree:</label>
            <input type="number" class="form-control" id="telephone" placeholder="Entrer la duree" name="duree" value="{{ $phase->duree }}">

        </div>

        <div class="form-group mb-3">

            <label for="priorite">Priorite:</label>
            <input type="text" class="form-control" id="priorite" placeholder="Entrer priorite" name="priorite" value="{{ $phase->priorite }}">

        </div>


        <button type="submit" class="btn btn-primary">Enregistrer</button>

    </form>

@endsection
