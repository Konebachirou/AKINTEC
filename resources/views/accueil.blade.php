@extends('layouts.app')
@section('content')

<!-- Start Banner Area -->
<div class="rbt-banner-area rbt-banner-4 bg_image bg_image--13 header-transperent-spacer">
    <div class="wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="content text-start">
                        <div class="inner">
                            
                            <h1 class="title">Accélérez vos projets numériques<br />avec AKINTEC.</h1>
                            <p class="description">Cabinet de conseil et d’ingénierie spécialisé en développement,<br />  data et transformation digitale.</p>

                            <ul class="rbt-list-style-2" style="margin-bottom: -5%">
                                <li><i class="feather-check"></i>Innovation</li>
                                <li><i class="feather-check"></i>Expertise</li>
                                <li><i class="feather-check"></i>Réactivité</li>
                                <li><i class="feather-check"></i>Proximité</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Banner Area -->
<div class="rbt-categories-area bg-color-white rbt-section-gap" style="margin-top: -70px">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center">
                    <span class="subtitle bg-primary-opacity">Nos services</span>
                    <h3 class="title">Découvrez nos domaines d’expertise, au cœur <br> de la transformation digitale de nos clients.</h3>
                </div>
            </div>
        </div>
        <div class="swiper category-activation-one rbt-arrow-between icon-bg-gray gutter-swiper-30 ptb--20">
            <div class="swiper-wrapper">
                <!-- Start Category Box Layout  -->
                <div class="swiper-slide">
                    <div class="single-slide">
                        <div class="rbt-cat-box rbt-cat-box-1 variation-2 text-center">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="{{ route('services_link', ['service' => 'developpemet-logiciel-web-mobile']) }}">
                                        <img src="assets/images/category/image/web2.png" alt="Category Images">
                                    </a>
                                </div>
                                <div class="icons">
                                    <img src="assets/images/shape/webm.png" alt="Icons Images">
                                </div>
                                <div class="content">
                                    <h5 class="title"><a href="{{ route('services_link', ['service' => 'developpemet-logiciel-web-mobile']) }}">Développement logiciel & web</a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Category Box Layout  -->

                <!-- Start Category Box Layout  -->
                <div class="swiper-slide">
                    <div class="single-slide">
                        <div class="rbt-cat-box rbt-cat-box-1 variation-2 text-center">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="{{ route('services_link', ['service' => 'data-engineering-et-science']) }}">
                                        <img src="assets/images/category/image/data5.jpg" alt="Category Images">
                                    </a>
                                </div>
                                <div class="icons">
                                    <img src="assets/images/shape/data.png" alt="Icons Images">
                                </div>
                                <div class="content">
                                    <h5 class="title"><a href="c{{ route('services_link', ['service' => 'data-engineering-et-science']) }}">Data engineering & data science</a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Category Box Layout  -->

                <!-- Start Category Box Layout  -->
                <div class="swiper-slide">
                    <div class="single-slide">
                        <div class="rbt-cat-box rbt-cat-box-1 variation-2 text-center">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="{{ route('services_link', ['service' => 'cloud-et-devops']) }}">
                                        <img src="assets/images/category/image/ops.png" alt="Category Images">
                                    </a>
                                </div>
                                <div class="icons">
                                    <img src="assets/images/shape/cloud.png" alt="Icons Images">
                                </div>
                                <div class="content">
                                    <h5 class="title"><a href="{{ route('services_link', ['service' => 'cloud-et-devops']) }}">Cloud & DevOps</a><br></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Category Box Layout  -->

                <!-- Start Category Box Layout  -->
                <div class="swiper-slide">
                    <div class="single-slide">
                        <div class="rbt-cat-box rbt-cat-box-1 variation-2 text-center">
                        <div class="inner">
                        <div class="thumbnail">
                            <a href="{{ route('services_link', ['service' => 'recrutement-et-sous-traitance']) }}">
                                <img src="assets/images/category/image/recrute.jpeg" alt="Category Images">
                            </a>
                        </div>
                        <div class="icons">
                            <img src="assets/images/shape/recrutement.png" alt="Icons Images">
                        </div>
                        <div class="content">
                            <h5 class="title"><a href="{{ route('services_link', ['service' => 'recrutement-et-sous-traitance']) }}">Recrutement & sous-traitance IT</a></h5>
                        </div>
                    </div>
                </div>
                    </div>
                </div>
                <!-- End Category Box Layout  -->

                <!-- Start Category Box Layout  -->
                <div class="swiper-slide">
                    <div class="single-slide">
                        <div class="rbt-cat-box rbt-cat-box-1 variation-2 text-center">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="{{ route('services_link', ['service' => 'conseil-it-transformation-digital']) }}">
                                        <img src="assets/images/category/image/consult.jpg" alt="Category Images">
                                    </a>
                                </div>
                                <div class="icons">
                                    <img src="assets/images/shape/conseil.png" alt="Icons Images">
                                </div>
                                <div class="content">
                                    <h5 class="title"><a href="{{ route('services_link', ['service' => 'conseil-it-transformation-digital']) }}">Conseil IT / transformation digitale</a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Category Box Layout  -->
            </div>


            <div class="rbt-swiper-arrow rbt-arrow-left">
                <div class="custom-overfolow">
                    <i class="rbt-icon feather-arrow-left"></i>
                    <i class="rbt-icon-top feather-arrow-left"></i>
                </div>
            </div>

            <div class="rbt-swiper-arrow rbt-arrow-right">
                <div class="custom-overfolow">
                    <i class="rbt-icon feather-arrow-right"></i>
                    <i class="rbt-icon-top feather-arrow-right"></i>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="rbt-newsletter-area newsletter-style-2 bg-color-gray rbt-section-gap" style="margin-top: -40px">
    <div class="container">
        <div class="row row--15 align-items-center">
            <div class="col-lg-12">
                <div class="inner text-center">
                    <div class="section-title text-center" style="margin-top: -70px">
                        <span class="subtitle bg-white-opacity ">Pourquoi choisir AKINTEC ?</span>
                        <h5 class="title color-white mb-6"> Chez AKINTEC, nous combinons expertise technique, culture de l’innovation  <br> et proximité humaine 
                        pour accompagner durablement la transformation numérique de nos clients.</h5>
                    </div>
                    <div class="row row--15 ">

                        <!-- Start Service Grid  -->
                        <div class="col-lg-4 col-xl-3 col-xxl-3 col-md-6 col-sm-6 col-12 mt--30">
                            <div class="service-card service-card-6">
                                <div class="inner">
                                    <div class="icon">
                                        <img src="assets/images/icons/001-bulb.png" alt="icons Images">
                                    </div>
                                    <div class="content">
                                        <h6 class="title">Expertise technique reconnue</h6>
                                        <p class="description color-white">Nos ingénieurs et data experts maîtrisent les technologies modernes du web, du cloud et de la data science.</p>
                                    </div>
                                    <span class="number-text">1</span>
                                </div>
                            </div>
                        </div>
                        <!-- End Service Grid  -->

                        <!-- Start Service Grid  -->
                        <div class="col-lg-4 col-xl-3 col-xxl-3 col-md-6 col-sm-6 col-12 mt--30">
                            <div class="service-card service-card-6">
                                <div class="inner">
                                    <div class="icon">
                                        <img src="assets/images/icons/002-hat.png" alt="Shape Images">
                                    </div>
                                    <div class="content">
                                        <h6 class="title">Accompagnement sur mesure</h6>
                                        <p class="description color-white">Chaque projet est pensé pour s’adapter à vos enjeux métiers, avec une approche agile et transparente.</p>
                                    </div>
                                    <span class="number-text">2</span>
                                </div>
                            </div>
                        </div>
                        <!-- End Service Grid  -->

                        <!-- Start Service Grid  -->
                        <div class="col-lg-4 col-xl-3 col-xxl-3 col-md-6 col-sm-6 col-12 mt--30">
                            <div class="service-card service-card-6">
                                <div class="inner">
                                    <div class="icon">
                                        <img src="assets/images/icons/003-id-card.png" alt="Shape Images">
                                    </div>
                                    <div class="content">
                                        <h6 class="title">Réseau de talents qualifiés</h6>
                                        <p class="description color-white">Nous sélectionnons des profils qualifiés, passionnés et disponibles pour renforcer vos équipes techniques.</p>
                                    </div>
                                    <span class="number-text">3</span>
                                </div>
                            </div>
                        </div>
                        <!-- End Service Grid  -->

                        <!-- Start Service Grid  -->
                        <div class="col-lg-4 col-xl-3 col-xxl-3 col-md-6 col-sm-6 col-12 mt--30">
                            <div class="service-card service-card-6">
                                <div class="inner">
                                    <div class="icon">
                                        <img src="assets/images/icons/004-pass.png" alt="Shape Images">
                                    </div>
                                    <div class="content">
                                        <h6 class="title">Esprit d’innovation et proximité</h6>
                                        <p class="description color-white">Basés en France, nous allions la rigueur technique à une culture de l’innovation 
                                        et un accompagnement de proximité.</p>
                                    </div>
                                    <span class="number-text">4</span>
                                </div>
                            </div>
                        </div>
                        <!-- End Service Grid  -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="rbt-brand-area bg-color-white rbt-section-gap">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="section-title text-center mb--40">
                    <h3 class="small-title w-600">Ils nous font confiance</h3>
                </div>
                <ul class="brand-list brand-style-3 justify-content-center justify-content-lg-between">
                    <li><a href="#"><img src="assets/images/brand/ionos.png" alt="Brand Image"></a></li>
                    <li><a href="#"><img src="assets/images/brand/brand-08.png" alt="Brand Image"></a></li>
                    <li><a href="#"><img src="assets/images/brand/partner-9.webp" alt="Brand Image"></a></li>
                    <li><a href="#"><img src="assets/images/brand/brand-06.png" alt="Brand Image"></a></li>
                    <li><a href="#"><img src="assets/images/brand/brand-07.png" alt="Brand Image"></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="rbt-testimonial-area bg-color-extra2 rbt-section-gap2" style="margin-top: -100px">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mb--60">
                <div class="section-title text-center">
                    <h3 class="title">Ce que nos partenaires et clients  pensent de nous</h3>
                </div>
            </div>
        </div>
        <div class="row g-5">
            <!-- Start Single Testimonial  -->
            <div class="col-lg-4 col-md-6 col-12">
                <div class="rbt-testimonial-box">
                    <div class="inner">
                        <div class="clint-info-wrapper">
                            <div class="thumb">
                                <img src="assets/images/testimonial/user.png" alt="Clint Images">
                            </div>
                            <div class="client-info">
                                <h5 class="title">YAnnick Meckwegne</h5>
                                <span>Président <i>African Business CLUB</i></span>
                            </div>
                        </div>
                        <div class="description">
                            <p class="subtitle-3">Grâce à leur accompagnement, nous avons enfin un site web moderne et efficace pour présenter nos services.</p>
                            <div class="rating mt--20">
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Testimonial  -->

            <!-- Start Single Testimonial  -->
            <div class="col-lg-4 col-md-6 col-12">
                <div class="rbt-testimonial-box">
                    <div class="inner">
                        <div class="clint-info-wrapper">
                            <div class="thumb">
                                <img src="assets/images/testimonial/user.png" alt="Clint Images">
                            </div>
                            <div class="client-info">
                                <h5 class="title">Kannifing Coulibaly</h5>
                                <span>CEO <i>KALYWAX</i></span>
                            </div>
                        </div>
                        <div class="description">
                            <p class="subtitle-3">Une équipe à l’écoute qui a su digitaliser nos processus et simplifier notre gestion au quotidien.</p>
                            <div class="rating mt--20">
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Testimonial  -->

            <!-- Start Single Testimonial  -->
            <div class="col-lg-4 col-md-6 col-12">
                <div class="rbt-testimonial-box">
                    <div class="inner">
                        <div class="clint-info-wrapper">
                            <div class="thumb">
                                <img src="assets/images/testimonial/user.png" alt="Clint Images">
                            </div>
                            <div class="client-info">
                                <h5 class="title">Boubacar Diallo</h5>
                                <span>CEO <i>Jamaa Summit</i></span>
                            </div>
                        </div>
                        <div class="description">
                            <p class="subtitle-3">Ils nous ont guidés dans la création d’une solution numérique sur mesure, parfaitement adaptée à notre activité.</p>
                            <div class="rating mt--20">
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Testimonial  -->
        </div>
    </div>
</div>
<!-- Start Call To Action  -->
<div class="rbt-callto-action-area bg-color-extra2 " style="padding-top: -100px; padding-bottom: 8%">
    <div class="rbt-callto-action rbt-cta-default style-2">
        <div class="container content-wrapper overflow-hidden">
            <div class="row gy-5 align-items-center">
                <div class="col-lg-8">
                    <div class="inner">
                        <div class="content text-left">
                            <h3 class="title" data-sal="slide-up" data-sal-duration="400" data-sal-delay="200">Besoin d’un partenaire technologique fiable ?</h3>
                            <h6 class="subtitle" data-sal="slide-up" data-sal-duration="400" data-sal-delay="300">Discutons de votre projet</h6>
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