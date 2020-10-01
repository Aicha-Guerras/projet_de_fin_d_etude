@extends('layouts.auth')

@section('title', 'Exams')
@section('content')
    <div class="content_lecon">
        <div class="container_pages">
        <h1>List of all examens for the Course {{$course->titre_cour}}</h1> 

        <div class="container_lecon">
            @foreach($examen->examens as $examen)
            @if ($examen->type=='2')
                <div class="box">
                    <div class="contentBox">

                        <div class="id_lecon">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                        </div>

                        <div class="titre_lecon">
                            {{ $examen->examen_sujet }}
                        </div>

                        <div class="bouton">
                            <a href="{{route('exercice_examen' , $examen->id )}}"><span>view exercice</span></a>    
                        </div>  

                    </div>
                </div>
            @endif
            @endforeach
        </div>
        </div>
    </div>
@endsection