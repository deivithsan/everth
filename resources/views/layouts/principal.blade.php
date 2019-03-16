<!DOCTYPE html>
<!--[if lt IE 9 ]><html class="no-js oldie" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>FOR EVER.TH</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="{{ asset('css/base.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendor.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">

    <!-- script
    ================================================== -->
    <script src="{{ asset('js/modernizr.js') }}"></script>
    <script src="{{ asset('js/pace.min.js') }}"></script>

    <!-- favicons
    ================================================== -->
    <link rel="shortcut icon" href="{{ asset('images/principal/logo2.png') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('images/principal/logo2.png') }}" type="image/x-icon">

    @yield('css')
</head>

<body id="top">

<!-- header
================================================== -->
<header class="s-header">

    <div class="header-logo">
        <a class="site-logo" href="{{ url('/') }}">
            <img src="{{ asset('images/principal/logo.png') }}" alt="logo">
        </a>
    </div>

    <nav class="header-nav">

        <a href="#0" class="header-nav__close" title="close"><span>Close</span></a>

        <div class="header-nav__content">
            <h3>Navegación</h3>

            <ul class="header-nav__list">
                <li class="current"><a class="smoothscroll"  href="#home" title="home">Inicio</a></li>
                <li><a class="smoothscroll"  href="#about" title="about">About</a></li>
                <li><a class="smoothscroll"  href="#services" title="services">Que vamos a hacer</a></li>
                <li><a class="smoothscroll"  href="#works" title="works">Galeria</a></li>
                <li><a class="smoothscroll"  href="#contact" title="contact">Contactame</a></li>
            </ul>

            <ul class="header-nav__social">
                <li>
                    <a href="#"><i class="fa fa-facebook"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-behance"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-dribbble"></i></a>
                </li>
            </ul>

        </div> <!-- end header-nav__content -->

    </nav>  <!-- end header-nav -->

    <a class="header-menu-toggle" href="#0">
        <span class="header-menu-text">Menu</span>
        <span class="header-menu-icon"></span>
    </a>

</header>
@yield('contenido')
</body>
</html>
