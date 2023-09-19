<!DOCTYPE html>
<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <title>Aakriti</title>
    <meta name="author" content="">
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="{{ url('public/web/style.css')}}">
    <!-- Colors -->
    <link rel="stylesheet" type="text/css" href="{{ url('public/web/assets/css/colors/color1.css')}}" id="colors">


    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="{{ url('web/assets/icon/favicon.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{ url('public/web/assets/icon/apple-touch-icon-158-precomposed.png')}}">
</head>

<body class="header-fixed page no-sidebar header-style-2 topbar-style-2 menu-has-search">

<div id="wrapper" class="animsition">
    <div id="page" class="clearfix">

    <div id="site-header-wrap">
                 <!--<div id="top-bar">
                <div id="top-bar-inner" class="container">
                    <div class="top-bar-inner-wrap">
                        <div class="top-bar-content">
                            <div class="inner">
                                <span class="address content">4946 Marmora Road, Central New</span>
                                <span class="phone content">+61 3 8376 6284</span>
                                <span class="time content">Mon-Sat: 8am - 6pm</span>
                            </div>                            
                        </div>

                        <div class="top-bar-socials">
                            <div class="inner">
                                <span class="text">Follow us:</span>
                                <span class="icons">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-pinterest-p"></i></a>
                                    <a href="#"><i class="fa fa-rss"></i></a>
                                </span>
                            </div>
                        </div>
                    </div>                    
                </div>
            </div> 

            <!- Header -->
            <header id="site-header">
                <div id="site-header-inner" class="container">                    
                    <div class="wrap-inner clearfix">
                        <div id="site-logo" class="clearfix">
                            <div id="site-log-inner">
                                <a href="index.php" rel="home" class="main-logo">
                                    <img src="{{ url('public/web/assets/img/logo-small.png')}}" alt="Autora" width="100" height="20">
                                </a>
                            </div>
                        </div><!-- /#site-logo -->

                        <div class="mobile-button">
                            <span></span>
                        </div><!-- /.mobile-button -->

                        <nav id="main-nav" class="main-nav">
                            <ul id="menu-primary-menu" class="menu">
                                <li class="menu-item menu-item-has-children {{ Request::is('/') ? 'current-menu-item' : '' }}">
                                    <a href="/">HOME</a>
                                </li>
                                <li class="menu-item menu-item-has-children {{ Request::is('about') ? 'current-menu-item' : '' }}">
                                    <a href="/about">ABOUT US </a>
                                </li>
                                <li class="menu-item menu-item-has-children {{ Request::is('projects') ? 'current-menu-item' : '' }}">
                                    <a href="/projects">PROJECTS</a>
                                </li>
                                <li class="menu-item menu-item-has-children {{ Request::is('services') ? 'current-menu-item' : '' }}">
                                    <a href="/services">SERVICES</a>
                                </li>
                                <li class="menu-item menu-item-has-children {{ Request::is('contact') ? 'current-menu-item' : '' }}">
                                    <a href="/contact">CONTACT US</a>
                                </li>
                            </ul>
                        </nav><!-- /#main-nav -->

                        <!--<div id="header-search">
                            <a href="#" class="header-search-icon">
                                <span class="search-icon fa fa-search">
                                </span>
                            </a>

                            <form role="search" method="get" class="header-search-form" action="#">
                                <label class="screen-reader-text">Search for:</label>
                                <input type="text" value="" name="s" class="header-search-field" placeholder="Search...">
                                <button type="submit" class="header-search-submit" title="Search"><i class="fa fa-search"></i></button>
                            </form>
                        </div><!- /#header-search -->
                    </div><!-- /.wrap-inner -->                    
                </div><!-- /#site-header-inner -->
            </header><!-- /#site-header -->
        </div><!-- #site-header-wrap -->