@extends('layouts.app')

@section('content')
    <div class="container text-center">

        {{-- Versione UTENTE --}}
        @auth
            <h1>Benvenuto : {{Auth::user() -> name}}</h1>

         
            {{-- Inserisco il form --}}

            <form action="{{route('project.store')}}" method="POST">

                
                @csrf
                @method("POST")

                <div class="row justify-content-center my-3">
                    <div class="col-3">
                        <label for="project_name">project_name</label>
                        <br>
                        <input type="text" name="project_name">
                    </div>
                </div>

                <div class="row justify-content-center my-3">
                    <div class="col-3">
                        <label for="description">description</label>
                        <br>
                        <input type="text" name="description">
                    </div>
                </div>


                <div class="row justify-content-center my-3">
                    <div class="col-3">
                        <label for="start_date">start_date</label>
                        <br>
                        <input type="date" name="start_date">
                    </div>
                </div>


                <div class="row justify-content-center my-3">
                    <div class="col-3">
                        <label for="end_date">end_date</label>
                        <br>
                        <input type="date" name="end_date">
                    </div>
                </div>


                <div class="row justify-content-center my-3">
                    <div class="col-3">
                        <label for="status">status</label>
                        <br>
                        <input type="text" name="status">
                    </div>
                </div>

                <div class="row justify-content-center my-3">
                    <div class="col-3">
                        <label for="budget">budget</label>
                        <br>
                        <input type="number" name="budget">
                    </div>
                </div>

                <div class="row justify-content-center my-3">
                    <div class="col-3">
                        <label for="progress">progress</label>
                        <br>
                        <input type="number" name="progress">
                    </div>
                </div>

                <div class="row justify-content-center my-3">
                    <div class="col-3">
                        <label for="type_id">Type</label>
                        <br>
                        <select name="type_id" id="type_id">
                         @foreach ($types as $type)
                            <option value="{{$type -> id}}">
                                <div class="col-6">{{$type-> type_name}}</div>
                            </option>
                         @endforeach

                        </select>
                    </div>
                </div>

                
                <div class="row justify-content-center my-3">
                    <div class="col-3">
                        <input class="btn btn-primary" type="submit">
                    </div>
                </div>


            </form>
        @endauth

    </div>
@endsection