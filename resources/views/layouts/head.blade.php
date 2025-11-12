<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>@yield('titre', 'AKINTEC – Conseil & Ingénierie Numérique')</title>

    <meta name="robots" content="index, follow">
    <meta name="description" content="@yield('description', 'Chez AKINTEC, nous allions expertise technique, innovation et proximité humaine pour accompagner durablement la transformation numérique des entreprises.')">
    <meta name="keywords" content="AKINTEC, transformation digitale, informatique, conseil IT, ingénierie logicielle, data, cloud, développement web, ESN écoresponsable, France, innovation technologique">

    <!-- 👁️ Open Graph pour réseaux sociaux -->
    <meta property="og:title" content="@yield('title', 'AKINTEC – Conseil & Ingénierie Numérique')">
    <meta property="og:description" content="Expertise technique, culture de l'innovation et proximité humaine au service de la transformation digitale.">
    <meta property="og:image" content="https://akintec.fr/assets/images/logo/logo-ak.png">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">

    <meta name="google-site-verification" content="yElaI9rLLHM-sx46aWWS4hoWU7ZFh6NaGMoRCwpHL_Q" />
    
    <!-- 🏢 Données structurées (affichage du logo sur Google) -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "AKINTEC – Conseil & Ingénierie Numérique",
        "url": "https://akintec.fr",
        "logo": "https://akintec.fr/assets/images/logo/logo-ak.png",
        "description": "AKINTEC est une ESN écoresponsable spécialisée dans la transformation digitale, le conseil IT et le développement logiciel.",
        "sameAs": [
        "https://www.linkedin.com/company/akintec-fr",
        "https://twitter.com",
        "https://facebook.com"
        ]
    }
    </script>

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
