@extends('layouts.auth')

@section('title', 'Exercice')
@section('content')

    <div class="content_exercice">
        <div class="container_pages">
            @if(Session::has('success'))
            <p class="alert {{ Session::get('alert-class', 'alert-info') }}" style="text-align: center"><b>{{ Session::get('success') }}</b></p>
            @endif
            <div class="wrapper exercice">
                <h1>Give the solution of exercice number : {{ $exercice->num_exer }}</h1>
                <p class="titre">This exercice for : {{ $exercice->examen->titre_ressource }}</p>
                <form method="POST" action="{{ route('exercice_store', $exercice->id) }}" enctype="multipart/form-data">
                    @csrf
                    <label class="lab">Send solution to the professor : </label>
                    <input type="file" class="form-control-file" id="contenu"name="my_file">
                    <input type="submit" value="Send" class="submit">
                </form>
            </div>
        </div>
    </div>

@endsection