<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!-- Styles -->
        <style>
            html, body {
                background-color: white;
                color: #000000;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin:0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right:45px;
                top: 35px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 70px;
                margin-top:50px;
                margin-right: 20px;
                text-align: center;
            
            }

            .links > a {
                color: hsl(#2E2532);
                padding:  10px;
                font-size: 20px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
                border: 1px solid #9b9b9b;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                       <!--  @if (Route::has('register'))
                            <a href="{{ route('register') }}">Registro</a>
                        @endif -->
                    @endauth
                </div>
            @endif
            <div class="col-md-4">
                <img src="17.jpg"style="width: : 15px;height: 210px;">
                 <img src="20.jpg"style="width: : 15px;height: 210px;">
                 <img src="18.jpg"style="width: :15px;height: 210px;">
                 <img src="19.jpg"style="width: : 15px;height: 210px;">
            </div>
            <div class="col-md-9">
                <div class="title m-b-md">
                    TRANSVINUEZA
                     <img src="imagen1.png" style=" height: 175px;width:500px">
                     <p style="font-weight:bold;color:black;font-size: 30px">SERVICIO DE TRANSPORTE DE CARGA PESADA POR CARRETERA</p>
                </div>
               <!--  <div class="img">
                    <img src="imagen1.png" style="width:900px;height: 450px">
                </div> -->
               <!--  <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div> -->
            </div>
            </div>
        </div>
    </body>
</html>
