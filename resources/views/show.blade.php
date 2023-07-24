@extends('layouts.app')

@section('content')
    <div class="container text-center">

        {{-- Versione UTENTE --}}
        @auth
        <h1>Benvenuto : {{Auth::user() -> name}}</h1>

            <ol class="list-unstyled">
                <li> <b>Id :</b> {{ $project -> id}}</li>
                <br>
                <li> <b>Nome del progetto : </b>{{ $project -> project_name}}</li>
                <br>
                <li> <b> Descrizione : </b>{{ $project -> description}}</li>
                <br>
                <li> <b>start_date : </b>{{ $project ->start_date }}</li>
                <br>
                <li> <b>end_date : </b>{{ $project ->end_date }}</li>
                <br>
                <li> <b>status : </b>{{ $project ->status }}</li>
                <br>
                <li> <b>budget : </b>{{ $project ->budget }}</li>
                <br>
                <li> <b>progress : </b>{{ $project ->progress }}</li>
            </ol>
       

        @endauth
    </div>
@endsection