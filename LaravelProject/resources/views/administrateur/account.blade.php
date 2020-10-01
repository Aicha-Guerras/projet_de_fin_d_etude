<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Accounts</title>
    <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ URL::asset('css/all.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ URL::asset('css/main.css') }}" rel="stylesheet" type="text/css" >
    
</head>
<body>
    
    <!--start navbar-->
    <nav class="navbar navbar-expand-lg navbar-light  bg-white shadow-sm">
    <a class="navbar-brand" href="{{ url('/administrateur') }}">
            <span>E-</span><span>Learning</span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
            <a class="nav-link" href="{{ url('/administrateur') }}">Home <span class="sr-only">(current)</span></a>
            </li>
          </ul>
         
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('admin.logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
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

   <div class="admin  position-ref full-height">
        <div class="container">
   
        <h4><span>Professors Accounts :</span></h4>
@foreach($ense as $enseignant)
   <h6>*{{$enseignant->nom}}  {{$enseignant->prenom}}       </h6>
   <form action="{{route('enseignant.destroy',$enseignant->id)}}" method="POST">
    @csrf
    @method('DELETE')
    <button>Delete  <i class="fas fa-trash-alt"></i></button>
        </form>

@endforeach
   
   <h4><span>Students Accounts</span></h4>
   </div>
   </div>

   
    <!--start footer-->
<footer>
    copyright 2020 E-Learning Group
    </footer>
  <!--end footer-->
   
   

    
    
  <script type="text/javascript" src="{{ URL::asset('js/jquery-3.5.1.slim.min.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('js/popper.min.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('js/main.js') }}"></script>
</body>
</html>