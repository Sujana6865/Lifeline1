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
            
            <div class="col-7 pt-sm-5">
                
                    <div class="navbar1 float-right">
                        <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                            <div class="navbar-nav">
                                <a class="nav-link" href="/" style="color: brown;">Home</a>
                                <a class="nav-link" href="/finddonor" style="color: brown;">Find Donor</a>
                                <a class="nav-link " href="/login" style="color: brown;">Log In</a>
                                <a class="nav-link" href="/userregister" style="color: brown;">Register</a>
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