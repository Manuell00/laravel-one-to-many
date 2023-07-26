@extends('layouts.app')

@section('content')
    <div class="container text-center">

        {{-- Versione UTENTE --}}
        @auth
            <div class="my-4">
                <h1 class="display-5 font-weight-bold text-primary">Benvenuto: {{ Auth::user()->name }}</h1>
                <div class="border-top my-3"></div>
                <h3 class="display-6 font-weight-bold text-info" style="font-size: 1.5rem;">Dettagli del Progetto</h3>

                <div class="bg-light p-4 rounded shadow-sm mt-4">
                    <div class="row justify-content-center my-3">
                        <div class="col-md-3 font-weight-bold">
                            <span class="label">Id:</span>
                        </div>
                        <div class="col-md-6">{{ $project->id }}</div>
                    </div>

                    <div class="row justify-content-center my-3">
                        <div class="col-md-3 font-weight-bold">
                            <span class="label">Nome del progetto:</span>
                        </div>
                        <div class="col-md-6">{{ $project->project_name }}</div>
                    </div>

                    <div class="row justify-content-center my-3">
                        <div class="col-md-3 font-weight-bold">
                            <span class="label">Descrizione:</span>
                        </div>
                        <div class="col-md-6">{{ $project->description }}</div>
                    </div>

                    <div class="row justify-content-center my-3">
                        <div class="col-md-3 font-weight-bold">
                            <span class="label">Start Date:</span>
                        </div>
                        <div class="col-md-6">{{ $project->start_date }}</div>
                    </div>

                    <div class="row justify-content-center my-3">
                        <div class="col-md-3 font-weight-bold">
                            <span class="label">End Date:</span>
                        </div>
                        <div class="col-md-6">{{ $project->end_date }}</div>
                    </div>

                    <div class="row justify-content-center my-3">
                        <div class="col-md-3 font-weight-bold">
                            <span class="label">Status:</span>
                        </div>
                        <div class="col-md-6">{{ $project->status }}</div>
                    </div>

                    <div class="row justify-content-center my-3">
                        <div class="col-md-3 font-weight-bold">
                            <span class="label">Budget:</span>
                        </div>
                        <div class="col-md-6">{{ $project->budget }}</div>
                    </div>

                    <div class="row justify-content-center my-3">
                        <div class="col-md-3 font-weight-bold">
                            <span class="label">Progress:</span>
                        </div>
                        <div class="col-md-6">{{ $project->progress }}</div>
                    </div>

                    <div class="row justify-content-center my-3">
                        <div class="col-md-3 font-weight-bold">
                            <span class="label">Type for this project:</span>
                        </div>
                        <div class="col-md-6">{{ $project->type->type_name }}</div>
                    </div>
                </div>

            </div>
        @endauth
    </div>
@endsection

<style>
    .label {
        font-weight: bold;
    }

    .my-3 {
        margin-top: 1.5rem;
        margin-bottom: 1.5rem;
    }
</style>
