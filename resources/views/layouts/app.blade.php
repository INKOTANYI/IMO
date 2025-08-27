<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Izere Mubyeyi - Supporting Children and Families">
    <meta name="keywords" content="charity, donations, children, Rwanda, NGO">
    <meta name="author" content="Sebazungu Jean Lambert">
    <title>Izere Mubyeyi - Charity Organization</title>
    <link href="{{ asset('images/favicon.png') }}" rel="shortcut icon" type="image/png">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/javascript-plugins-bundle.css') }}" rel="stylesheet">
    <link href="{{ asset('js/menuzord/css/menuzord.css') }}" rel="stylesheet">
    <link href="{{ asset('js/timeline-cp-responsive-vertical/timeline-cp-responsive-vertical.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style-main.css') }}" rel="stylesheet">
    <link href="{{ asset('js/menuzord/css/skins/menuzord-rounded-boxed.css') }}" rel="stylesheet">
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('css/colors/theme-skin-color-set1.css') }}" rel="stylesheet">
    <link href="{{ asset('js/revolution-slider/css/settings.css') }}" rel="stylesheet">
    <link href="{{ asset('js/revolution-slider/css/layers.css') }}" rel="stylesheet">
    <link href="{{ asset('js/revolution-slider/css/navigation.css') }}" rel="stylesheet">
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/javascript-plugins-bundle.js') }}"></script>
    <script src="{{ asset('js/menuzord/js/menuzord.js') }}"></script>
    <script src="{{ asset('js/revolution-slider/js/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ asset('js/revolution-slider/js/jquery.themepunch.revolution.min.js') }}"></script>
    <!-- Custom CSS for NUDOR Colors -->
    <style>
        :root {
            --primary-color: #0052A5; /* NUDOR Blue */
            --secondary-color: #FFC107; /* NUDOR Yellow */
            --accent-color: #009A49; /* NUDOR Green */
            --light-color: #FFFFFF; /* White */
        }
        .btn-theme-colored1 { background-color: var(--primary-color); color: var(--light-color); }
        .text-theme-colored1 { color: var(--primary-color); }
        .bg-theme-colored1 { background-color: var(--primary-color); }
        .btn-outline-theme-colored1 { border-color: var(--primary-color); color: var(--primary-color); }
        a { color: var(--primary-color); }
        a:hover { color: var(--secondary-color); }
        /* WCAG 2.1 Compliance */
        a:focus, button:focus { outline: 3px solid var(--secondary-color); outline-offset: 2px; }
        img { max-width: 100%; height: auto; }
    </style>
</head>
<body class="tm-enable-navbar-scrolltofixed tm-enable-navbar-always-visible-on-scroll">
    <div id="wrapper" class="clearfix">
        @include('partials.header')
        @yield('content')
        @include('partials.footer')
        <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
    </div>
    <script src="{{ asset('js/custom.js') }}"></script>
    <script src="{{ asset('js/revolution-slider/js/extensions/revolution.extension.actions.min.js') }}"></script>
    <script src="{{ asset('js/revolution-slider/js/extensions/revolution.extension.carousel.min.js') }}"></script>
    <script src="{{ asset('js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
    <script src="{{ asset('js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
    <script src="{{ asset('js/revolution-slider/js/extensions/revolution.extension.migration.min.js') }}"></script>
    <script src="{{ asset('js/revolution-slider/js/extensions/revolution.extension.navigation.min.js') }}"></script>
    <script src="{{ asset('js/revolution-slider/js/extensions/revolution.extension.parallax.min.js') }}"></script>
    <script src="{{ asset('js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
    <script src="{{ asset('js/revolution-slider/js/extensions/revolution.extension.video.min.js') }}"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
        $('#photos-table').DataTable({
            responsive: true,
            columnDefs: [
                { orderable: false, targets: [2, 3] }
            ]
        });
    });
</script>
<link href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css" rel="stylesheet">
</body>
</html>