<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    
    

    <!-- Fonts 
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">-->

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
    <link href="{{ asset('css/register.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin-home.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin-app.css') }}" rel="stylesheet">

    <link href="{{ asset('css/tqrcode.css') }}" rel="stylesheet">


</head>
<body>
    
        <!--<nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">-->
                    <!-- Left Side Of Navbar -->
                    <!--<ul class="navbar-nav mr-auto">

                    </ul>-->

                    <!-- Right Side Of Navbar -->
                    <!--<ul class="navbar-nav ml-auto">-->
                        <!-- Authentication Links -->
                        <!--@if(!auth()->guard('admin')->check())
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('admin.login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('admin.register') }}">{{ __('Register') }}</a>
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::guard('admin')->user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
        <h1>Admin Dashboard</h1>-->

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                
  <a class="navbar-brand" href=""> <i class="fab fa-houzz"></i> Dashboard</a>
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
        @if(auth()->guard('admin')->check())
      <li class="nav-item">
        <a class="nav-link" href="#"> <i class="fas fa-award"></i> {{ Auth::guard('admin')->user()->name }}</a>
      </li>
        
      <li class="nav-item">
        <a class="nav-link" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="fas fa-sign-out-alt"></i> {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
      </li>
      @endif
    </ul>
  </div>
  </div>
</nav>


<div class="sidebar">
    <ul>
        <li><a href="#"> <i class="fas fa-hotel"></i> Dashboard</a></li>
        <li><a href="{{ url('admin/type-qrcode') }}"> <i class="fas fa-qrcode"></i> QrCode Types</a></li>
        <li><a href="#"> <i class="fas fa-align-left"></i> Contents</a></li>
        <li><a href="#">hh</a></li>
        <li><a href="#">hh</a></li>
        <li><a href="#">hh</a></li>
        <li><a href="#">hh</a></li>
    </ul>
</div>
<a class="but"> <i class="fas fa-align-left"></i> </a>

<script type="text/javascript">
        $('.but').on("click",function() {
            $('.but').toggleClass('butc');
            $('.sidebar').toggleClass('side');
        });
    </script>
<script type="text/javascript">
    $(function () {

        'use strict';

        var winH = $(window).height(),
            upperH = $('.navbar-light').innerHeight();
        $('.sidebar').height(winH - upperH);
    });
</script>

        <!--<main class="py-4">-->
            @yield('content')
        <!--</main>-->

        <script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
    
</body>
</html>
