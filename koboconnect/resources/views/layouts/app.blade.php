<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


{{-- for SEO --}}
<meta name="description" content="is a skilled craft worker who makes or creates material objects partly or entirely by hand. These objects may be functional or strictly decorative, for example furniture, decorative art, sculpture, clothing, food items, household items and tools and mechanisms such as the handmade clockwork movement of a watchmaker. Artisans practice a craft and may through experience and aptitude reach the expressive levels of an artist."/>
<meta name="keywords" content="a digital platform that connect artisans around you. we promote your business to wider range by promotions. This platform provides an avenue for small businesses to thrive,increase and expand beyond their market reach by opening up new market segments for their services via the internet. We also provides listings of different categories of artisans and SME’s in Nigeria as well as information on each artisans contact informations . This platform aims to expand the potential market space for artisans operating in urban and rural areas of Nigeria by basically giving them a platform to advertise their services to a larger audience than they would typically have access to. Additionally, it functions as a search point for individuals who desire information on where they may find or access artisans in their neighborhood. Currently, koboconnect covers the Akwa ibom , Cross river and Rivers state metropolitan areas. However, we hope the service will extend to all of Nigeria major cities.
"/>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> @yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="icon" type="image/png" href="{{ asset('../img/koboconnect1.png')}}"> 

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <script type="text/javascript" src="../carosuelimage/js/gScrollNumber.js"></script>
    
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    

    <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="../carosuelimage/css/screen.css" media="screen" />


<style>     
.d  {margin-left: 50px; float:left; height: 100px;border: 1px solid #000;margin-top: 10px; background-color:#E00445
; border-radius:3px;}
.dd{
padding-left: 350px;

}
     
</style>




{{-- 
    <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.0/normalize.min.css" rel="stylesheet" type="text/css">
   
    <link rel="stylesheet" href="../fxssrate/rate.css">
    <script src="../fxssrate/rate.js"></script> --}}
    <script src="https://code.jquery.com/jquery-1.12.4.min.js">
        </script>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('../plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css') }}">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{ asset('../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('../plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ asset('../plugins/jqvmap/jqvmap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('../dist/css/adminlte.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('../plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('../plugins/daterangepicker/daterangepicker.css') }}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('../plugins/summernote/summernote-bs4.min.css') }}">




		<!-- All CSS -->
        <link rel="stylesheet" href=" {{ asset('../frontend/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('../frontend/css/jquery-ui.css') }}">
        <link rel="stylesheet" href="{{ asset('../frontend/css/animate.min.css') }}">
        <link rel="stylesheet" href="{{ asset('../frontend/css/magnific-popup.css') }}">
        <link rel="stylesheet" href="{{ asset('../frontend/css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('../frontend/css/dataTables.bootstrap4.min.css') }}">
        <link rel="stylesheet" href="{{ asset('../frontend/css/select2.min.css') }}">
        <link rel="stylesheet" href="{{ asset('../frontend/css/select2-bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('../frontend/css/meanmenu.css') }}">
        <link rel="stylesheet" href="{{ asset('../frontend/css/spacing.css') }}">
        <link rel="stylesheet" href="{{ asset('../frontend/css/summernote-bs4.min.csss') }}">
        <link rel="stylesheet" href="{{ asset('../frontend/css/jquery.timepicker.css') }}">
        <link rel="stylesheet" href="{{ asset('../frontend/css/toastr.min.css') }}">
        <link rel="stylesheet" href="{{ asset('../frontend/css/sweetalert2.min.css') }}">
        <link rel="stylesheet" href="{{ asset('../frontend/fontawesome-free/css/all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('../frontend/css/style.css') }}">
        
        <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600;700&amp;display=swap" rel="stylesheet">
       
        
             <!-- All Javascripts -->
        <script src=" {{ asset('../frontend/js/jquery-3.6.0.min.js') }}   "></script>
        <script src="{{ asset('../frontend/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('../frontend/js/jquery-ui.js') }}"></script>
        <script src="{{ asset('../frontend/js/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('../frontend/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('../frontend/js/wow.min.js') }}"></script>
        <script src="{{ asset('../frontend/js/jquery.meanmenu.js') }}"></script>
        <script src="{{ asset('../frontend/js/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('../frontend/js/dataTables.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('../frontend/js/select2.full.js') }}"></script>
        <script src="{{ asset('../frontend/js/jquery.timepicker.js') }}"></script>
        <script src="{{ asset('../frontend/js/summernote-bs4.min.js') }}"></script>
        <script src="{{ asset('../frontend/js/fontawesome-iconpicker.js') }}"></script>
        <script src="{{ asset('../frontend/js/toastr.min.js') }}"></script>
        <script src="{{ asset('../frontend/js/sweetalert2.min.js') }}"></script>
        <script src="{{ asset('../../../../www.paypalobjects.com/api/checkout.js') }}"></script>
        <script src='{{ asset('../../../../www.google.com/recaptcha/api.js') }}'></script>
        </style>
        
        <script src="../../../../cdn.websitepolicies.io/lib/cookieconsent/1.0.3/cookieconsent.min.js" defer></script>
        <script>window.addEventListener("load",function(){window.wpcc.init({"colors":{"popup":{"background":"#50BF20","text":"#F8FFED","border":"#b3d0e4"},"button":{"background":"#FFFFFF","text":"#000000"}},"position":"bottom","padding":"large","margin":"none","content":{"message":"This website uses cookies to ensure you get the best experience on our website.","button":"ACCEPT"}})});</script>
                
        
                
        <style>
                    .mobile-nav.mean-container .mean-nav ul li a.active,
                    .main-nav nav .navbar-nav .nav-item a:hover,
                    .main-nav nav .navbar-nav .nav-item a:focus,
                    .main-nav nav .navbar-nav .nav-item a.active,
                    .main-nav nav .navbar-nav .nav-item:hover a,
                    .main-nav nav .navbar-nav .nav-item .dropdown-menu li a:hover,
                    .main-nav nav .navbar-nav .nav-item .dropdown-menu li a:focus,
                    .main-nav nav .navbar-nav .nav-item .dropdown-menu li a.active,
                    .main-nav nav .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li a:hover,
                    .main-nav nav .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li a:focus,
                    .main-nav nav .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li a.active,
                    .main-nav nav .navbar-nav .nav-item .dropdown-menu li:hover a,
                    .main-nav nav .navbar-nav .nav-item .dropdown-menu li a:hover,
                    .listing .listing-item .text .location,
                    .listing .listing-item .text h3 a:hover,
                    .footer-item h2,
                    .footer-item ul li a:hover,
                    .listing-filter .lf-heading,
                    .listing .listing-item .text .location a,
                    .listing-single-banner .listing-items a,
                    .listing-page h2 i,
                    .listing-page .amenities li i,
                    .listing-page .contact a,
                    .listing-page .review-overall .total,
                    .listing-sidebar .ls-widget .agent-contact li,
                    .listing-sidebar .ls-widget .agent-contact li a,
                    .listing-sidebar .ls-widget .category ul li a,
                    .faq h4.panel-title a,
                    .sidebar .widget .type-1 ul li:before,
                    .sidebar .widget .type-1 ul li a:hover,
                    .contact-icon i,
                    .reg-login-form .link,
                    .reg-login-form .new-user a {
                        color: #E00445;
                    }
        
                    .main-nav nav .navbar-nav .nav-item .dropdown-menu li a:hover {
                        color: #E00445!important;
                    }
        
                    .search-section .input-group-append button,
                    .listing .listing-item .photo .category a,
                    .popular-city-carousel .owl-nav .owl-prev,
                    .popular-city-carousel .owl-nav .owl-next,
                    .footer-social-link ul li a,
                    .scroll-top,
                    .page-banner,
                    .filter-button,
                    .listing-sidebar .ls-widget .agent-social ul li a,
                    .listing-sidebar .ls-widget a.agent-view-profile,
                    .pricing .btn,
                    .contact-form .btn,
                    .listing .owl-nav .owl-prev, 
                    .listing .owl-nav .owl-next,
                    .reg-login-form button {
                        background: #E00445;
                    }
        
                    .footer-social-link ul li a,
                    .contact-form .btn {
                        border-color: #E00445;
                    }
        
                    .listing-filter .lf-heading {
                        border-bottom-color: #E00445;
                    }
        
                    .footer-social-link ul li a:hover {
                        color: #fff!important;
                    }
                </style>
        
        






</head>
<body>
   

    <div id="mySidepanel" class="sidepanel">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        {{-- <a href="#">About</a>
        <a href="#">Services</a>
        <a href="#">Clients</a>
        <a href="#">Contact</a> --}}

        

        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                {{-- @guest --}}
                <li class="nav-item">
               
                </li>
                <li class="nav-item">
                    <a href="{{ route('index') }}" class="nav-link "><span class="mtext"><b>Home</b></span> </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('about') }}" class="nav-link"><span class="mtext"><b>About</b></span></a>
                </li>

                <li class="nav-item">
                    <a href="javascript:void;" class="nav-link dropdown-toggle"><span class="mtext"><b>Checks</b></span></a>
                    <ul class="dropdown-menu">

                        <li class="nav-item">
                            <a href=" {{ route('searchList') }}" class="nav-link"><span class="mtext"><b>Listings</b></span></a>
                        </li>

                        

                        <li class="nav-item">
                            <a href="{{ route('faq') }}" class="nav-link"><span class="mtext"><b>FAQ</b></span></a>
                            </li>	
                            
                            {{-- <li class="nav-item">
                                <a href="" class="nav-link">Jobs</a>
                                </li> --}}
                            <li class="nav-item">
                                <a href="" class="nav-link"><span class="mtext"><b>Blog</b></span></a>
                                </li>

                        </ul>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('contact') }}" class="nav-link"><span class="mtext"><b>Contact</b></span></a>
                            </li>
                        
                            @if (Route::has('login'))
                            <li class="nav-item  nav-item-last">
                                <a class="nav-link" href="{{ route('login') }}"><i class="fas fa-sign-in-alt "></i><span class="mtext"><b>{{ __('Login') }}</b></a>
                            </li>
                        @endif
                              
                        </ul>
                </li>
            </ul>
        </div>
    </div>


    <!-- Start Navbar Area -->
<div class="navbar-area" id="stickymenu">

<!-- Menu For Mobile Device -->
<div class="mobile-nav">
    <a href="#" class="logo ">
        <img src="  {{ asset('../img/original.png') }}" alt="">
    </a>
</div>

<!-- Menu For Desktop Device -->
@guest
<div class="main-nav">
<div class="container">
    {{-- navbar navbar-expand-md navbar-light --}}
    <nav class="navbar navbar-expand-md ">
    {{-- //reaprite.com/ --}}
    <a href="#" class="logo ">
           <img src="{{ asset('../img/original.png') }}" alt="">
      </a>
        {{-- <a class="navbar-brand" href="#">
            <img src="{{ asset('../img/koboconnect1.png') }}" alt="">
        </a> --}}
        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                {{-- @guest --}}
                <li class="nav-item">
                    <a href="{{ route('index') }}" class="nav-link ">Home</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('about') }}" class="nav-link">About</a>
                </li>

                <li class="nav-item">
                    <a href="javascript:void;" class="nav-link dropdown-toggle">Checks</a>
                    <ul class="dropdown-menu">

                        <li class="nav-item">
                            <a href=" {{ route('searchList') }}" class="nav-link">Listings</a>
                        </li>

                        
                        <li class="nav-item">
                            <a href="{{ route('faq') }}" class="nav-link">FAQ</a>
                            </li>

                              {{-- <li class="nav-item">
                                <a href="" class="nav-link">Jobs</a>
                                </li>			 --}}
                            <li class="nav-item">
                                <a href="" class="nav-link">Blog</a>
                                </li>

                        </ul>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('contact') }}" class="nav-link">Contact</a>
                            </li>
                        
                            @if (Route::has('login'))
                            <li class="nav-item  nav-item-last">
                                <a class="nav-link" href="{{ route('login') }}"><i class="fas fa-sign-in-alt"></i> {{ __('Login') }}</a>
                            </li>
                        @endif
                              
                       
                {{-- @else --}}

                  {{-- <li class="nav-item">
                        <a href="javascript:void;" class="nav-link dropdown-toggle"> {{ Auth::user()->name }}</a>
                        <ul class="dropdown-menu">

                        <li class="nav-item">
                            <a  href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                             {{ __('Logout') }}
                         </a>
                         <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                        </li> --}}

                        {{-- <li class="nav-item">
                            <a href="../faq.html" class="nav-link">FAQ</a>
                            </li>			
                            <li class="nav-item">
                                <a href="../blog.html" class="nav-link">Blog</a>
                                </li> --}}

                        {{-- </ul>

                    </li> --}}






                    {{-- <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li> --}}
                {{-- @endguest --}}










                        </ul>
                </li>
            </ul>
        </div>
    </nav>
</div>
</div>
</div>


@endguest


















{{-- 
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Koboconnect') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest

                        <li class="nav-item">
                            <a href="../index.html" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="../about.html" class="nav-link">About</a>
                        </li>
                        <li class="nav-item">
                            <a href="javascript:void;" class="nav-link dropdown-toggle">Checks</a>
                            <ul class="dropdown-menu">
    
                                <li class="nav-item">
                                    <a href="../listing-resultbc38.html?text=" class="nav-link">Listings</a>
                                </li>
    
                                <li class="nav-item">
                                    <a href="../faq.html" class="nav-link">FAQ</a>
                                    </li>			
                                    <li class="nav-item">
                                        <a href="../blog.html" class="nav-link">Blog</a>
                                        </li>
    
                                    </ul>
                                </li><li class="nav-item">
                                    <a href="../contact.html" class="nav-link">Contact</a>
                                    </li>
                            







                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav> --}}






        <main class="anav" >
            @yield('content')
        </main>
    </div>




    @guest

    <div class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="footer-item footer-service ">
                        <h2>Categories</h2>
                        <ul class="fmain ">
                            <li >
                                <i class="fas fa-angle-right arros"> <a href="#">Auto Mechanic</a></i>
                            </li>						          
                            <li>
                                <i class="fas fa-angle-right arros"> <a  href="#">Electrician</a></i>
                                </li>
                                                                                                               
                                <li>
                                    <i class="fas fa-angle-right arros"> <a  href="#">Panel beater</a></i>
                                </li>
                                                                                                             
                                <li>
                                    <i class="fas fa-angle-right arros"> <a  href="#">Vulcanizer</a></i>
                                </li>
                                <li>
                                    <i class="fas fa-angle-right arros">  <a  href="#">Tutors</a></i>
                                </li>
                            
    
                                <li>
                                    <i class="fas fa-angle-right arros"> <a  href="#">Makeup Artist</a></i>
                                </li>
                                <li>
                                    <i class="fas fa-angle-right arros">  <a  href="#">Nursemaid</a></i>
                                </li>
                                <li>
                                    <i class="fas fa-angle-right arros"> <a  href="#">Fashion designer</a></i>
                                </li>

                                <li>
                                    <i class="fas fa-angle-right arros"> <a  href="#">Kiosk owner</a></i>
                                </li>
                                                                                                               
                                <li>
                                    <i class="fas fa-angle-right arros">  <a  href="#">Petty trader</a></i>
                                </li>
                                               
                            </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="footer-item footer-service">

                        <h2>Location</h2>
                        
                        <ul class="fmain">
                            {{-- <i class="far fa-dot-circle"><a href="">Akwa Ibom, Nigeria</a></i> --}}
                    <li><i class="fas fa-angle-right arros"><a href="" >Akwa Ibom, Nigeria</a></i></li>
                     <li><i class="fas fa-angle-right arros"><a href="">Cross River, Nigeria</a></i></li>
                     <li><i class="fas fa-angle-right arros"><a href="">Rivers, Nigeria</a></i></li>
                    {{-- <li><i class="far fa-dot-circle"><a href="">Imo,Nigeria</a></i></li> 
                     <li><i class="far fa-dot-circle"><a href="">Abia, Nigeria</a></i></li>  --}}
                   
                   
                    </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="footer-item footer-service">
                        <h2>Footer Menu</h2>
                        <ul class="fmain ">
                            <li><i class="fas fa-angle-right arros"><a  href="#">Home</a></i></li>
    
                                                    <li><i class="arros fas fa-angle-right"><a   href="{{ route('privacy') }}">Privacy Policy</a></i></li>
                            
                                                    <li><i class=" arros fas fa-angle-right"><a href="{{ route('terms') }}">Terms and Conditions</a></i></li>
                            
                                                    <li><i class="arros fas fa-angle-right"><a  href="">Blog</a></i></li>
                            
                                                    <li ><i class=" arros fas fa-angle-right"><a  href="{{ route('faq') }}">FAQ</a></i></li>
                            
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="footer-item footer-contact">
                        <h2>Contact</h2>
                        <ul>
                            <li class="far fa-dot-circle">
                            <p> Elibrary Akwa Ibom,Nigeria.</p>
                            </li>
                            <li class="far fa-dot-circle">
                           <p>koboconnect@gmail.com</p>
                              
                            </li>
                            <li class="far fa-dot-circle">
                              <p>+234-806-610-3913</p> 
                            </li>
                        </ul>
                    </div>
                    <div class="footer-item footer-service">
                        <div class="footer-social-link">
            <ul>
     <li><a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
    <li><a href="https://www.twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a></li>
    <li><a href="https://www.linkedin.com/" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
       <li><a href="https://www.pinterest.com/" target="_blank"><i class="fab fa-pinterest-p"></i></a></li>
                        </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row  ">
                <div class="col-md-12">
                    <div class="copyright">
                        <p class="txtcolor"> Copyright @2022.Eu-soft.com. All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="scroll-top">
        <i class="fas fa-long-arrow-alt-up"></i>
  </div>

  @else

    <footer class="main-footer">
        <div class="row  ">
            <div class="col-md-12">
                <div class="copyright">
                    <p class="userfoot"> Copyright @2022.Eu-soft.com. All Rights Reserved.</p>
                </div>
            </div>
        </div>
      </footer>   
      @endguest
        <script src="{{ asset('../frontend/js/custom.js') }}"></script>
        <script src="{{ asset('../frontend/js/ltr.js') }}"></script>
  
        
       
<!-- jQuery -->
<script src="{{ asset('../plugins/jquery/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('../plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('../plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ asset('../plugins/chart.js/Chart.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ asset('../plugins/sparklines/sparkline.js') }}"></script>
<!-- JQVMap -->
<script src="{{ asset('../plugins/jqvmap/jquery.vmap.min.js') }}"></script>
<script src="{{ asset('../plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('../plugins/jquery-knob/jquery.knob.min.js') }}"></script>
<!-- daterangepicker -->
<script src="{{ asset('../plugins/moment/moment.min.js') }}"></script>
<script src="{{ asset('../plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<!-- Summernote -->
<script src="{{ asset('../plugins/summernote/summernote-bs4.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('../dist/js/adminlte.js') }}"></script>
<!-- AdminLTE for demo purposes -->
{{-- <script src="../dist/js/demo.js"></script> --}}
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('../dist/js/pages/dashboard.js') }}"></script>
   

<script type="text/javascript" src="../carosuelimage/js/imagenames.js"></script>
    
</body>
</html>
