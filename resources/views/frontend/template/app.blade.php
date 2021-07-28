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
    <div class="container">
        <div class="row" style="height:100vh">
            <div class="first col-5 mh-100" >
                <div class="logo p-md-5 text-center">
                    <a href=""><img src="" alt=""><h1>LifeLine</h1></a>
                </div>
            </div>
            <div class="col-7 py-sm-5">
                @yield('content')
            </div>
        </div>
    </div>
</body>
</html>