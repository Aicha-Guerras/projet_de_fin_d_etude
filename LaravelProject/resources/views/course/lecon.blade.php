@extends('layouts.auth')

@section('title', 'Lessons')
@section('content')
    <div class="content_lecon">
        <div class="container_pages">
        <h1>List of all lessons for the Course {{$course->titre_cour}}</h1> 

        <div class="container_lecon">
            {{-- @foreach ($courses as $course) --}}
                @foreach($lecon->lecons as $lecon)
                    {{-- @if ($lecon->cour->id == $course->id) --}}
                        <div class="box">
                            <div class="contentBox">

                                <div class="id_lecon">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                                </div>

                                <div class="titre_lecon">
                                    {{ $lecon->titre_lecon }}
                                </div>

                                <div class="bouton">
                                    <a href="{{asset('files/' . $lecon->contenu)}}" target="_blank"><span>View</span></a>
                                    <a href="/download/{{$lecon->contenu}}" target="_blank"><span>Save</span></a>    
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