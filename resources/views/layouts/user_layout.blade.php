<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" href="img/favicon.png" type="image/png">
  <title>Smart Educator</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="{{asset('css/bootstrap.css') }}">
  <link rel="stylesheet" href="{{asset('vendors/linericon/style.css') }}">
  <link rel="stylesheet" href="{{asset('css/font-awesome.min.css') }}">
  <link rel="stylesheet" href="{{asset('vendors/owl-carousel/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{asset('vendors/lightbox/simpleLightbox.css') }}">
  <link rel="stylesheet" href="{{asset('vendors/nice-select/css/nice-select.css') }}">
  <link rel="stylesheet" href="{{asset('vendors/animate-css/animate.css') }}">
  <!-- Dashboard Css -->
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet" />
  <!-- main css -->
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"> </script>

</head>

<body>
  <!--================ Start Header Menu Area =================-->
  <header class="header_area" style="background:white">

    {{-- <div class="main_menu">
      <div class="search_input" id="search_input_box">
        <div class="container">
          <form class="d-flex justify-content-between" method="" action="">
            <input type="text" class="form-control" id="search_input" placeholder="Search Here">
            <button type="submit" class="btn"></button>
            <span class="lnr lnr-cross" id="close_search" title="Close Search"></span>
          </form>
        </div>
      </div> --}}
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <a class="navbar-brand logo_h" href="{{ route('home') }}"><img src="{{ asset('img/logo.png') }}" alt=""></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="nav navbar-nav menu_nav ml-auto">
                <li class="nav-item ">
                    <a class="nav-link" href="{{ route('home') }}">Home</a>
                </li>
                @if(Auth::check()&&Auth::user()->isAdmin())
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.courses.index') }}">Admin Console</a>
                </li>
                @endif
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('compiler.index') }}">Editor</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('courses.all') }}">Courses</a>
                </li>
                
                  
              
              <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
              <li class="nav-item">
                <a href="#" class="nav-link search" id="search">
                  <i class="lnr lnr-magnifier"></i>
                </a>
              </li>
              @if (Auth::check())

              <li class="nav-item submenu dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">
                {{-- <img class="avatar brround" src="img/testimonial/t1.jpg" alt=""> --}}
{{-- <span class="avatar  brround" style="background-image: url(./assets/iimg/testimonial/t1.jpg)"></span> --}}
                        {{ Auth::user()->name }}</a>
                    <ul class="dropdown-menu">
                          <li class="nav-item">
                            <a class="nav-link" href="{{ route('auth.logout') }}">Logout</a>
                         </li>

                    </ul>
                  </li>
              @else
              <li class="nav-item"><a class="nav-link" href="{{ route('auth.login') }}">Login</a>
              </li>

                @if (Route::has('auth.register'))
                   <li class="nav-item"><a class="nav-link" href="{{ route('auth.register') }}">Register</a>
                  </li>
               @endif
            @endif


            </ul>
          </div>
        </div>
      </nav>
    </div>
  </header>
  <!--================ End Header Menu Area =================-->
  <div class="section_gap testimonial_area" style="background:white">
    {{-- <div class="container">
      @yield('content')
    </div> --}}
     <div class="container">

        <div class="row">

            {{-- <div class="col-md-3"> --}}

                @yield('sidebar')

            {{-- </div> --}}

{{--             <div class="col-md-9">

                <div class="row">
 --}}
                    @yield('main')
                    @yield('content')

                {{-- </div> --}}

            </div>

        </div>

    </div>
  </div>
  <!--================ End Testimonial Area =================-->

  <!--================ Start footer Area  =================-->
  <footer class="footer-area section_gap">
    <div class="container">
      <div class="row">
       
        <div class="col-lg-2 col-md-6 single-footer-widget">
          <h4>Quick Links</h4>
          <ul>
            <li><a href="#">Jobs</a></li>
            <li><a href="#">Brand Assets</a></li>
            <li><a href="#">Investor Relations</a></li>
            <li><a href="#">Terms of Service</a></li>
          </ul>
        </div>
       
        <div class="col-lg-2 col-md-6 single-footer-widget">
          <h4>Resources</h4>
          <ul>
            <li><a href="#">Guides</a></li>
            <li><a href="#">Research</a></li>
            <li><a href="#">Experts</a></li>
            <li><a href="#">Agencies</a></li>
          </ul>
        </div>
        
      </div>
      <div class="row footer-bottom d-flex justify-content-between">
        <p class="col-lg-8 col-sm-12 footer-text m-0 text-white">Copyright © 2018 All rights reserved | This template is
          made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="#">Colorlib</a></p>
        <div class="col-lg-4 col-sm-12 footer-social">
          <a href="#"><i class="fa fa-facebook"></i></a>
          <a href="#"><i class="fa fa-twitter"></i></a>
          <a href="#"><i class="fa fa-dribbble"></i></a>
          <a href="#"><i class="fa fa-behance"></i></a>
        </div>
      </div>
    </div>
  </footer>
  <!--================ End footer Area  =================-->
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
  <script src="{{ asset('js/popper.js') }}"></script>
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('js/stellar.js') }}"></script>
  <script src="{{ asset('js/countdown.js') }}"></script>
  <script src="{{ asset('vendors/nice-select/js/jquery.nice-select.min.js') }}"></script>
  <script src="{{ asset('vendors/owl-carousel/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('js/owl-carousel-thumb.min.js') }}"></script>
  <script src="{{ asset('js/jquery.ajaxchimp.min.js') }}"></script>
  <script src="{{ asset('vendors/counter-up/jquery.counterup.js') }}"></script>
  <script src="{{ asset('js/mail-script.js') }}"></script>
  <!--gmaps Js-->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
  <script src="{{ asset('js/gmaps.min.js') }}"></script>
  <script src="{{ asset('js/theme.js') }}"></script>


</html>