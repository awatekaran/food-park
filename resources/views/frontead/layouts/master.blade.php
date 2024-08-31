<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, target-densityDpi=device-dpi" />
    <title>FoodPark || Restaurant Template</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/png" href="{{ asset('frontead/images/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('frontead/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontead/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontead/css/spacing.css') }}">
    <link rel="stylesheet" href="{{ asset('frontead/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('frontead/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('frontead/css/venobox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontead/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('frontead/css/jquery.exzoom.css') }}">
    <link rel="stylesheet" href="{{ asset('frontead/css/toastr.min.css') }}">

    <link rel="stylesheet" href="{{ asset('frontead/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontead/css/responsive.css') }}">
    <!-- <link rel="stylesheet" href="css/rtl.css"> -->
</head>

<body>

    <!--=============================
        TOPBAR START
    ==============================-->
    <section class="fp__topbar">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-md-8">
                    <ul class="flex-wrap fp__topbar_info d-flex">
                        <li><a href="mailto:example@gmail.com"><i class="fas fa-envelope"></i> Unifood@gmail.com</a>
                        </li>
                        <li><a href="callto:123456789"><i class="fas fa-phone-alt"></i> +96487452145214</a></li>
                    </ul>
                </div>
                <div class="col-xl-6 col-md-4 d-none d-md-block">
                    <ul class="flex-wrap topbar_icon d-flex">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a> </li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a> </li>
                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a> </li>
                        <li><a href="#"><i class="fab fa-behance"></i></a> </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--=============================
        TOPBAR END
    ==============================-->


    <!--=============================
        MENU START
    ==============================-->
    @include('frontead.layouts.menu');
    <!--=============================
        MENU END
    ==============================-->

    @yield('content')

    <!--=============================
        FOOTER START
    ==============================-->
    @include('frontead.layouts.footer')
    <!--=============================
        FOOTER END
    ==============================-->


    <!--=============================
        SCROLL BUTTON START
    ==============================-->
    <div class="fp__scroll_btn">
        go to top
    </div>
    <!--=============================
        SCROLL BUTTON END
    ==============================-->


    <!--jquery library js-->
    <script src="{{ asset('frontead/js/jquery-3.6.0.min.js') }}"></script>
    <!--bootstrap js-->
    <script src="{{ asset('frontead/js/bootstrap.bundle.min.js') }}"></script>
    <!--font-awesome js-->
    <script src="{{ asset('frontead/js/Font-Awesome.js') }}"></script>
    <!-- slick slider -->
    <script src="{{ asset('frontead/js/slick.min.js') }}"></script>
    <!-- isotop js -->
    <script src="{{ asset('frontead/js/isotope.pkgd.min.js') }}"></script>
    <!-- simplyCountdownjs -->
    <script src="{{ asset('frontead/js/simplyCountdown.js') }}"></script>
    <!-- counter up js -->
    <script src="{{ asset('frontead/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('frontead/js/jquery.countup.min.js') }}"></script>
    <!-- nice select js -->
    <script src="{{ asset('frontead/js/jquery.nice-select.min.js') }}"></script>
    <!-- venobox js -->
    <script src="{{ asset('frontead/js/venobox.min.js') }}"></script>
    <!-- sticky sidebar js -->
    <script src="{{ asset('frontead/js/sticky_sidebar.js') }}"></script>
    <!-- wow js -->
    <script src="{{ asset('frontead/js/wow.min.js') }}"></script>
    <!-- ex zoom js -->
    <script src="{{ asset('frontead/js/jquery.exzoom.js') }}"></script>

    <!--main/custom js-->
    <script src="{{ asset('frontead/js/main.js') }}"></script>

    <!-- to toastr  js -->
    <script src="{{ asset('frontead/js/toastr.min.js') }}"></script>
    <script>
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                toastr.error("{{ $error }}")
            @endforeach
        @endif

        // for ajax call
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
    @stack('scripts')
</body>

</html>
