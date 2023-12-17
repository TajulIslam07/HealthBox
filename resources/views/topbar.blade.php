<header class="header" >
<div class="topbar">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-5 col-12">
                <!-- Contact -->
                <ul class="top-link">
                    <li><a href="#">About</a></li>
                    <li><a href="{{route('all-doctor')}}">Doctors</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">FAQ</a></li>
                </ul>
                <!-- End Contact -->
            </div>
            <div class="col-lg-6 col-md-7 col-12">
                <!-- Top Contact -->
                <ul class="top-contact">
                    <li><i class="fa fa-phone"></i>+880 1234 56789</li>
                    <li><i class="fa fa-envelope"></i><a href="mailto:support@yourmail.com">support@yourmail.com</a></li>
                </ul>
                <!-- End Top Contact -->
            </div>
        </div>
    </div>
</div>
    <!-------------->

    <!------------->

<div class="header-inner">
    <div class="container">
        <div class="inner">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-12">
                    <!-- Start Logo -->
                    <div class="logo">
                        <a href="index.html"><img src="assets/img/logo.png" alt="#"></a>
                    </div>
                    <!-- End Logo -->
                    <!-- Mobile Nav -->
                    <div class="navbar-toggler"></div>
                    <!-- End Mobile Nav -->
                </div>
                <div class="col-lg-7 col-md-9 col-12">
                    <!-- Main Menu -->
                    <div class="main-menu">
                        <nav class="navigation">
                            <ul class="nav menu">
                                <li><a href="{{route('index')}}">Home</a>
                                </li>
                                    <li ><a href="{{route('all-doctor')}}">Doctors <i class="icofont-rounded-down"></i></a>
                                        <ul class="dropdown">
                                            <li><a href="{{route('appointment')}}">Appointment</a></li>
                                        </ul>
                                    </li>
                                <li><a href="#">Services </a>
                                    @if(Auth::id())
                                    <ul class="dropdown">
                                        <li><a href="{{route('myappointmemnt')}}">My Appointment</a></li>
                                        <li><a href="#">Report</a></li>

                                    </ul>
                                    @endif
                                </li>
                               {{-- <li><a href="#">Pages <i class="icofont-rounded-down"></i></a>
                                    <ul class="dropdown">
                                        <li><a href="404.html">404 Error</a></li>
                                    </ul>
                                </li>--}}
                                <li><a href="#">Blogs <i class="icofont-rounded-down"></i></a>
                                    <ul class="dropdown">
                                        <li><a href="blog-single.html">Blog Details</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">Contact Us</a></li>
                            </ul>
                        </nav>
                    </div>
                    <!--/ End Main Menu -->
                </div>
                @if(!Auth::id())
                    <div class="col-lg-1 col-12">
                        <div class="get-quote">
                            <a href="{{'login'}}" class="btn">LogIn</a>
                        </div>
                    </div>
                    <div class="col-lg-1 col-12">
                        <div class="get-quote">
                            <a href="{{'register'}}" class="btn">Register</a>
                        </div>
                    </div>
                @else
                <div class="col-lg-2 col-12">
                    <div class="get-quote">
                        <a class="btn" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>

<!--/ End Header Inner -->
</header>