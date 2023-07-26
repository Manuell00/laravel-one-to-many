@extends('layouts.app')

@section('content')
    <div class="container text-center">

        {{-- Versione UTENTE --}}
        @auth
            <h1 class="col-12 mb-5">Benvenuto : {{Auth::user() -> name}}</h1>

            {{-- Add project --}}
            <h3 class="col-12" >Add a new project : <a class="btn btn-primary my-3" href="{{route('project.create')}}">+</a></h3>

            {{-- Creo una lista senza link visibile a tutti --}}
            <ol class="list-unstyled">

                {{-- SHOW --}}
                @foreach ($projects as $project)
                    <li class="row justify-content-center my-3">
                        <div class="col-2">
                            <a href="{{ route('project.show', $project -> id)}}">{{$project -> project_name}}</a>
                        </div>

                        {{-- EDIT --}}
                        <div class="col-2">
                            <div class="row justify-content-center">
                                <div class="col-3">
                                    <form action="{{ route('project.edit', $project->id) }}" method="POST">
                                        @csrf
                                        @method('PUT')
        
                                        <button class='btn btn-secondary' type="submit"><i class="fa-solid fa-gear"></i></button>
                                    </form>
                                </div>
    
                                <div class="col-3">
                                    <form action="{{ route('project.delete', $project->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
            
                                        <button class='btn btn-danger' type="submit"><i class="fa-solid fa-trash"></i></button>
                                    </form>
                                </div>
                            </div>
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