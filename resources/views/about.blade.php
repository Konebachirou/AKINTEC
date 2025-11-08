@extends('layouts.app')
@section('content')
<div class="rbt-page-banner-wrapper">
    <!-- Start Banner BG Image  -->
    <div class="rbt-banner-image"></div>
    <!-- End Banner BG Image  -->
    <div class="rbt-banner-content">
        <!-- Start Banner Content Top  -->
        <div class="rbt-banner-content-top" style="margin-top: 120px; margin-bottom: -9%" >
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Start Breadcrumb Area  -->
                        <ul class="page-list">
                            <li class="rbt-breadcrumb-item"><a href="index.html">Accueil</a></li>
                            <li>
                                <div class="icon-right"><i class="feather-chevron-right"></i></div>
                            </li>
                            <li class="rbt-breadcrumb-item active">à-propos</li>
                        </ul>
                        <!-- End Breadcrumb Area  -->

                        <div class=" title-wrapper">
                            <h1 class="title mb--0">Qui sommes-nous ?</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Banner Content Top  -->
    </div>
</div>

<div class="rbt-about-area about-style-1 bg-color-white " style="margin-top: 60px">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6" data-sal="slide-up" data-sal-duration="700">
                <div class="inner pl--50 pl_sm--5">
                    <div class="content text-start">
                        <span class="rbt-badge-6 bg-primary-opacity">Notre histoire</span>
                        <p class="text-gray-700 mb-6">
                            <strong>AKINTEC</strong> est née de la vision de jeunes passionnés de technologie, convaincus que 
                            le numérique peut être à la fois un levier de performance et un vecteur de transformation positive.  
                            Dans un monde en constante mutation, où la digitalisation s’accélère, nous avons voulu créer 
                            une entreprise à impact : <strong>humaine, responsable et tournée vers l’avenir</strong>.
                        </p>
                        <p class="text-gray-700 mb-6">
                            Notre ambition est d’accompagner les organisations dans leur transition numérique en 
                            intégrant des solutions éco-responsables, durables et économiquement viables.  
                            Nous croyons que la technologie doit servir l’humain et non l’inverse — 
                            qu’elle peut allier performance, innovation et respect de l’environnement.
                        </p>
                        <p class="text-gray-700 mb-6">
                            AKINTEC s’appuie sur une nouvelle génération d’ingénieurs et de consultants qui souhaitent 
                            <strong>redéfinir les codes du numérique</strong> : plus vert, plus éthique et plus inclusif.  
                            À travers des approches éco-conscientes et des outils à faible empreinte énergétique, 
                            nous aidons les entreprises à tirer le meilleur du digital tout en réduisant leur impact environnemental.
                        </p>
                      
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="content">
                    <img src="assets/images/about/team.jpeg" alt="About Images">
                    <div style="margin-top: 20px" class="text-center">  
                    <p class="text-sm text-gray-600 italic">
                        <strong>“Notre génération croit en un numérique plus responsable, au service des entreprises et de la planète.”</strong>
                    </p>
                    <p class="font-semibold mt-2 text-green-700">— L’équipe AKINTEC</p></div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="rbt-counterup-area bg-color-white" style="margin-top: 60px"> 
    <div class="container">
        <div class="row mb--60">
            <div class="col-lg-12">
                <div class="section-title text-center">
                    <h2 class="title">Nos valeurs</h2>
                </div>
            </div>
        </div>
        <div class="row g-5 hanger-line">
            <!-- Start Single Counter  -->
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="rbt-counterup rbt-hover-03 border-bottom-gradient">
                    <div class="top-circle-shape"></div>
                    <div class="inner">
                        <div class="content">
                            <h3 >Innovation durable</h3>
                            <span class="subtitle">Innover, oui, mais dans le respect de la planète et des ressources.</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Counter  -->

            <!-- Start Single Counter  -->
            <div class="col-lg-3 col-md-6 col-sm-6 col-12 mt--60 mt_md--30 mt_sm--30 mt_mobile--60">
                <div class="rbt-counterup rbt-hover-03 border-bottom-gradient">
                    <div class="top-circle-shape"></div>
                    <div class="inner">
                        <div class="content">
                            <h3 >Engagement humain</h3>
                            <span class="subtitle">Travailler avec nos clients dans une logique de partenariat et de confiance.</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Counter  -->

            <!-- Start Single Counter  -->
            <div class="col-lg-3 col-md-6 col-sm-6 col-12 mt_md--60 mt_sm--60">
                <div class="rbt-counterup rbt-hover-03 border-bottom-gradient">
                    <div class="top-circle-shape"></div>
                    <div class="inner">
                        <div class="content">
                            <h3 >Excellence technologique</h3>
                            <span class="subtitle">Offrir le meilleur de la technologie avec agilité et précision.</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Counter  -->

            <!-- Start Single Counter  -->
            <div class="col-lg-3 col-md-6 col-sm-6 col-12 mt--60 mt_md--30 mt_sm--30 mt_mobile--60">
                <div class="rbt-counterup rbt-hover-03 border-bottom-gradient">
                    <div class="top-circle-shape"></div>
                    <div class="inner">
                        <div class="content">
                            <h3>Responsabilité</h3>
                            <span class="subtitle">Favoriser des pratiques numériques éthiques et respectueuses de l’environnement.</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Counter  -->
        </div>
    </div>
</div>
    <!-- Start Service Area -->
    <div class="rbt-service-area bg-color-white rbt-section-gap">
        <div class="container">
            <!-- Start Card Area -->
            <div class="row row--15 mt_dec--30">
                <div class="col-lg-4 col-xl-4 col-md-6 col-sm-6 col-12 mt--30">
                    <div class="section-title text-start">
                        <h2 class="title">Nos domaines d’expertise</h2>
                        <p class="description mt--20">  Alliant innovation, agilité et responsabilité, nos équipes mettent le numérique au service de la performance et de la durabilité.
                        </p>
                    </div>
                </div>

                <!-- Start Service Grid  -->
                <div class="col-lg-4 col-xl-4 col-md-6 col-sm-6 col-12 mt--30">
                    <div class="service-card service-card-6 bg-color bg-card-color-1">
                        <div class="inner">
                            <div class="icon">
                                <img src="assets/images/shape/webm.png" alt="Shape Images">
                                <img class="opacity_image" src="assets/images/shape/webm.png" alt="Shape Images">
                            </div>
                            <div class="content">
                                <h6 class="title"><a href="#">Développement & Ingénierie logicielle</a></h6>
                                <p class="description">Conception d’applications performantes, web et mobiles, adaptées à vos besoins métiers.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Service Grid  -->

                <!-- Start Service Grid  -->
                <div class="col-lg-4 col-xl-4 col-md-6 col-sm-6 col-12 mt--30">
                    <div class="service-card service-card-6 bg-color bg-card-color-2">
                        <div class="inner">
                            <div class="icon">
                                <img src="assets/images/shape/data.png" alt="Shape Images">
                                <img class="opacity_image" src="assets/images/shape/data.png" alt="Shape Images">
                            </div>
                            <div class="content">
                                <h6 class="title"><a href="#">Data & Intelligence artificielle</a></h6>
                                <p class="description">Exploitation des données pour la prise de décision et l’optimisation des performances.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Service Grid  -->

                <!-- Start Service Grid  -->
                <div class="col-lg-4 col-xl-4 col-xxl-4 col-md-6 col-sm-6 col-12 mt--30">
                    <div class="service-card service-card-6 bg-color bg-card-color-3">
                        <div class="inner">
                            <div class="icon">
                                <img src="assets/images/shape/cloud.png" alt="Shape Images">
                                <img class="opacity_image" src="assets/images/shape/cloud.png" alt="Shape Images">
                            </div>
                            <div class="content">
                                <h6 class="title"><a href="#">Cloud & DevOps</a></h6>
                                <p class="description">Infrastructure moderne, automatisation et sécurité pour une agilité maximale.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Service Grid  -->

                <!-- Start Service Grid  -->
                <div class="col-lg-4 col-xl-4 col-xxl-4 col-md-6 col-sm-6 col-12 mt--30">
                    <div class="service-card service-card-6 bg-color bg-card-color-4">
                        <div class="inner">
                            <div class="icon">
                                <img src="assets/images/shape/conseil.png" alt="Shape Images">
                                <img class="opacity_image" src="assets/images/shape/conseil.png" alt="Shape Images">
                            </div>
                            <div class="content">
                                <h6 class="title"><a href="#">Conseil IT & Transformation digitale</a></h6>
                                <p class="description">Accompagnement stratégique pour aligner vos systèmes d’information avec vos ambitions de croissance et d’innovation.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Service Grid  -->

                <!-- Start Service Grid  -->
                <div class="col-lg-4 col-xl-4 col-xxl-4 col-md-6 col-sm-6 col-12 mt--30">
                    <div class="service-card service-card-6 bg-color bg-card-color-5">
                        <div class="inner">
                            <div class="icon">
                                <img src="assets/images/shape/recrutement.png" alt="Shape Images">
                                <img class="opacity_image" src="assets/images/shape/recrutement.png" alt="Shape Images">
                            </div>
                            <div class="content">
                                <h6 class="title"><a href="#">Recrutement & Sous-traitance IT</a></h6>
                                <p class="description">Mise à disposition de profils techniques qualifiés et flexibles pour renforcer vos équipes et projets digitaux.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Service Grid  -->
            </div>
            <!-- End Card Area -->
        </div>
    </div>
    <!-- End Service Area -->
<div class="rbt-team-area bg-color-extra2 rbt-section-gap">
    <div class="container">
        <div class="row mb--60">
            <div class="col-lg-12">
                <div class="section-title text-center">
                    <h5 class="title">Une équipe passionnée et engagée.</h5>
                    <p class="description mt--10">Derrière chaque projet AKINTEC, une équipe de consultants, ingénieurs et data experts 
                    partageant la même passion pour la technologie et l’innovation.
                    </p>
                </div>
            </div>
        </div>
        <div class="row row--15 mt_dec--30">
            <!-- Start Single Team  -->
            <div class="col-lg-3 col-md-6 col-sm-6 col-12 mt--30">
                <div class="team">
                    <div class="thumbnail"><img src="assets/images/team/team-10.jpg" alt="Blog Images">
                    </div>
                    <div class="content">
                        <h4 class="title">SABRINA MOUANDZA</h4>
                        <p class="designation">Co-Funder, Juriste</p>
                    </div>
                    <ul class="social-icon">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    </ul>
                </div>
            </div>
            <!-- End Single Team  -->

            <!-- Start Single Team  -->
            <div class="col-lg-3 col-md-6 col-sm-6 col-12 mt--30">
                <div class="team">
                    <div class="thumbnail"><img src="assets/images/team/team-10.jpg" alt="Blog Images">
                    </div>
                    <div class="content">
                        <h4 class="title">BACHIROU KONE</h4>
                        <p class="designation">Co-Funder, Développeur Full-Stack</p>
                    </div>
                    <ul class="social-icon">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    </ul>
                </div>
            </div>
            <!-- End Single Team  -->

            <!-- Start Single Team  -->
            <div class="col-lg-3 col-md-6 col-sm-6 col-12 mt--30">
                <div class="team">
                    <div class="thumbnail"><img src="assets/images/team/team-10.jpg" alt="Blog Images">
                    </div>
                    <div class="content">
                        <h4 class="title">CHARLOPIN ATSE</h4>
                        <p class="designation">co-Funder, HR</p>
                    </div>
                    <ul class="social-icon">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    </ul>
                </div>
            </div>
            <!-- End Single Team  -->

            <!-- Start Single Team  -->
            <div class="col-lg-3 col-md-6 col-sm-6 col-12 mt--30">
                <div class="team">
                    <div class="thumbnail"><img src="assets/images/team/team-10.jpg" alt="Blog Images">
                    </div>
                    <div class="content">
                        <h4 class="title">ALI COULIBALY</h4>
                        <p class="designation">CTO, Développeur Full-Stack</p>
                    </div>
                    <ul class="social-icon">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    </ul>
                </div>
            </div>
            <!-- End Single Team  -->

        </div>
    </div>
</div>

<!-- Start Call To Action  -->
<div class="rbt-callto-action-area bg-color-extra2 " style="padding-bottom: 60px">
    <div class="rbt-callto-action rbt-cta-default style-2">
        <div class="container content-wrapper overflow-hidden">
            <div class="row gy-5 align-items-center">
                <div class="col-lg-8">
                    <div class="inner">
                        <div class="content text-left">
                            <h3 class="title" data-sal="slide-up" data-sal-duration="400" data-sal-delay="200">Envie d’en savoir plus sur AKINTEC ?</h3>
                            <h6 class="subtitle" data-sal="slide-up" data-sal-duration="400" data-sal-delay="300">Discutons de vos besoins et voyons comment nous pouvons accélérer vos projets numériques.
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="call-to-btn text-start text-lg-end position-relative" data-sal="slide-up" data-sal-duration="400" data-sal-delay="400">
                        <a class="rbt-btn rbt-switch-btn rbt-switch-y" href="#">
                            <span data-text="Contactez-nous">Contactez-nous</span>
                        </a>
                        <div class="shape-text-image">
                            <img class="rbt-rotatation-round" src="assets/images/shape/cta-text-2.png" alt="Education Images">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop