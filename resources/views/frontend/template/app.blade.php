<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" ></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/mystyle.css') }}" rel="stylesheet">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

</head>
<body>
    <div class="container-fluid">
        <div class="row" style="height:100vh">
            <div class="first col-5 mh-100 text-center pt-sm-5" >
                <a href="/"><img src="{{ asset('images/logowhite.png') }}" alt="" class="img-fluid" style="height: 100px;width:300px;" ></a>
            </div>
            
            <div class="col-7 pt-sm-5 mh-100">
                
                    <div class="navbar1 float-right">
                        <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                            <div class="navbar-nav">
                                <a class="nav-link" href="/" style="color: brown;">Home</a>
                                <a class="nav-link" href="/finddonor" style="color: brown;">Find Donor</a>
                                @if (Route::has('login'))
                                    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                        @auth
                                            <a href="{{ url('/') }}" class="text-sm text-gray-700 underline">Home</a>
                                            <a class="nav-link" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                                document.getElementById('logout-form').submit();">
                                                                <i class="nav-icon fas fa-sign-out-alt"></i>
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                    @csrf
                                            </form>

                                        @else
                                            <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                                            @if (Route::has('register'))
                                                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                                            @endif
                                        @endauth
                                    </div>
                                @endif
                            </div>  
                        </div>
                        </nav> 
                    </div>
                        
                    @yield('content')
                
            </div>
        </div>
    </div>
   
</body>
</html>