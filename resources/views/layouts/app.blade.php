<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="{{asset('css/style.css')}}" />

</head>

     <!-- Styles -->
     <style>
            html, body {
                background: linear-gradient(rgba(0, 0, 0, .6), rgba(0, 0, 0, .6)), 
                url("images/backgroundcancer.jpg");
               background-repeat: no-repeat;
               background-size:100% 100%;
               background-attachment:fixed;
                color:#ECF0F1  ;
                font-family: 'Muli', sans-serif;
                height: 100vh;
                margin: 0;
              

            }

            .row{
                padding-top:120px;
            }
            </style>
<body>
    <div id="app">
       

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
