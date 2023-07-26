@extends('layouts.app')

@section('content')
    <div class="container text-center">

        {{-- Versione UTENTE --}}
        @auth
        <h1>Benvenuto : {{Auth::user() -> name}}</h1>

            <ol class="list-unstyled">
                <li> <b>Id :</b>
                    <div class="btn btn-secondary">{{ $project -> id}}</div>
                </li>
                <br>
                <li> <b>Nome del progetto : </b>
                    <div class="btn btn-secondary">{{ $project -> project_name}}</div>
                </li>
                <br>
                <li> <b> Descrizione : </b>
                    <div class="btn btn-secondary">{{ $project -> description}}</div>
                </li>
                <br>
                <li> <b>start_date : </b>
                    <div class="btn btn-secondary">{{ $project ->start_date }}</div>
                </li>
                <br>
                <li> <b>end_date : </b>
                    <div class="btn btn-secondary">{{ $project ->end_date }}</div>
                </li>
                <br>
                <li> <b>status : </b>
                    <div class="btn btn-secondary">{{ $project ->status }}</div>
                </li>
                <br>
                <li> <b>budget : </b>
                    <div class="btn btn-secondary">{{ $project ->budget }}</div>
                </li>
                <br>
                <li> <b>progress : </b>
                    <div class="btn btn-secondary">{{ $project ->progress }}</div>
                </li>

                <br>
                <li> <b>Type for this project : </b>
                    <div class="btn btn-secondary">{{ $project ->type->type_name }}</div>
                </li>
            </ol>
       

        @endauth
    </div>
@endsection