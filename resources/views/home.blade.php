@extends('layouts.app')

@section('content')
    <div class="container text-center">

        {{-- Versione UTENTE --}}
        @auth
            <h1 class="mb-5">Benvenuto : {{Auth::user() -> name}}</h1>

            {{-- Add project --}}
            <h3 style="font-style:oblique">Add a new project : <a class="btn btn-primary my-3" href="{{route('project.create')}}">+</a></h3>

            {{-- Creo una lista senza link visibile a tutti --}}
            <ol class="list-unstyled">
                @foreach ($projects as $project)
                    <li class="row justify-content-center my-3">
                        <div class="col-2">
                            <a href="{{ route('project.show', $project -> id)}}">{{$project -> project_name}}</a>
                        </div>
                        
                        <div class="col-1">
                            <form action="{{ route('project.delete', $project->id) }}" method="POST">
                                @csrf
                                @method('DELETE')

                                <button class='btn btn-danger' type="submit"><i class="fa-solid fa-trash"></i></button>
                            </form>
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