@extends('layouts.app')

@section('content')
    <div class="container text-center">

        {{-- Versione UTENTE --}}
        @auth
            <h1>Benvenuto : {{Auth::user() -> name}}</h1>

            {{-- Add project --}}
            <a class="btn btn-primary my-3" href="{{route('project.create')}}">+</a>

            {{-- Creo una lista senza link visibile a tutti --}}
            <ol class="list-unstyled">
                @foreach ($projects as $project)
                    <li class="row justify-content-center my-3">
                        <div class="col-2">
                            <a href="{{ route('project.show', $project -> id)}}">{{$project -> project_name}}</a>
                        </div>
                        <div class="col-1">
                            <span><a href=""><i class="fa-solid fa-trash"></i></a></span>
                        </div>
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