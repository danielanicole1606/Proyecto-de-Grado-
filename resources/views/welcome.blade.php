<!DOCTYPE html>
<html lang="en">
<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Transvinueza</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content=""> 
    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <!-- Responsive-->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <!-- fevicon -->
    <link rel="icon" href="{{ asset('images/fevicon.png') }}" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/jquery.mCustomScrollbar.min.css') }}">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="{{ asset('https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css') }}">
    <!-- owl stylesheets --> 
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css') }}" media="screen">

</head>
<!-- body -->
<body>
    <div class="header_main" style="height: 120px">
        <div class="container">
            <div class="logo"><img src="{{ asset('images/imagen2.png') }}" width="200px" style="margin-top:-40px"></a></div>
        </div>
    </div>
</div>
<div class="header" style="height:60px">
    <div class="container">
        <!--  header inner -->
        <div class="col-sm-12">

         <div class="menu-area">
            <nav class="navbar navbar-expand-lg ">
                <!-- <a class="navbar-brand" href="#">Menu</a> -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                       <li class="nav-item active">
                        <a class="nav-link" style="margin-left: 50px; margin-top: -10px"><i class="far fa-envelope"></i> Correo : edison-transv@hotmail.com</a> </li>
                        <li class="nav-item">
                            <a class="nav-link" style="margin-left: 190px; margin-top: -10px"><i class="fas fa-phone-square-alt"></i> Contacto : (02)3678556 - 0994929201</a></li>
                            <li class="nav-item">
                               <li class="last">
                                @if (Route::has('login'))
                                <div style=" margin-right: -90px;margin-top: -10px">
                                    @auth
                                    <a href="{{ url('/home') }}">Home</a>
                                    @else
                                    <a href="{{ route('login') }}"><i class="far fa-share-square"></i> Login</a>

                      <!--   @if (Route::has('register'))
                            <a href="{{ route('register') }}">Registro</a>
                            @endif -->
                            @endauth
                        </div>
                        @endif
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div> 
</div>
<!-- end header end -->        
<!--banner start -->
<div class="banner-main" style="height: 500px">
    <div class="container">
     <div id="main_slider" class="carousel slide" data-ride="carousel">  
         <!-- The slideshow -->
         <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="titlepage-h1">
                    <img src="{{ asset('images/3.jpg') }}" width="900px">
                </div>
            </div>
            <div class="carousel-item">
                <div class="titlepage-h1">
                 <img src="{{ asset('images/6.png') }}" width="900px">
             </div>  
         </div>
         <div class="carousel-item">
            <div class="titlepage-h1">
             <img src="{{ asset('images/5.jpg') }}" width="900px">
         </div>  
     </div>
 </div> 
 <a class="carousel-control-prev" href="{{ asset('#main_slider') }}" role="button" data-slide="prev">
    <i class="fa fa-angle-left"></i>
</a>
<a class="carousel-control-next" href="{{ asset('#main_slider') }}" role="button" data-slide="prev">
    <i class="fa fa-angle-right"></i>
</a>
</div>
</div>
</div>
<!--banner end -->
<!--services start -->
<div class="services_main" style="height: 90px">
    <div class="container">
        <div class="creative_taital" style="height:90px">
            <h1 class="creative_text" style="font-size: 50px;">TRANSVINUEZA</h1>
            <p style="color: #050000; text-align: center;font-size: 42px;">SERVICIO DE TRANSPORTE DE CARGA </p>
            <p style="color: #050000; text-align: center;font-size: 42px;">PESADA POR CARRETERA</p>
            
        </div>
        <!-- Javascript files-->
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/popper.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
        <script crossorigin="anonymous" src="{{ asset('https://kit.fontawesome.com/83385095c8.js') }}"></script>
    </body>
    </html>