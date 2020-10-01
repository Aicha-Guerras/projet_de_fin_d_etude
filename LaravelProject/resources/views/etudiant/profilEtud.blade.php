{{-- @extends('layouts.layout') --}}
@extends('layouts.auth')

@section('title', 'Profil Etudiant')
@section('content')
    <div class="container_etudiant">
        <div class="image"></div>
        <div class="overlay_etudiant">
            <div class="content">
                <div class="container_pages">
                <a href="{{route('inscribe-course')}}">
                        <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" class="eye w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                        <h5>Inscribed Courses</h5>
                    </a>
                    <a href="{{route('all-course')}}">
                        <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" class="search w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                        <h5>Search Course</h5>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection