@extends('layouts.auth')

@section('title', 'Content Of The Course')
@section('content')  
     
<div class="container_pages">

    @foreach($courses->cours as $course)
        @if ($course->id == $cour->id)
            @php
                $inscrit=true;
            @endphp 
        @endif
    @endforeach

        @if ($inscrit==true)
            @if(Session::has('success'))
            <p class="alert {{ Session::get('alert-class', 'alert-info') }}" style="text-align: center"><b>{{ Session::get('success') }}</b></p>
            @endif
            <div class="container_cour">
                        <div class="cards">
                            <div class="imgBx">
                                <img src="/img/content.png" alt="lesson icon">
                            </div>
                            <div class="contentBx">
                                <h2>Lessons</h2>
                                <p>Click the button below to see the lessons of this course.
                                </p>
                            <a href="{{ route('lecon' , $cour->id ) }}"><span>Read More</span></a>
                            </div>
                        </div> 
                <div class="cards">
                    <div class="imgBx">
                        <img src="/img/homework.png" alt="tp icon">
                    </div>
                    <div class="contentBx">
                        <h2>Practicals Works</h2>
                        <p>Click the button below to see the practicals works of this course.
                        </p>
                        <a href="{{ route('tp', $cour->id) }}"><span>Read More</span></a>
                    </div>
                </div>
        
                <div class="cards">
                    <div class="imgBx">
                        <img src="/img/exam.png" alt="exam icon">
                    </div>
                    <div class="contentBx">
                        <h2>Exams</h2>
                        <p>Click the button below to see the exams of this course.
                        </p>
                        <a href="{{ route('examen', $cour->id) }}"><span>Read More</span></a>
                    </div>
                </div>
            </div>
        @else

        @php
        if(isset($_GET['link'])){
            $link=$_GET['link'];
            if ($link == '1'){
            $true=true;
            }
        }
        @endphp
        
        
        @if ($true==true)
        <p class="alert alert-danger" style="text-align: center"><b>Warning : you must inscribe in the course!!</b></p>
        @endif

        <div class="inscribe_course">
            <form action="{{route('store_inscribe_course' , $cour->id )}}" method="POST">
            @csrf
            <label >You must inscribe in this course if you want show lessons,practicals works,exams :</label>
            <input type="submit" value="Inscribe">
            </form>
        </div>
        
        <div class="container_cour">
                    <div class="cards">
                        <div class="imgBx">
                            <img src="/img/content.png" alt="lesson icon">
                        </div>
                        <div class="contentBx">
                            <h2>Lessons</h2>
                            <p>Click the button below to see the lessons of this course.
                            </p>
                        <a href="?link=1" name="link1"><span>Read More</span></a>
                        </div>
                    </div> 
            <div class="cards">
                <div class="imgBx">
                    <img src="/img/homework.png" alt="tp icon">
                </div>
                <div class="contentBx">
                    <h2>Practicals Works</h2>
                    <p>Click the button below to see the practicals works of this course.
                    </p>
                    <a href="?link=1" name="link1"><span>Read More</span></a>
                </div>
            </div>
    
            <div class="cards">
                <div class="imgBx">
                    <img src="/img/exam.png" alt="exam icon">
                </div>
                <div class="contentBx">
                    <h2>Exams</h2>
                    <p>Click the button below to see the exams of this course.
                    </p>
                    <a href="?link=1" name="link1"><span>Read More</span></a>
                </div>
            </div>
        </div>
        @endif

</div>
@endsection