{{-- @extends('layouts.layout') --}}
@extends('layouts.auth')
@section('title', 'Inscribed Courses')
@section('content')
    <div class="content_course">
        <div class="container_pages">
        <h1>List of inscribed courses</h1>
                <p>Here you will find all of courses where you inscribe</p>

        <div class="container_course">
            @foreach($courses->cours as $course)
                <div class="box"> 
                    {{-- <div class="image">
                        <img src="/img/laravel.png" alt="Course image">
                    </div> --}}
                        <div class="contentBox">
                            <h2>{{ $course->titre_cour }}</h2>
                            <p>{{ $course->description }}</p>
                            <p><b>Teacher : </b>{{ $course->enseignant->nom }} {{ $course->enseignant->prenom }}</p>
                        <a href='courses/{{ $course->id }}'><span>Browse</span></a>                             
                        </div>
                </div>
            @endforeach
        </div>
        </div>
    </div>
@endsection