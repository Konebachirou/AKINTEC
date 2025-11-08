<!DOCTYPE html>
<html lang="en">
    @include('layouts.head')
    <body>
    <!-- <main> -->
    <div class="rbt-countdown-area rbt-maintenance-area bg_image bg_image--6 bg_image_fixed rbt-section-gap vh-100 d-flex align-items-center justify-content-center" data-black-overlay="5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-12">
                    <div class="inner">
                        <div class="section-title text-center">
                            <span class="subtitle bg-white-opacity">En maintenance.</span>
                            <h2 class="title color-white">Désolé, nous sommes actuellement en maintenance.</h2>
                            <p class="description has-medium-font-size mt--20 mb--0 color-white opacity-7">Nous sommes actuellement en maintenance. Si tout se passe comme prévu, nous serons de retour prochainement.</p>
                        </div>
                        <div class="countdown-style-1 mt--50 justify-content-center">
                            <div class="countdown justify-content-center" data-date="2025-12-30">
                                <div class="countdown-container days">
                                    <span class="countdown-value">87</span>
                                    <span class="countdown-heading">Days</span>
                                </div>
                                <div class="countdown-container hours">
                                    <span class="countdown-value">23</span>
                                    <span class="countdown-heading">Hours</span>
                                </div>
                                <div class="countdown-container minutes">
                                    <span class="countdown-value">38</span>
                                    <span class="countdown-heading">Minutes</span>
                                </div>
                                <div class="countdown-container seconds">
                                    <span class="countdown-value">27</span>
                                    <span class="countdown-heading">Seconds</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="rbt-progress-parent">
        <svg class="rbt-back-circle svg-inner" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- </main> -->
    @include('layouts.js')
</body>

</html>