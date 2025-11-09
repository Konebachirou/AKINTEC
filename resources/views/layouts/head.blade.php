<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('titre', 'AKINTEC')</title>
    <meta name="robots" content="index, follow">
    <meta name="description" content="@yield('description', 'AKINTEC propose des solutions technologiques et innovantes pour les entreprises modernes.')">


    <!-- Open Graph (Facebook, LinkedIn) -->
    <meta property="og:title" content="@yield('title', 'AKINTEC')">
    <meta property="og:description" content="@yield('description', 'AKINTEC propose des solutions technologiques et innovantes pour les entreprises modernes.')">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ asset('assets/images/logo/favicon-no-bg.png') }}">
    <meta property="og:type" content="website">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="keywords" content="@yield('keywords', 'innovation, technologie, développement web, informatique, AKINTEC, solutions digitales')">
    <meta name="google-site-verification" content="yElaI9rLLHM-sx46aWWS4hoWU7ZFh6NaGMoRCwpHL_Q" />
    
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/logo/favicon-no-bg.png') }}">

    <!-- CSS
 ============================================ -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/sal.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/euclid-circulara.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/swiper.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/magnify.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/odometer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/animation.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/bootstrap-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/magnigy-popup.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/plyr.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
