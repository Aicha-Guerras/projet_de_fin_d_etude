@extends('layouts.auth')

@section('title', 'Lessons')
@section('content')


    

    

    <div class="content_lecon">
        <div class="container_pages">
            <h1>List of all Exercice for the Exam {{$examen->examen_sujet}}</h1> 

            <div class="container_lecon">
                {{-- @foreach ($courses as $course) --}}
                    @foreach($exercice->exercices as $exercice)
                        {{-- @if ($lecon->cour->id == $course->id) --}}
                            <div class="box">
                                <div class="contentBox">

                                    <div class="id_lecon">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path></svg>
                                    </div>

                                    <div class="titre_lecon">
                                        Exercice number : {{ $exercice->num_exer }}
                                    </div>

                                    <div class="bouton">
                                        <a href="{{asset('files/' . $exercice->contenu)}}" target="_blank"><span>View</span></a>
                                        <a href="/download/{{$exercice->contenu}}" target="_blank"><span>Save</span></a>  
                                    <a href="{{ route('exercice', $exercice->id) }}" ><span>Give Solution</span></a>    
                                    </div>

                                </div>
                            </div>              
                        {{-- @endif --}}
                    @endforeach
                {{-- @endforeach --}}
            </div>
        </div>
    </div>
@endsection