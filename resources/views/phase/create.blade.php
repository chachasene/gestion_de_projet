
@extends('layouts.app')


@section('content')

    <h1>Ajouter un phase</h1>


    @if ($errors->any())

        <div class="alert alert-danger">

            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach

            </ul>

        </div>

    @endif

    <form action="{{ url('phase') }}" method="POST">
        @csrf

        <div class="form-group mb-3">
            <label for="nomPhase">Nom Phase:</label>
            <input type="text" class="form-control" id="nomPhase" placeholder="Entrez un nom" name="nomPhase">
        </div>

        <div class="form-group mb-3">

            <label for="duree">Duree:</label>
            <input type="number" class="form-control" id="duree" placeholder="duree" name="duree">

        </div>


        <div class="form-group mb-3">
            <label for="priorite">Priorite:</label>
            <input type="text" class="form-control" id="priorite" placeholder="Priorite" name="priorite">
        </div>



        <button type="submit" class="btn btn-primary">Enregister</button>

    </form>

@endsection

    



