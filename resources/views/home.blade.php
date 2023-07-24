@extends('layouts.app')

@section('content')
    <div class="container text-center">

        {{-- Versione UTENTE --}}
        @auth
            <h1>Benvenuto : {{Auth::user() -> name}}</h1>

            {{-- Creo una lista senza link visibile a tutti --}}
            <ol class="list-unstyled">
                @foreach ($projects as $project)
                    <li>
                        <a href="{{ route('project.show', $project -> id)}}">{{$project -> project_name}}</a>
                    </li>
                    
                @endforeach
            </ol>
        @endauth







        {{-- Versione OSPITE --}}
        @guest
            <h1>Benvenuto</h1>

            {{-- Creo una lista senza link visibile a tutti --}}
            <ol class="list-unstyled">
                @foreach ($projects as $project)
                    <li>{{$project -> project_name}}</li>
                    
                @endforeach
            </ol>
        @endguest


    </div>
@endsection