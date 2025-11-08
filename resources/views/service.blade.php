@extends('layouts.app')
@section('content')
<!-- Start Banner Area -->
<div class="rbt-banner-area rbt-banner-1 bg_image bg_image--13" style="padding-bottom: 8%">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 pb--120 pt--150">
                <div class="content">
                    <div class="inner">
                        <h1 class="title">
                        {{ $service['title']}}
                        </h1>
                        <p class="description">
                        {{ $service['subtitle']}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- End Banner Area -->
<div class="rbt-section-overlayping-top rbt-section-gapBottom" style="z-index: 10;">
    <div class="inner">
        <div class="container">
            <div class="row " >
                <div class="col-lg-12">
                    <!-- Start Course Details  -->
                    <div class="course-details-content">
                        <!-- Start Course Feature Box  -->
                        <div class="rbt-course-feature-box overview-wrapper rbt-shadow-box mt--30 has-show-more" id="overview" style="padding-bottom: 8%; margin-left: 10%; margin-right: 10%">
                            <div class="rbt-course-feature-inner">
                                <div class="section-title">
                                    <h4 class="rbt-title-style-3">Presentation</h4>
                                </div>
                                @foreach ($service['presentation'] as $presentation)
                                    <p>{{ $presentation }}</p>
                                @endforeach
                            </div>
                        </div>

                        <!-- Start Course Feature Box  -->
                        <div class="rbt-course-feature-box rbt-shadow-box details-wrapper mt--30" id="details">
                            <div class="row g-5">
                                @foreach ($service['expertises'] as $expertise)

                                    <!-- Start Feture Box  -->
                                    <div class="col-lg-6">
                                        <div class="section-title">
                                            <h4 class="rbt-title-style-3 mb--20">{{$expertise['title'] }}</h4>
                                            <p>{{$expertise['description'] }}</p>
                                        </div>
                                        <ul class="rbt-list-style-1">
                                            @foreach ($expertise['details'] as $detail)
                                                <li><i class="feather-check"></i>{{ $detail }} </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <!-- End Feture Box  -->
                                @endforeach
                            </div>
                        </div>
                        <!-- End Course Feature Box  -->
                    </div>
                    <!-- End Course Details  -->
                </div>
            </div>
        </div>
    </div>
</div>
@stop