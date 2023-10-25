<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="bootstrap material admin template">
    <meta name="author" content="">

    <title>@yield('page_title') | Segera Gen2</title>

    <link rel="apple-touch-icon" href="{{ asset('images/apple-touch-icon.png') }}">
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-extend.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/site.min.css') }}">

    <!-- Plugins -->
    <link rel="stylesheet" href="{{ asset('vendor/animsition/animsition.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/asscrollable/asScrollable.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/switchery/switchery.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/intro-js/introjs.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/slidepanel/slidePanel.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/flag-icon-css/flag-icon.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/waves/waves.css') }}">
    <link rel="stylesheet" href="{{ asset('examples/css/pages/login-v3.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/toastr/toastr.css') }}">
    <link rel="stylesheet" href="{{ asset('examples/css/advanced/toastr.css') }}">

    <!-- Fonts -->
    <link rel="stylesheet" href="{{ asset('fonts/material-design/material-design.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/brand-icons/brand-icons.min.css') }}">
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>

    <!-- Scripts -->
    <script src="{{ asset('vendor/breakpoints/breakpoints.js') }}"></script>
    <script>
        Breakpoints();
    </script>
</head>

<body class="animsition page-login-v3 layout-full">
    @yield('content')
    <!-- Core  -->
    <script src="{{ asset('vendor/babel-external-helpers/babel-external-helpers.js') }}"></script>
    <script src="{{ asset('vendor/jquery/jquery.js') }}"></script>
    <script src="{{ asset('vendor/popper-js/umd/popper.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/bootstrap.js') }}"></script>
    <script src="{{ asset('vendor/animsition/animsition.js') }}"></script>
    <script src="{{ asset('vendor/mousewheel/jquery.mousewheel.js') }}"></script>
    <script src="{{ asset('vendor/asscrollbar/jquery-asScrollbar.js') }}"></script>
    <script src="{{ asset('vendor/asscrollable/jquery-asScrollable.js') }}"></script>
    <script src="{{ asset('vendor/ashoverscroll/jquery-asHoverScroll.js') }}"></script>
    <script src="{{ asset('vendor/waves/waves.js') }}"></script>

    <!-- Plugins -->
    <script src="{{ asset('vendor/switchery/switchery.js') }}"></script>
    <script src="{{ asset('vendor/intro-js/intro.js') }}"></script>
    <script src="{{ asset('vendor/screenfull/screenfull.js') }}"></script>
    <script src="{{ asset('vendor/slidepanel/jquery-slidePanel.js') }}"></script>
    <script src="{{ asset('vendor/jquery-placeholder/jquery.placeholder.js') }}"></script>
    <script src="{{ asset('vendor/toastr/toastr.js') }}"></script>

    <!-- Scripts -->
    <script src="{{ asset('js/Component.js') }}"></script>
    <script src="{{ asset('js/Plugin.js') }}"></script>
    <script src="{{ asset('js/Base.js') }}"></script>
    <script src="{{ asset('js/Config.js') }}"></script>

    <script src="{{ asset('js/Section/Menubar.js') }}"></script>
    <script src="{{ asset('js/Section/GridMenu.js') }}"></script>
    <script src="{{ asset('js/Section/Sidebar.js') }}"></script>
    <script src="{{ asset('js/Section/PageAside.js') }}"></script>
    <script src="{{ asset('js/Plugin/menu.js') }}"></script>

    <script src="{{ asset('js/config/colors.js') }}"></script>
    <script src="{{ asset('js/config/tour.js') }}"></script>
    <script>
        Config.set('assets', "{{ asset('') }}");
    </script>

    <!-- Page -->
    <script src="{{ asset('js/Site.js') }}"></script>
    <script src="{{ asset('js/Plugin/asscrollable.js') }}"></script>
    <script src="{{ asset('js/Plugin/slidepanel.js') }}"></script>
    <script src="{{ asset('js/Plugin/switchery.js') }}"></script>
    <script src="{{ asset('js/Plugin/jquery-placeholder.js') }}"></script>
    <script src="{{ asset('js/Plugin/material.js') }}"></script>

    <script>
        (function(document, window, $) {
            'use strict';

            var Site = window.Site;
            $(document).ready(function() {
                Site.run();
            });
        })(document, window, jQuery);
    </script>
    @stack('script')
</body>

</html>
