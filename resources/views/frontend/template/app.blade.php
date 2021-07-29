<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Life line</title>

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
            
            <div class="col-7 mh-100">
                <nav class="navbar-light bg-light ml-sm-4 float-right">
                        
                            @if (Route::has('login'))
                                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                    @auth
                                        <nav class="navbar navbar-expand-lg navbar-light bg-light">
                                            <ul class="navbar-nav">
                                                <li class="nav-item">
                                                    <a class="nav-link" href="{{ url('/') }}" class="text-sm text-gray-700 underline" style="color: brown;">Home</a>

                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="/finddonor" style="color: brown;">Find Donor</a>

                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                                    <i class="nav-icon fas fa-sign-out-alt"></i>
                                                    {{ __('Logout') }}
                                                    </a>
                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                        @csrf
                                                    </form>
                                                </li>
                                            </ul>
                                        </nav>  
                                        

                                       

                                    @else
                                        <nav class="navbar navbar-expand-lg navbar-light bg-light">
                                            <ul class="navbar-nav">
                                                <li class="nav-item">
                                                    <a class="nav-link" href="{{ url('/') }}" class="text-sm text-gray-700 underline" style="color: brown;">Home</a>

                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="/finddonor" style="color: brown;">Find Donor</a>

                                                </li>
                                                <li class="nav-item p-sm-2">
                                                    <a href="{{ route('login') }}" class="text-sm text-gray-700 underline ">Log in</a>
                                                </li>
                                                <li class="nav-item pt-sm-2">
                                                    @if (Route::has('register'))
                                                        <a href="{{ route('user.create') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                                                    @endif
                                                </li>
                                            </ul>
                                        </nav>
                                    @endauth
                                </div>
                            @endif
                        
                </nav>

                
                <div>
                    @yield('content')
                </div>
                       
               
            </div>
        </div>
    </div>
   
</body>
</html>