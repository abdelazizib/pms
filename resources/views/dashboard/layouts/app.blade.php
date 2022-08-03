<!doctype html>
<html lang="en" dir="ltr">

<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('dashboard/assets/images/brand/favicon.ico')}}" />
    <!-- TITLE -->
    <title>@yield('title','Blank')</title>
    <!-- BOOTSTRAP CSS -->
    <link id="style" href="{{asset('dashboard/assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" />
    {{-- <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css"> --}}
    <!-- STYLE CSS -->
    <link href="{{asset('dashboard/assets/css/style.css')}}" rel="stylesheet" />
    <link href="{{asset('dashboard/assets/css/dark-style.css')}}" rel="stylesheet" />
    <link href="{{asset('dashboard/assets/css/transparent-style.css')}}" rel="stylesheet">
    <link href="{{asset('dashboard/assets/css/skin-modes.css')}}" rel="stylesheet" />
    <!--- FONT-ICONS CSS -->
    <link href="{{asset('dashboard/assets/css/icons.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
    <!-- COLOR SKIN CSS -->
    <link id="theme" rel="stylesheet" type="text/css" media="all" href="{{asset('dashboard/assets/colors/color1.css')}}" />
</head>
<body class="app sidebar-mini ltr">

    <!-- GLOBAL-LOADER -->
    @include('dashboard.layouts.inc.loader')
    <!-- /GLOBAL-LOADER -->
    <!-- PAGE -->
    <div class="page">
        <div class="page-main">

            <!-- app-Header -->

            @include('dashboard.layouts.inc.header')

            <!-- /app-Header -->

            <!--APP-SIDEBAR-->

           @include('dashboard.layouts.inc.sidebar')

            <!-- APP-SideBar -->

            <!--app-content open-->

            <div class="main-content app-content mt-0">
                @yield('content')
            </div>

            <!--app-content closed-->
        </div>


        <!-- Country-selector modal-->

        @include('dashboard.layouts.inc.langs')
        
        <!-- Country-selector modal-->

    <!-- BACK-TO-TOP -->
    <a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>
    
        <!-- FOOTER -->
        @include('dashboard.layouts.inc.footer')
        <!-- FOOTER CLOSED -->
    </div>



<!-- Scripts Files -->
@include('dashboard.layouts.inc.scripts')
<!-- End Scripts Files -->
</body>

</html>