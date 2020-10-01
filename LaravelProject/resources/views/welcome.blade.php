<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>ELearning</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    
<!--start navbar-->
<nav class="navbar navbar-expand-lg navbar-light  bg-white shadow-sm">
    <a class="navbar-brand" href="{{ url('/') }}">
            <span>E-</span><span>Learning</span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
            <a class="nav-link" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
            </li>
          </ul>
         
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('etudiant.login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('etudiant.register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                            @if (Route::has('register'))
                        <a class="nav-link" href="{{ route('enseignant.register') }}">Register as professor</a>
                    @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{Auth::user()->nom }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>





        </div>
      </nav>
<!--end navbar-->

<!--start cover-->
<div class="cover">
    <div id="main-cover" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <h1><span> Learning </span><br> has No place No age and No limits<br>  Only You and Your WILL <br><span class="start"><a href="#">Get Started</a></span> </h1>
          
        <div class="overlay">
        </div>
          <div class="carousel-item active">
          </div>
        
        
     </div>
     </div>
    </div>

<!--end cover-->
<!--start features-->
<div class="tit">
<h2>E-Learning Advantages</h2>
  </div>
<div class="features text-center">
  <div class="container">
    <div class="row">
      <div class="col-sm-6 col-lg-3">
        <i class="fas fa-arrow-alt-circle-up fa-3x rounded-circle"></i>
       <div class="scalable">
          <h4>Scalable</h4>
        <p>Elearning enables us to quickly create and communicate new policies, training, ideas, and concepts.</p>
      </div>
      </div>
      <div class="col-sm-6 col-lg-3">
        <i class="fas fa-brain fa-3x rounded-circle"></i>
        <h4>Capacity and Consistency </h4>
        <p>Using elearning allows educators to achieve a great degree of coverage for their target audience, and it ensures that the message is communicated in a consistent fashion.</p>
      </div>
      <div class="col-sm-6 col-lg-3 ">
        <i class="fas fa-signal fa-3x rounded-circle"></i>
        <h4> High Learning Retention</h4>
        <p>Blended learning approaches result in a higher knowledge retention rate. It also helps that coursework can be refreshed and updated whenever needed.</p>
      </div>
      <div class="col-sm-6 col-lg-3">
        <i class="fas fa-hand-holding-usd fa-3x rounded-circle"></i>
        <h4>Time and Money Savings</h4>
        <p>Elearning reduces time away from the workplace, eliminates the need for travel, and removes the need for classroom-based training.</p>
      </div>
    </div>
  </div>
</div>

<!--end features-->
<!--start static-->
<div class="stats text-center">
  <div class="container">
    <div class="row">
      <div class="col-6 col-md-4 ">
        <i class="fas fa-user-graduate fa-fw fa-3x"></i>
        <span class="number">+10k</span>
        <p>Students</p>
      </div>

      <div class="col-6 col-md-4 ">
        <i class="fas fa-user-tie fa-fw fa-3x"></i>
        <span class="number">+1k</span>
        <p>Professors</p>
      </div>

      <div class="col-6 col-md-4 ">
        <i class="fas fa-file fa-fw fa-3x"></i>
        <span class="number">+200</span>
        <p>Courses</p>
      </div>
    </div>
  </div>

</div>

<!--end static-->
<!--start our-course-->


  <div class="our-course text-center">
    <div class="container">
      <div class="tit">
        <h2>From Our Courses</h2>
          </div>
      <div class="card-deck">
        <div class="card">
          <img src="image/js.png" class="card-img-top" alt="JavaScript" width="200" height="200">
          <div class="card-body">
            <h5 class="card-title">JavaScript</h5>
            <p class="card-text">JavaScript, often abbreviated as JS, is a programming language that conforms to the ECMAScript specification. JavaScript is high-level, often just-in-time compiled, and multi-paradigm. </p>
            <a href="#" class="btn btn-primary">Browse</a>
          </div>
        </div>

        <div class="card">
          <img src="image/lr.jfif" class="card-img-top" alt="laravel" width="200" height="200">
          <div class="card-body">
            <h5 class="card-title">Laravel FrameWork</h5>
            <p class="card-text">Laravel is a free, open-source PHP web framework,intended for the development of web applications following the model–view–controller architectural pattern and based on Symfony.</p>
            <a href="#" class="btn btn-primary">Browse</a>
          </div>
        </div>

        <div class="card">
          <img src="image/c.jfif" class="card-img-top" alt="JavaScript" width="200" height="200">
          <div class="card-body">
            <h5 class="card-title">C#(C Sharp)</h5>
            <p class="card-text">C# is a general object-oriented programming (OOP) language for networking and Web development. C# is specified as a common language infrastructure (CLI) language.</p>
            <a href="#" class="btn btn-primary">Browse</a>
          </div>
        </div>

      </div>
    </div>
  </div>

<!--end our-course-->
<!--start about-us-->
<div class="about-us">
<div class="container-fluid">
  <div class="row">
    <div class="col-6">
      <h2>About Us</h2>
      <p>In this technological world that we live in, it is very important for teachers to be in step with new technologies. This will allow them to better understand their students who are actively browsing the web. Tutors will be able to adapt their teaching methods to their learners’ needs and they will improve their own IT abilities.</p>
    </div>
    <div class="col-6">
       <h2>Contact Us</h2>
         <i class="fab fa-facebook-square"></i><span> Elearning Group</span><br>
         <i class="fas fa-envelope"></i><span> e-learning.group@gmail.com</span><br>
         <i class="fab fa-linkedin"></i><span> Elearning Group</span>
    </div>
  </div>
</div>
</div>

<!--end about-us-->
<!--start footer-->
<footer>
  copyright 2020 E-Learning Group
  </footer>
<!--end footer-->
    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>