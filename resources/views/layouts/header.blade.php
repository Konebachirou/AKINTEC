   <!-- Start Header Area -->
   <header class="rbt-header rbt-header-8 rbt-transparent-header">
        <div class="rbt-sticky-placeholder"></div>
        <!-- Start Header Top  -->
        <div class="rbt-header-top rbt-header-top-1 variation-height-60 header-space-betwween bg-color-transparent top-expended-activation">
            <div class="container">
                <div class="top-expended-wrapper">
                    <div class="top-expended-inner rbt-header-sec align-items-center ">
                        <div class="rbt-header-sec-col rbt-header-left">
                            <div class="rbt-header-content">
                                <div class="header-info d-none d-lg-block">
                                    <ul class="rbt-information-list">
                                        <li>
                                            <a href="#"><i class="feather-help-circle"></i>FAQ?</a>
                                        </li>
                                        <li>
                                            <a href="mailto:contact@akintec.fr"><i class="feather-mail"></i>contact@akintec.fr</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="feather-phone"></i>+33 7 53 30 36 35</a>
                                        </li>
                                        <li><a href="https://www.facebook.com/">
                                            <i class="feather-facebook"></i>
                                        </a>
                                        </li>
                                        <li><a href="https://www.twitter.com">
                                                <i class="feather-twitter"></i>
                                            </a>
                                        </li>
                                        <li><a href="https://www.instagram.com/">
                                                <i class="feather-instagram"></i>
                                            </a>
                                        </li>
                                        <li><a href="https://www.linkedin.com/company/akintec-fr">
                                                <i class="feather-linkedin"></i>
                                            </a>
                                        </li>
                                    </ul>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="rbt-header-sec-col rbt-header-right mt_md--10 mt_sm--10">
                            <div class="rbt-header-content justify-content-start justify-content-lg-end">
                                <div class="header-info">
                                    <ul class="rbt-dropdown-menu switcher-language">
                                        <li class="has-child-menu">
                                            <a href="#">
                                                <img class="left-image" src="{{ asset('assets/images/icons/fr.png') }}" alt="Language Images">
                                                <span class="menu-item">Français</span>
                                                <i class="right-icon feather-chevron-down"></i>
                                            </a>
                                            
                                            <ul class="sub-menu">
                                                <li>
                                                    <a href="#">
                                                        <img class="left-image" src="{{ asset('assets/images/icons/en-us.png') }}" alt="Language Images">
                                                        <span class="menu-item">English</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img class="left-image" src="{{ asset('assets/images/icons/de.png') }}" alt="Language Images">
                                                        <span class="menu-item">Deutsch</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="header-info">
                        <div class="top-bar-expended d-block d-lg-none">
                            <button class="topbar-expend-button rbt-round-btn"><i class="color-body feather-plus"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Header Top  -->

        <div class="rbt-header-wrapper  header-sticky">
            <div class="container">
                <div class="mainbar-row rbt-navigation-end align-items-center">
                    <div class="header-left">
                        <div class="logo">
                            <a href="{{ route('home_link') }}">
                                <img src="{{ asset('assets/images//logo/logo-ak.png') }}" alt="Akintec Logo Images">
                            </a>
                        </div>
                    </div>

                    <div class="rbt-main-navigation d-none d-xl-block">
                        <nav class="mainmenu-nav">
                            <ul class="mainmenu">
                                <li class="with-megamenu has-menu-child-item position-static {{ $ongletActif === 'accueil' ? 'active' : '' }}">
                                    <a href="{{ route('home_link') }}">Accueil</i></a>
                                </li>

                                <li class="with-megamenu has-menu-child-item position-static {{ $ongletActif === 'about' ? 'active' : '' }}">
                                    <a href="{{ route('about_link') }}">Qui sommes-nous ?</i></a>
                                </li>

                                <li class="with-megamenu has-menu-child-item {{ $ongletActif === 'service' ? 'active' : '' }}">
                                    <a href="#">Nos Services <i class="feather-chevron-down"></i></a>
                                    <!-- Start Mega Menu  -->
                                    <div class="rbt-megamenu grid-item-2">
                                        <div class="wrapper">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="mega-top-banner">
                                                        <div class="content">
                                                            <h4 class="title">Developer hub</h4>
                                                            <p class="description">Découvrez nos domaines d’expertise.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row row--15">
                                                <div class="col-lg-12 col-xl-6 col-xxl-6 single-mega-item">
                                                    <ul class="mega-menu-item">
                                                        <li><a href="{{ route('services_link', ['service' => 'developpemet-logiciel-web-mobile']) }}">Développement logiciel</a></li>
                                                        <li><a href="{{ route('services_link', ['service' => 'data-engineering-et-science']) }}">Data engineering / Data science</a></li>
                                                        <li><a href="{{ route('services_link', ['service' => 'cloud-et-devops']) }}">Cloud & DevOps</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-12 col-xl-6 col-xxl-6 single-mega-item">
                                                    <ul class="mega-menu-item">
                                                        <li><a href="{{ route('services_link', ['service' => 'conseil-it-transformation-digital']) }}">Conseil IT / transformation digitale</a></li>
                                                        <li><a href="{{ route('services_link', ['service' => 'recrutement-et-sous-traitance']) }}">Recrutement & sous-traitance</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Mega Menu  -->
                                </li>

                                <li class="has-dropdown has-menu-child-item {{ $ongletActif === 'rejoindre' ? 'active' : '' }}">
                                    <a href="{{ route('rejoindre_link') }}" >Nous rejoindre </a>
                                </li>

                            </ul>
                        </nav>
                    </div>

                    <div class="header-right">
                        <div class="rbt-btn-wrapper d-none d-xl-block">
                            <a class="rbt-btn rbt-switch-btn btn-gradient btn-sm hover-transform-none" href="{{ route('contact_link') }}">
                                <span data-text="Nous contacter">Nous contacter</span>
                            </a>
                        </div>

                        <!-- Start Mobile-Menu-Bar -->
                        <div class="mobile-menu-bar d-block d-xl-none">
                            <div class="hamberger">
                                <button class="hamberger-button rbt-round-btn">
                                    <i class="feather-menu"></i>
                                </button>
                            </div>
                        </div>
                        <!-- Start Mobile-Menu-Bar -->
                    </div>

                </div>
            </div>
        </div>


    </header>
    <!-- Mobile Menu Section -->
    <div class="popup-mobile-menu">
        <div class="inner-wrapper">
            <div class="inner-top">
                <div class="content">
                    <div class="logo">
                        <a href="{{ route('home_link') }}">
                            <img src="{{ asset('assets/images/logo/logo-ak.png') }}" alt="AKINTEC Logo Images">
                        </a>
                    </div>
                    <div class="rbt-btn-close">
                        <button class="close-button rbt-round-btn"><i class="feather-x"></i></button>
                    </div>
                </div>
                <p class="description">“Notre génération croit en un numérique plus responsable, au service des entreprises et de la planète.”</p>
                <ul class="navbar-top-left rbt-information-list justify-content-start">
                    <li>
                        <a href="mailto:contact@akintec.fr"><i class="feather-mail"></i>contact@akintec.fr</a>
                    </li>
                    <li>
                        <a href="#"><i class="feather-phone"></i>+33 7 53 30 36 35</a>
                    </li>
                </ul>
            </div>

            <nav class="mainmenu-nav">
                <ul class="mainmenu">
                    <li class=" position-static {{ $ongletActif === 'accueil' ? 'active' : '' }}">
                        <a href="{{ route('home_link') }}">Accueil </a>
                    </li>
                    <li class=" position-static {{ $ongletActif === 'about' ? 'active' : '' }}">
                        <a href="{{ route('about_link') }}">Qui sommes-nous ?</a>
                    </li>
                    <li class="with-megamenu has-menu-child-item {{ $ongletActif === 'service' ? 'active' : '' }}">
                        <a href="#">Nos Services<i class="feather-chevron-down"></i></a>
                        <!-- Start Mega Menu  -->
                        <div class="rbt-megamenu grid-item-2">
                            <div class="wrapper">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="mega-top-banner">
                                            <div class="content">
                                                <h4 class="title">Developer hub</h4>
                                                <p class="description">Découvrez nos domaines d’expertise, au cœur
                                                de la transformation digitale de nos clients.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row row--15">
                                    <div class="col-lg-12 col-xl-6 col-xxl-6 single-mega-item">
                                        <ul class="mega-menu-item">
                                            <li><a href="{{ route('services_link', ['service' => 'developpemet-logiciel-web-mobile']) }}">Développement logiciel & web</a></li>
                                            <li><a href="{{ route('services_link', ['service' => 'data-engineering-et-science']) }}">Data engineering / Data science</a></li>
                                            <li><a href="{{ route('services_link', ['service' => 'cloud-et-devops']) }}">Cloud & DevOps</a></li>
                                            <li><a href="{{ route('services_link', ['service' => 'conseil-it-transformation-digital']) }}">Conseil IT / transformation digitale</a></li>
                                            <li><a href="{{ route('services_link', ['service' => 'recrutement-et-sous-traitance']) }}">Recrutement & sous-traitance</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Mega Menu  -->
                    </li>
                    <li class="position-static {{ $ongletActif === 'rejoindre' ? 'active' : '' }}">
                        <a href="{{ route('rejoindre_link') }}" >Nous rejoindre </a>
                    </li>
                </ul>
            </nav>

            <div class="mobile-menu-bottom">
                <div class="rbt-btn-wrapper mb--20">
                    <a class="rbt-btn btn-border-gradient radius-round btn-sm hover-transform-none w-100 justify-content-center text-center" href="{{ route('contact_link') }}">
                        <span>Nous contacter</span>
                    </a>
                </div>

                <div class="social-share-wrapper">
                    <span class="rbt-short-title d-block">Trouvez-nous sur</span>
                    <ul class="social-icon social-default transparent-with-border justify-content-start mt--20">
                        <li><a href="https://www.facebook.com/">
                                <i class="feather-facebook"></i>
                            </a>
                        </li>
                        <li><a href="https://www.twitter.com">
                                <i class="feather-twitter"></i>
                            </a>
                        </li>
                        <li><a href="https://www.instagram.com/">
                                <i class="feather-instagram"></i>
                            </a>
                        </li>
                        <li><a href="https://www.linkedin.com/company/akintec-fr">
                                <i class="feather-linkedin"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>