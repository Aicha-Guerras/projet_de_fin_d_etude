<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Unknown Page')</title>
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    {{-- <div class="container_pages"> --}}
        {{-- Start Navigation Bar --}}    
        @include('layouts.navbar')
        {{-- End Navigation Bar --}}      
        @yield('content')
        {{-- @include('layouts.sidebar') --}}
        <footer>
            <p>Copyright 2020 E-Learning Group</p>
        </footer>
    {{-- </div> --}}
</body>
</html>