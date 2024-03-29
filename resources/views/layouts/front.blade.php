<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" href="{{ asset('img/logo.png') }}" type="image/png">
  <title>Smart Educator</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="vendors/linericon/style.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
  <link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
  <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
  <link rel="stylesheet" href="vendors/animate-css/animate.css">
  <!-- main css -->
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <!--================ Start Header Menu Area =================-->
  <header class="header_area">

    <div class="main_menu">
      {{-- <div class="search_input" id="search_input_box">
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
                <li class="nav-item active">
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
                  {{-- <li class="nav-item submenu dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="{{ route('courses.all') }}">Courses</a> --}}
                        {{-- <ul class="dropdown-menu">
                          <li class="nav-item">
                            <a class="nav-link" href="{{ route('courses.all') }}">Courses</a>
                        </li>
                          <li class="nav-item">
                            <a class="nav-link" href="course-details.html">Course Details</a>
                        </li>
                          <li class="nav-item">
                            <a class="nav-link" href="elements.html">Elements</a>
                    </li>
                   </ul> --}}
                  {{-- </li> --}}

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
                            <span class="avatar avatar-sm brround" style="background-image: url(./assets/img/author1.jpg)"></span>
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
  <!--================ Start Home Banner Area =================-->
  <section class="home_banner_area">
    <div class="banner_inner">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="banner_content">
              <h2>
                We Rank the Best <br>
                Courses on the Web
              </h2>
              <p>
                In the history of modern astronomy, there is probably no one greater leap forward than the building and launch
                of
                the space telescope known as the Hubble.
              </p>
              <div class="search_course_wrap">
                <form action="{{ route('search') }}" class="form_box d-flex justify-content-between w-100" method="POST">
                  <input type="text" placeholder="Search Courses" class="form-control" name="username" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Courses'">
                  <button type="submit" class="btn search_course_btn">Search</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================ End Home Banner Area =================-->
  <!--================ Start Feature Area =================-->
  <section class="feature_area">
    <div class="container">
      <div class="row justify-content-end">
        <div class="col-lg-4">
          <div class="single_feature d-flex flex-row pb-30">
            <div class="icon">
              <span class="lnr lnr-book"></span>
            </div>
            <div class="desc">
              <h4>New Classes</h4>
              <p>
                In the history of modern astronomy, there is probably no one greater leap forward building and launch.
              </p>
            </div>
          </div>
          <div class="single_feature d-flex flex-row pb-30">
            <div class="icon">
              <span class="fa fa-trophy"></span>
            </div>
            <div class="desc">
              <h4>Top Courses</h4>
              <p>
                In the history of modern astronomy, there is probably no one greater leap forward building and launch.
              </p>
            </div>
          </div>
          <div class="single_feature d-flex flex-row">
            <div class="icon">
              <span class="lnr lnr-screen"></span>
            </div>
            <div class="desc">
              <h4>Full E-Books</h4>
              <p>
                In the history of modern astronomy, there is probably no one greater leap forward building and launch.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================ End Feature Area =================-->

  <!--================ Start Popular Courses Area =================-->
  <div class="popular_courses lite_bg">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6">
          <div class="main_title">
            <h2>Popular Courses</h2>
            <p>There is a moment in the life of any aspiring astronomer that it is time to buy that first telescope. It’s
              exciting to think about setting up your own viewing station.</p>
          </div>
        </div>
      </div>
        <div class="section-top-border text-right">
            <a href="{{ route('courses.all') }}" class="primary-btn text-uppercase">Explore Courses</a>
        </div>
      {{-- <div class="row"> --}}
      {{-- </div> --}}
      <div class="row">
        <!-- single course -->
        @foreach($courses as $course)
        @if( $loop->iteration <5 )
        <div class="col-lg-3 col-md-6">
          <div class="single_course">
            <div class="course_head overlay">
              <img class="img-fluid w-100" src="{{ asset('uploads/thumbs/'.$course->course_image) }}" alt="">
              @foreach ($course->teachers as $singleTeachers)
              <div class="authr_meta">
                <img src="img/author1.png" alt="">
                <span>{{ $singleTeachers->name }}</span>
              </div>
              @endforeach
            </div>
            <div class="course_content">
              <h4>
                <a href="{{ route('courses.show',  $course->id) }}">{{ $course->title }}</a>
              </h4>
              <p>{{ $course->title }}</p>
              <div class="course_meta d-flex justify-content-between">
               {{--  <div>
                  <span class="meta_info">
                    <a href="#"><i class="lnr lnr-user"></i>355</a>
                  </span>
                  <span class="meta_info">
                    <a href="#">
                      <i class="lnr lnr-bubble"></i>35
                    </a>
                  </span>
                </div> --}}
                <div>
                  <span class="price">Free</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endif
        @endforeach
      </div>
    </div>
  </div>
  <!--================ End Popular Courses Area =================-->


  {{-- <div class="container-fluid">
    <h1 class="text-center my-3">Bootstrap 4 Card Carousel</h1>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner row w-100 mx-auto">
        <div class="carousel-item col-md-6 active">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Card 1</h4>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is
                a little bit longer.</p>
              <p class="card-text">
                <small class="text-muted">Last updated 3 mins ago</small>
              </p>
            </div>
          </div>
        </div>
        <div class="carousel-item col-md-4">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Card 2</h4>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is
                a little bit longer.</p>
              <p class="card-text">
                <small class="text-muted">Last updated 3 mins ago</small>
              </p>
            </div>
          </div>
        </div>
        <div class="carousel-item col-md-4">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Card 3</h4>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is
                a little bit longer.</p>
              <p class="card-text">
                <small class="text-muted">Last updated 3 mins ago</small>
              </p>
            </div>
          </div>
        </div>
        <div class="carousel-item col-md-4">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Card 4</h4>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is
                a little bit longer.</p>
              <p class="card-text">
                <small class="text-muted">Last updated 3 mins ago</small>
              </p>
            </div>
          </div>
        </div>
        <div class="carousel-item col-md-4">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Card 5</h4>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is
                a little bit longer.</p>
              <p class="card-text">
                <small class="text-muted">Last updated 3 mins ago</small>
              </p>
            </div>
          </div>
        </div>
        <div class="carousel-item col-md-4">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Card 6</h4>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is
                a little bit longer.</p>
              <p class="card-text">
                <small class="text-muted">Last updated 3 mins ago</small>
              </p>
            </div>
          </div>
        </div>
        <div class="carousel-item col-md-4">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Card 7</h4>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is
                a little bit longer.</p>
              <p class="card-text">
                <small class="text-muted">Last updated 3 mins ago</small>
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-12 text-center mt-4">
            <a class="btn btn-outline-secondary mx-1 prev" href="javascript:void(0)" title="Previous">
              <i class="fa fa-lg fa-chevron-left"></i>
            </a>
            <a class="btn btn-outline-secondary mx-1 next" href="javascript:void(0)" title="Next">
              <i class="fa fa-lg fa-chevron-right"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div> --}}
  <!--================ Start Fact Area =================-->
  <div class="fact_area overlay">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6">
          <div class="main_title">
            <h2>Facts that Make us Unique</h2>
            <p>There is a moment in the life of any aspiring astronomer that it is time to buy that first telescope. It’s
              exciting to think about setting up your own viewing station.</p>
          </div>
        </div>
      </div>
      <div class="row">
        <!-- single features -->
        <div class="col-lg-4 col-md-6">
          <div class="single_fact">
            <div class="f_icon">
              <img src="img/f-icons/icon1.png" alt="">
            </div>
            <h4>Expert Mentors</h4>
            <p>Lorem ipsum dolor sit amet consec tetur adipisicing elit, sed do eiusmod tempor incididunt labore dolor sit
              amet consec tetur adipisicing elit, sed do eiusmod tempor sed do eiusmod tempor incididunt labore dolor sit amet
              consec tetur adipisicing elit, seddo eiusmod tempor.</p>
          </div>
        </div>
        <!-- single features -->
        <div class="col-lg-4 col-md-6">
          <div class="single_fact">
            <div class="f_icon">
              <img src="img/f-icons/icon2.png" alt="">
            </div>
            <h4>25000+ Courses</h4>
            <p>Lorem ipsum dolor sit amet consec tetur adipis icing elit, sed do eiusmod tempor incididunt labore dolor sit
              amet consec.</p>
          </div>
        </div>
        <!-- single features -->
        <div class="col-lg-4 col-md-6">
          <div class="single_fact">
            <div class="f_icon">
              <img src="img/f-icons/icon3.png" alt="">
            </div>
            <h4>Student Membership</h4>
            <p>Lorem ipsum dolor sit amet consec tetur adipisicing elit, sed do eiusmod tempor incididunt labore dolor sit
              amet consec tetur adipisicing elit, sed do eiusmod tempor sed do eiusmod tempor incididunt labore dolor sit amet
              consec tetur adipisicing elit, seddo eiusmod tempor.</p>
          </div>
        </div>
        <!-- single features -->
        <div class="col-lg-4 col-md-6">
          <div class="single_fact">
            <div class="f_icon">
              <img src="img/f-icons/icon4.png" alt="">
            </div>
            <h4>Lifetime Access</h4>
            <p>Lorem ipsum dolor sit amet consec tetur adipisicing elit, sed do eiusmod tempor incididunt labore dolor sit
              amet consec tetur adipisicing elit sed do eiusmod.</p>
          </div>
        </div>
        <!-- single features -->
        <div class="col-lg-4 col-md-6">
          <div class="single_fact">
            <div class="f_icon">
              <img src="img/f-icons/icon5.png" alt="">
            </div>
            <h4>Source File Included</h4>
            <p>Lorem ipsum dolor sit amet consec tetur adipisicing elit, sed do eiusmod tempor incididunt labore dolor sit
              amet consec tetur adipisicing elit sed do eiusmod.</p>
          </div>
        </div>
        <!-- single features -->
        <div class="col-lg-4 col-md-6">
          <div class="single_fact">
            <div class="f_icon">
              <img src="img/f-icons/icon6.png" alt="">
            </div>
            <h4>Live Support</h4>
            <p>Lorem ipsum dolor sit amet consec tetur adipis icing elit, sed do eiusmod tempor incididunt labore dolor sit
              amet consec.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--================ End Fact Area =================-->
  <!--================ Start Testimonial Area =================-->
  {{-- <div class="section_gap testimonial_area">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-10 text-center">
          <div class="active_testimonial owl-carousel" data-slider-id="1">
            <!-- single testimonial -->
            <div class="single_testimonial"> --}}
              {{-- <div class="testimonial_head">
                <img src="img/quote.png" alt="">
                <h4>Fanny Spencer</h4>
                <div class="review">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                </div>
              </div> --}}
              {{-- <div class="testimonial_content">
                <p>As conscious traveling Paup ers we must always be oncerned about our dear Mother Earth. If you think about
                  it, you travel across her faceand She is the host to your journey.</p>
              </div>
            </div>
            <div class="single_testimonial"> --}}
              {{-- <div class="testimonial_head">
                <img src="img/quote.png" alt="">
                <h4>Fanny Spencer</h4>
                <div class="review">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                </div>
              </div> --}}
              {{-- <div class="testimonial_content">
                <p>As conscious traveling Paup ers we must always be oncerned about our dear Mother Earth. If you think about
                  it, you travel across her faceand She is the host to your journey.</p>
              </div>
            </div>
            <div class="single_testimonial"> --}}
              {{-- <div class="testimonial_head">
                <img src="img/quote.png" alt="">
                <h4>Fanny Spencer</h4>
                <div class="review">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                </div>
              </div> --}}
              {{-- <div class="testimonial_content">
                <p>As conscious traveling Paup ers we must always be oncerned about our dear Mother Earth. If you think about
                  it, you travel across her faceand She is the host to your journey.</p>
              </div>
            </div>
            <div class="single_testimonial"> --}}
            {{-- <div class="testimonial_head">
                <img src="img/quote.png" alt="">
                <h4>Fanny Spencer</h4>
                <div class="review">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                </div>
              </div>  --}}
              {{-- <div class="testimonial_content">
                <p>As conscious traveling Paup ers we must always be oncerned about our dear Mother Earth. If you think about
                  it, you travel across her faceand She is the host to your journey.</p>
              </div>
            </div>
          </div> --}}
          {{-- <div class="owl-thumbs d-flex justify-content-center" data-slider-id="1">
            <div class="owl-thumb-item">
              <div class="position-relative">
                <img class="img-fluid" src="img/testimonial/t1.jpg" alt="">
              </div>
              <div class="overlay-grad"></div>
            </div>
            <div class="owl-thumb-item">
              <div class="position-relative">
                <img class="img-fluid" src="img/testimonial/t2.jpg" alt="">
              </div>
              <div class="overlay-grad"></div>
            </div>
            <div class="owl-thumb-item">
              <div class="position-relative">
                <img class="img-fluid" src="img/testimonial/t3.jpg" alt="">
              </div>
              <div class="overlay-grad"></div>
            </div>
            <div class="owl-thumb-item">
              <div class="position-relative">
                <img class="img-fluid" src="img/testimonial/t4.jpg" alt="">
              </div>
              <div class="overlay-grad"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> --}}
  <!--================ End Testimonial Area =================-->
  <!--================ Start Registration Area =================-->
  @if(Auth::check())
  @else
  <div class="section_gap registration_area">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-7">
          <div class="row clock_sec clockdiv" id="clockdiv">
            <div class="col-lg-12">
              <h1>Register Now</h1>
              <p>There is a moment in the life of any aspiring student that it is time to buy that first Book. It’s
                exciting to think about setting up your own learning station.</p>
            </div>

          </div>
        </div>
        <div class="col-lg-4 offset-lg-1">
          <div class="register_form">
            <h3>Courses for Free</h3>
            <p>It is high time for learning</p>
            <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
              {{ csrf_field() }}
              <input type="hidden" name="redirect_url" value="{{ request('redirect_url', '/') }}">

              <div class="row">
                <div class="col-lg-12 form_group">
                    <input id="name" type="text" class="form-control" name="name" placeholder="Name" value="{{ old('name') }}" required >

                    @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif

                    <input id="email" type="email" class="form-control" name="email" placeholder="E-mail" value="{{ old('email') }}" required>

                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                    <input id="password" placeholder="Password" type="password" class="form-control" name="password" required>

                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Confirm Password">
                </div>
                <div class="col-lg-12 text-center">
                  <button class="primary-btn" type="submit">Submit</button>
                  <a href="{{ route('auth.login') }}">Existing user? Log in here</a>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--================ End Registration Area =================-->
@endif
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
        <p class="col-lg-8 col-sm-12 footer-text m-0 text-white">Copyright © 2018 All rights reserved by website admins</p>
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


  <script type="text/javascript">
    (function ($) {
  "use strict";
  // Auto-scroll
  $('#myCarousel').carousel({
    interval: 5000
  });

  // Control buttons
  $('.next').click(function () {
    $('.carousel').carousel('next');
    return false;
  });
  $('.prev').click(function () {
    $('.carousel').carousel('prev');
    return false;
  });

  // On carousel scroll
  $("#myCarousel").on("slide.bs.carousel", function (e) {
    var $e = $(e.relatedTarget);
    var idx = $e.index();
    var itemsPerSlide = 3;
    var totalItems = $(".carousel-item").length;
    if (idx >= totalItems - (itemsPerSlide - 1)) {
      var it = itemsPerSlide -
          (totalItems - idx);
      for (var i = 0; i < it; i++) {
        // append slides to end
        if (e.direction == "left") {
          $(
            ".carousel-item").eq(i).appendTo(".carousel-inner");
        } else {
          $(".carousel-item").eq(0).appendTo(".carousel-inner");
        }
      }
    }
  });
})
(jQuery);
  </script>
</body>

</html>