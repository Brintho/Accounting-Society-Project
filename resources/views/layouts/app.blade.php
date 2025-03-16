@php
    $homeContent = \App\Models\HomeContent::latest()->first();
@endphp

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> @yield('title')</title>

    <meta name="description"
        content="সমবায় সমিতি ও এনজিও প্রতিষ্ঠান পরিচালনার জন্য বাংলাদেশের সর্বোচ্চ ব্যবহৃত এবং নির্ভরযোগ্য সফটওয়্যার সমিতি হিসাব | Samity Hisab">
    <meta name="keywords"
        content="সমিতি হিসাব, Samity Hisab, Somobay Somity, Samobay Samity, Somity Software,NGO, Best Samity Software, Best Samity Software BD, NGO Management System, Samabay Samity Management System, Samabay Samity Management Software, Samity Software Bangladesh, সমিতি সফটওয়্যার,সেরা সমিতি সফটওয়্যার,বাংলাদেশী সমিতি সফটওয়্যার,সমিতি সফটওয়্যার বাংলা,Somity Software Bangla,Bangladeshi Somity Software,Somiti,Best Somity Software,Moshjid Committee software,Madrasha Committee Sofware,Best Committee Software,সমিতিস ফটওয়্যার ডেমো,মিনি সমিতি সফটওয়্যার, samabay samity software,somity keeper login,somity keeper app,software bazar bangladesh,somity manager,somiti app,Somity Software Full Tutorial Video,One Point IT Solutions, এনজিও হিসাব নিকাশ,সমবায় সমিতি সফটওয়্যার ফ্রি,পাসবুক,সমিতির হিসাব নিকাশ,somobay,somobay apply,somity software,NGO software,Microcredit,Micro Credit,somity keeper, Microfinance,সমিতি সফটওয়্যার,এনজিও সফটওয়্যার,মাল্টিপারপাস,কো-অপারেটিভ সোসাইটি,সফটওয়্যার,Software,somobay somity,সমবায় সমিতি,সমবায় সমিতির হিসাব নিকাশ,হিসাব নিকাশ বাংলা সফটওয়্যার ফ্রি ডাউনলোড, দৈনিক হিসাবের খাতা,হিসাব খাতা,হিসাব নিকাশ,অনলাইন সফটওয়্যার,সমবায় সমিতি,ekisti,এনজিও হিসাব নিকাশ,সমবায় সমিতি সফটওয়্যার ফ্রি,সমিতির হিসাব নিকাশ,somity software, NGO software, Microcredit,somity keepe,সমিতি সফটওয়্যার,এনজিও সফটওয়্যার,কো-অপারেটিভ সোসাইটি,somobay somity,সমবায় সমিতির হিসাব নিকাশ,হিসাব নিকাশ বাংলা সফটওয়্যার ফ্রি ডাউনলোড,দৈনিক হিসাবের খাতা,অনলাইন সফটওয়্যার,সমবায় সমিতি,somiti software, somiti app, somity app, somiti , somity software, bb somity, multipurpose software, somobay somity software" />


    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/assets-frontend/img/favicon.png') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('assets/assets-frontend/img/favicon.png') }}" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700,800" rel="stylesheet">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('assets/assets-frontend/css/assets/bootstrap.min.css') }}">

    <!-- Fontawesome -->
    <link rel="stylesheet" href="{{ asset('assets/assets-frontend/font-awesome/css/fontawesome-all.min.css') }}">

    <!-- Animate Css -->
    <link rel="stylesheet" href="{{ asset('assets/assets-frontend/css/assets/animate.css') }}">

    <!-- Owl Slider -->
    <link rel="stylesheet" href="{{ asset('assets/assets-frontend/css/assets/owl.carousel.min.css') }}">

    <!-- Date Picker -->
    <link rel="stylesheet" href="{{ asset('assets/assets-frontend/css/assets/tempusdominus-bootstrap-4.min.css') }}">

    <!-- Magnific PopUp -->
    <link rel="stylesheet" href="{{ asset('assets/assets-frontend/css/assets/magnific-popup.css') }}">

    <!-- Custom Style -->
    <link rel="stylesheet" href="{{ asset('assets/assets-frontend/css/assets/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/assets-frontend/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/assets-frontend/css/assets/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/assets-frontend/css/custom_style.css') }}">

    @stack('styles')

    <!-- jQuery JS -->
    <script src="{{ asset('assets/assets-frontend/js/assets/vendor/jquery-1.12.4.min.js') }}"></script>

    <!-- Bootstrap -->
    <script src="{{ asset('assets/assets-frontend/js/assets/popper.min.js') }}"></script>
    <script src="{{ asset('assets/assets-frontend/js/assets/bootstrap.min.js') }}"></script>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-EVFV3HJ6WD"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'G-EVFV3HJ6WD');
    </script>

</head>

<body>

    <!-- Top Bar -->
    <section class="top-bar" id="btt">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-9">
                    <div class="bar-content top-contect-info">
                        <ul class="list-unstyled list-inline">
                            <li class="list-inline-item"><i class="fa fa-mobile"></i> +8801328228266, +8801605144944
                            </li>
                            <li class="list-inline-item"><i class="fa fa-envelope"></i> noorsoftwareltd@gmail.com </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-5 col-md-3">
                    <div class="top-social text-right">
                        <ul class="list-unstyled list-inline" style="padding-top: 5px;">
                            <li class="list-inline-item"><a href="https://www.facebook.com/SomityHisabOfficial/"><i
                                        class="fab fa-facebook"></i></a></li>
                            <li class="list-inline-item"><a href="https://www.youtube.com/@NoorSoftware"><i
                                        class="fab fa-youtube"></i></a></li>
                            <li class="list-inline-item search-bar msearch-bar" style="display: none;">
                                <form action="#">
                                    <input type="text" class="search-input" name="search" placeholder="Search Here">
                                    <button class="search-submit" type="submit"><i class="fa fa-search"></i></button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Top Bar -->

    <!-- Logo Area -->
    <section class="logo-area menu-sticky">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="logo">
                        @if ($homeContent && isset($homeContent->image))
                            <a href="#"><img src="{{ asset('uploads/home/' . $homeContent->image) }}"
                                    alt="সমিতি হিসাব | Samity Hisab"></a>
                        @else
                            <p>No image available</p>
                        @endif
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="main-menu text-right">
                        <ul class="list-unstyled list-inline">
                            <li class="list-inline-item active2"><a href="{{ route('home') }}">হোম</a></li>
                            <li class="list-inline-item active2"><a href="{{ route('price') }}">মূল্য তালিকা</a></li>
                            <li class="list-inline-item active2"><a href="{{ route('demo') }}">ডেমো দেখুন</a></li>
                            <li class="list-inline-item active2"><a href="{{ route('order.create') }}">অর্ডার করুন</a>
                            </li>
                            <li class="list-inline-item active2"><a href="{{ route('client') }}">গ্রাহক তালিকা</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Logo Area -->

    <!-- Mobile Menu -->
    <section class="mobile-menu-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mobile-menu">
                        <nav id="dropdown">
                            <a href="https://samityhisab.com/"><img
                                    src="https://samityhisab.com/assets-frontend/img/logo.png"
                                    alt="সমিতি হিসাব | Samity Hisab"></a>
                            <!--<a href=""><i class="fa fa-bell-o"></i></a>-->
                            <ul class="list-unstyled">
                                <li><a href="https://samityhisab.com/">হোম</a></li>
                                <li><a href="https://samityhisab.com/price">মূল্য তালিকা</a></li>
                                <li><a href="https://samityhisab.com/demo">ডেমো দেখুন</a></li>
                                <li><a href="https://samityhisab.com/order">অর্ডার করুন</a></li>
                                <li><a href="https://samityhisab.com/client">গ্রাহক তালিকা</a></li>
                                <!--<li><a href="https://samityhisab.com/about-us">আমাদের সম্পর্কে</a></li>-->
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Mobile Menu -->

    @yield('content');

    <!-- Footer Section -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!--<div class="findus">
                            <h4>Find Us</h4>
                            <ul class="list-unstyled">
                                <li><i class="fa fa-map-marker"></i></li>
                                <li><i class="fa fa-envelope"></i></li>
                                <li><i class="fa fa-mobile"></i></li>
                            </ul>
                        </div>-->
                    <div class="findus">
                        <h4>Find Us</h4>
                        <p>
                            <span><i class="fa fa-map-marker"></i>148/C/1, Wapda Road, Rampura, Dhaka</span>
                            <span><i class="fa fa-envelope"></i>noorsoftwareltd@gmail.com</span>
                            <span><i class="fa fa-mobile"></i>+8801328228266, +8801605144944</span>
                        </p>
                    </div>
                </div>
                <!--<div class="col-md-6 col-sm-6">
                        <div class="qlink">
                            <h4>Quick Links</h4>
                            <ul class="list-unstyled">
                                <li><i class="fa fa-angle-right"></i><a href="">Our Team</a></li>
                                <li><i class="fa fa-angle-right"></i><a href="">Galleries</a></li>
                                <li><i class="fa fa-angle-right"></i><a href="">Blog</a></li>
                                <li><i class="fa fa-angle-right"></i><a href="">Contact Us</a></li>
                                <li><i class="fa fa-angle-right"></i><a href="">Careers</a></li>
                            </ul>
                        </div>
                    </div>-->

                <!--<div class="col-md-4">
                        <div class="newsletter">
                            <h4>Newsletter</h4>
                            <form action="#">
                                <input type="text" name="name" placeholder="Your Name" required>
                                <input type="text" name="email" placeholder="Your Email" required>
                                <button type="submit">Register</button>
                            </form>
                        </div>
                    </div>-->
                <div class="col-md-12">
                    <div class="f-menu text-center">
                        <!--<ul class="menu list-unstyled list-inline">
                                <li class="list-inline-item"><a href="">Home</a></li>
                                <li class="list-inline-item"><a href="">Our Team</a></li>
                                <li class="list-inline-item"><a href="">Galleries</a></li>
                                <li class="list-inline-item"><a href="">Blog</a></li>
                                <li class="list-inline-item"><a href="">Contact Us</a></li>
                                <li class="list-inline-item"><a href="">Careers</a></li>
                            </ul>-->
                        <p>Powered By <a href="https://noorsoftwarebd.com/" target="_blank">Noor Software
                                Solutions</a></p>
                        <ul class="social list-unstyled list-inline">
                            <li class="list-inline-item"><a href="https://www.facebook.com/SomityHisabOfficial/"><i
                                        class="fa fa-facebook"></i></a></li>
                            <li class="list-inline-item"><a href="https://www.youtube.com/@NoorSoftware"><i
                                        class="fa fa-youtube"></i></a></li>
                        </ul>
                    </div>
                    <div class="back-to-top text-center">
                        <a data-scroll href="#btt"><img
                                src="https://samityhisab.com/assets-frontend/images/backtotop.png" alt=""
                                class="img-fluid"></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer Section -->

    <div class="icon-bar">
        <a href="https://m.me/116930088003963" class="messenger"><i class="fab fa-facebook-messenger"
                aria-hidden="true"></i></a>
        <a href="whatsapp:+8801605144944" class="whatsapp"><i class="fab fa-whatsapp"></i></a>
        <a href="tel:+8801605144944" class="phone"><i class="fa fa-phone"></i></a>
        <a href="mailto:noorsoftwareltd@gmail.com" class="envelope"><i class="fa fa-envelope"></i></a>
        <!--<a href="https://www.facebook.com/SomityHisabOfficial/" class="facebook"><i class="fab fa-facebook"></i></a>
        <a href="https://www.youtube.com/@NoorSoftware" class="youtube"><i class="fab fa-youtube"></i></a>-->
    </div>

    <!-- =========================================
        JavaScript Files
        ========================================== -->


    <!-- JS Files -->
    <!-- Wow Animation -->
    <script src="{{ asset('assets/assets-frontend/js/assets/wow.min.js') }}"></script>
    <script src="{{ asset('assets/assets-frontend/js/assets/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/assets-frontend/js/assets/moment.min.js') }}"></script>
    <script src="{{ asset('assets/assets-frontend/js/assets/tempusdominus-bootstrap-4.min.js') }}"></script>
    <script src="{{ asset('assets/assets-frontend/js/assets/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/assets-frontend/js/assets/magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/assets-frontend/js/assets/counterup.min.js') }}"></script>
    <script src="{{ asset('assets/assets-frontend/js/assets/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/assets-frontend/js/assets/smooth-scroll.js') }}"></script>
    <script src="{{ asset('assets/assets-frontend/js/assets/jquery.syotimer.min.js') }}"></script>
    <script src="{{ asset('assets/assets-frontend/js/assets/jquery.meanmenu.min.js') }}"></script>
    <script src="{{ asset('assets/assets-frontend/js/assets/form.js') }}"></script>
    <script src="{{ asset('assets/assets-frontend/js/plugins.js') }}"></script>
    <script src="{{ asset('assets/assets-frontend/js/custom.js') }}"></script>

    @stack('scripts')
</body>

</html>
