<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    {{-- <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet"> --}}
    <link rel="stylesheet" href="{{ asset('assets/web/assets/mobirise-icons/mobirise-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/tether/tether.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap-grid.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap-reboot.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/dropdown/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/animatecss/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/socicon/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/theme/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/gallery/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/mobirise/css/mbr-additional.css') }}" type="text/css">

</head>

<body>

    {{-- <li><a href="{{ url('locale/en') }}"><i class="fa fa-language"></i> EN</a></li>

    <li><a href="{{ url('locale/id') }}"><i class="fa fa-language"></i> FR</a></li> --}}
    <section class="menu cid-r7nTNk5A6X" once="menu" id="menu1-f">

        <nav
            class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm bg-color transparent">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </button>
            <div class="menu-logo">
                <div class="navbar-brand">
                    <span class="navbar-logo">
                        <a href="#top">
                            <img src="{{ asset('assets/images/logo-a-122x125.png') }}" alt="Ayo Media Network" title=""
                                style="height: 3.8rem;">
                        </a>
                    </span>

                </div>
            </div>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true">
                    <li class="nav-item">
                        <a class="nav-link link text-white display-4" href="#top">
                            {{ __('messages.menu_home') }}
                        </a>
                    </li>
                    <li class="nav-item"><a class="nav-link link text-white display-4" href="#content5-e">
                            {{ __('messages.menu_about') }}
                        </a>
                    </li>
                    <li class="nav-item"><a class="nav-link link text-white display-4" href="#features9-i">
                            {{ __('messages.menu_service') }}
                        </a>
                    </li>
                    <li class="nav-item"><a class="nav-link link text-white display-4" href="#features1-g">
                            {{ __('messages.menu_news') }}
                        </a>
                    </li>
                    <li class="nav-item"><a class="nav-link link text-white display-4" href="#features1-g">
                            {{ __('messages.menu_founder') }}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link text-white display-4" href="#clients-b">
                            {{ __('messages.menu_client') }}
                        </a>
                    </li>
                    <li class="nav-item"><a class="nav-link link text-white display-4" href="#billboard-1">
                            {{ __('messages.menu_billboard') }}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link text-white display-4" href="#footer1-2">
                            <!-- <span class="mbri-search mbr-iconfont mbr-iconfont-btn"></span> -->
                            {{ __('messages.menu_contact') }}
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link link text-white dropdown-toggle display-4" href="#"
                            data-toggle="dropdown-submenu">{{ __('messages.language') }}</a>
                        <div class="dropdown-menu">
                            <a class="text-white dropdown-item display-4"
                                href="{{ url('locale/en') }}">{{ __('messages.english') }}</a>
                            <a class="text-white dropdown-item display-4" href="{{ url('locale/id') }}"
                                aria-expanded="true">{{ __('messages.indonesian') }}</a>
                        </div>
                    </li>
                </ul>

            </div>
        </nav>
    </section>

    <section class="engine">
        <!-- <a href="https://mobirise.info/w">html5 templates</a> -->
    </section>
    <section class="cid-qTkA127IK8 mbr-fullscreen" data-bg-video="https://www.youtube.com/watch?v=G8ch2zXEHTY"
        id="header2-1">



        <div class="mbr-overlay" style="opacity: 0.2; background-color: rgb(118, 118, 118);"></div>

        <div class="container align-center">
            <div class="row justify-content-md-center">
                <div class="mbr-white col-md-10">
                    <h1 class="mbr-section-title mbr-bold pb-3 mbr-fonts-style display-1">
                        <span style="color:rgb(242,164,0)">{{ __('messages.ayo') }}</span> <span
                            style="color:rgb(2,110,110)">{{ __('messages.media_network') }}</span></h1>

                    <p class="mbr-text pb-3 mbr-fonts-style display-5"><strong>{{ __('messages.sub_title') }}</strong>
                    </p>

                </div>
            </div>
        </div>
        <div class="mbr-arrow hidden-sm-down" aria-hidden="true">
            <a href="#next">
                <i class="mbri-down mbr-iconfont"></i>
            </a>
        </div>
    </section>

    <section class="mbr-section content5 cid-r9JsGY2Rmv mbr-parallax-background" id="content5-e">





        <div class="container">
            <div class="media-container-row">
                <div class="title col-12 col-md-8">
                    <h2 class="align-center mbr-bold mbr-white pb-3 mbr-fonts-style display-2">
                        {{ __('messages.what_is') }}</h2>
                    <h3 class="mbr-section-subtitle align-center mbr-light mbr-white pb-3 mbr-fonts-style display-2">
                        <strong>{{ __('messages.title') }}</strong></h3>
                    <p class="mbr-text align-center mbr-white pb-3 mbr-fonts-style display-7">
                        {{ __('messages.ayo_is') }}
                    </p>

                </div>
            </div>
        </div>
    </section>

    <section class="features9 cid-r7nIPMxLJv" id="features9-i">




        <div class="container">
            <div class="row justify-content-center">
                <div class="card p-3 col-12 col-md-6">
                    <div class="media-container-row">
                        <div class="card-img pr-2">
                            <img class="mbr-iconfont" src="assets/logo/web_icon-01.png"
                                style="width:73px;height:75px;" />
                            <!-- <span class="mbr-iconfont"></span> -->
                        </div>
                        <div class="card-box">
                            <h4 class="card-title py-3 mbr-fonts-style display-7">
                                <strong>{{ __('messages.title_social_media_analysis') }}</strong>
                            </h4>
                            <p class="mbr-text mbr-fonts-style display-7">
                                {{ __('messages.sub_social_media_analysis') }}<br></p>
                        </div>
                    </div>
                </div>

                <div class="card p-3 col-12 col-md-6">
                    <div class="media-container-row">
                        <div class="card-img pr-2">
                            <img class="mbr-iconfont" src="assets/logo/web_icon-02.png"
                                style="width:73px;height:75px;" />
                            <!-- <span class="mbri-star mbr-iconfont"></span> -->
                        </div>
                        <div class="card-box">
                            <h4 class="card-title py-3 mbr-fonts-style display-7">
                                <strong>{{ __('messages.title_social_media_monitoring') }}</strong></h4>
                            <p class="mbr-text mbr-fonts-style display-7">
                                {{ __('messages.sub_social_media_monitoring') }}<br></p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="features9 cid-r7nITNQCj3" id="features9-j">




        <div class="container">
            <div class="row justify-content-center">
                <div class="card p-3 col-12 col-md-6">
                    <div class="media-container-row">
                        <div class="card-img pr-2">
                            <img class="mbr-iconfont" src="assets/logo/web_icon-08.png"
                                style="width:73px;height:75px;" />
                            <!-- <span class="mbri-features mbr-iconfont"></span> -->
                        </div>
                        <div class="card-box">
                            <h4 class="card-title py-3 mbr-fonts-style display-7">
                                <strong>{{ __('messages.title_buzzer_management') }}</strong></h4>
                            <p class="mbr-text mbr-fonts-style display-7">{{ __('messages.sub_buzzer_management') }}<br>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="card p-3 col-12 col-md-6">
                    <div class="media-container-row">
                        <div class="card-img pr-2">
                            <img class="mbr-iconfont" src="assets/logo/web_icon-03.png"
                                style="width:73px;height:75px;" />
                            <!-- <span class="mbri-star mbr-iconfont"></span> -->
                        </div>
                        <div class="card-box">
                            <h4 class="card-title py-3 mbr-fonts-style display-7">
                                <strong>{{ __('messages.title_brand_content') }}</strong></h4>
                            <p class="mbr-text mbr-fonts-style display-7">{{ __('messages.sub_brand_content') }}</p>
                        </div>
                    </div>
                </div>




            </div>
        </div>
    </section>

    <section class="features9 cid-r7nIVkvEQp" id="features9-k">




        <div class="container">
            <div class="row justify-content-center">
                <div class="card p-3 col-12 col-md-6">
                    <div class="media-container-row">
                        <div class="card-img pr-2">
                            <img class="mbr-iconfont" src="assets/logo/web_icon-05.png"
                                style="width:73px;height:75px;" />
                            <!-- <span class="mbri-features mbr-iconfont"></span> -->
                        </div>
                        <div class="card-box">
                            <h4 class="card-title py-3 mbr-fonts-style display-7">
                                <strong>{{ __('messages.title_native_ads') }}</strong></h4>
                            <p class="mbr-text mbr-fonts-style display-7">{{ __('messages.sub_native_ads') }}<br>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="card p-3 col-12 col-md-6">
                    <div class="media-container-row">
                        <div class="card-img pr-2">
                            <img class="mbr-iconfont" src="assets/logo/web_icon-06.png"
                                style="width:73px;height:75px;" />
                            <!-- <span class="mbri-star mbr-iconfont"></span> -->
                        </div>
                        <div class="card-box">
                            <h4 class="card-title py-3 mbr-fonts-style display-7">
                                <strong>{{ __('messages.title_media_monitoring') }}</strong></h4>
                            <p class="mbr-text mbr-fonts-style display-7">{{ __('messages.sub_media_monitoring') }}</p>
                        </div>
                    </div>
                </div>




            </div>
        </div>
    </section>

    <section class="features9 cid-r7nIXby4yh" id="features9-l">

        <div class="container">
            <div class="row justify-content-center">
                <div class="card p-3 col-12 col-md-6">
                    <div class="media-container-row">
                        <div class="card-img pr-2">
                            <img class="mbr-iconfont" src="assets/logo/web_icon-04.png"
                                style="width:73px;height:75px;" />
                            <!-- <span class="mbri-features mbr-iconfont"></span> -->
                        </div>
                        <div class="card-box">
                            <h4 class="card-title py-3 mbr-fonts-style display-7">
                                <strong>{{ __('messages.title_campaign') }}</strong></h4>
                            <p class="mbr-text mbr-fonts-style display-7">{{ __('messages.sub_campaign') }}</p>
                        </div>
                    </div>
                </div>

                <div class="card p-3 col-12 col-md-6">
                    <div class="media-container-row">
                        <div class="card-img pr-2">
                            <img class="mbr-iconfont" src="assets/logo/web_icon-07.png"
                                style="width:73px;height:75px;" />
                            <!-- <span class="mbri-star mbr-iconfont"></span> -->
                        </div>
                        <div class="card-box">
                            <h4 class="card-title py-3 mbr-fonts-style display-7">
                                <strong>{{ __('messages.title_billboard_management') }}</strong></h4>
                            <p class="mbr-text mbr-fonts-style display-7">{{ __('messages.sub_billboard_management') }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="features9 cid-r7nIXby4yh" id="features9-l">

        <div class="container">
            <div class="row justify-content-center">
                <div class="card p-3 col-12 col-md-6">
                    <div class="media-container-row">
                        <div class="card-img pr-2">
                            <img class="mbr-iconfont" src="assets/logo/web_icon-04.png"
                                style="width:73px;height:75px;" />
                            <!-- <span class="mbri-features mbr-iconfont"></span> -->
                        </div>
                        <div class="card-box">
                            <h4 class="card-title py-3 mbr-fonts-style display-7">
                                <strong>{{ __('messages.title_media_buying') }}</strong></h4>
                            <p class="mbr-text mbr-fonts-style display-7">{{ __('messages.sub_media_buying') }}</p>
                        </div>
                    </div>
                </div>

                <div class="card p-3 col-12 col-md-6">
                    <div class="media-container-row">
                        <div class="card-img pr-2">
                            <img class="mbr-iconfont" src="assets/logo/web_icon-07.png"
                                style="width:73px;height:75px;" />
                            <!-- <span class="mbri-star mbr-iconfont"></span> -->
                        </div>
                        <div class="card-box">
                            <h4 class="card-title py-3 mbr-fonts-style display-7">
                                <strong>{{ __('messages.title_Web_app') }}</strong></h4>
                            <p class="mbr-text mbr-fonts-style display-7">{{ __('messages.sub_Web_app') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="features9 cid-r7nIXby4yh" id="features9-l">

        <div class="container">
            <div class="row justify-content-center">
                <div class="card p-3 col-12 col-md-6">
                    <div class="media-container-row">
                        <div class="card-img pr-2">
                            <img class="mbr-iconfont" src="assets/logo/web_icon-04.png"
                                style="width:73px;height:75px;" />
                            <!-- <span class="mbri-features mbr-iconfont"></span> -->
                        </div>
                        <div class="card-box">
                            <h4 class="card-title py-3 mbr-fonts-style display-7">
                                <strong>{{ __('messages.title_public_relation_support') }}</strong></h4>
                            <p class="mbr-text mbr-fonts-style display-7">
                                {{ __('messages.sub_public_relation_support') }}</p>
                        </div>
                    </div>
                </div>

                <div class="card p-3 col-12 col-md-6">
                    <div class="media-container-row">
                        <div class="card-img pr-2">
                            {{-- <img class="mbr-iconfont" src="assets/logo/web_icon-07.png"
                                    style="width:73px;height:75px;" /> --}}
                            <!-- <span class="mbri-star mbr-iconfont"></span> -->
                        </div>
                        <div class="card-box">
                            <h4 class="card-title py-3 mbr-fonts-style display-7">
                                <strong></strong></h4>
                            <p class="mbr-text mbr-fonts-style display-7"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="testimonials3 cid-r7nvyOne9I mbr-parallax-background" id="testimonials3-7">



        <div class="mbr-overlay" style="opacity: 0.3; background-color: rgb(255, 255, 255);">
        </div>

        <div class="container">
            <div class="media-container-row">
                <div class="media-content px-3 align-self-center mbr-white py-2">
                    <p class="mbr-text testimonial-text mbr-fonts-style display-7">"Trust is built with Consistency
                    </p>
                    <p class="mbr-author-name pt-4 mb-2 mbr-fonts-style display-7">
                        Lincoln Chafee
                    </p>
                    <p class="mbr-author-desc mbr-fonts-style display-7">Mayor of Warwick (US)</p>
                </div>

                <div class="mbr-figure pl-lg-5" style="width: 120%;">
                    <img src="assets/images/lincoln-chafee-970x582.jpg" alt="" title="">
                </div>
            </div>
        </div>
    </section>

    <section class="features1 cid-r7nHSddvL7" id="features1-g">




        <div class="container">
            <div class="media-container-row">

                <div class="card p-3 col-12 col-md-6 col-lg-4">
                    <div class="card-img pb-3">
                        <img class="mbr-iconfont" src="assets/logo/Bandung.png" style="width:96px;height:96px;" />
                        <!-- <span class="mbri-bootstrap mbr-iconfont"></span> -->
                    </div>
                    <div class="card-box">
                        <h4 class="card-title py-3 mbr-fonts-style display-5"><strong>
                                Ayobandung.com</strong></h4>

                    </div>
                </div>

                <div class="card p-3 col-12 col-md-6 col-lg-4">
                    <div class="card-img pb-3">
                        <img class="mbr-iconfont" src="assets/logo/Bekasi.png" style="width:96px;height:96px;" />
                        <!-- <span class="mbri-touch mbr-iconfont"></span> -->
                    </div>
                    <div class="card-box">
                        <h4 class="card-title py-3 mbr-fonts-style display-5"><strong>
                                Ayobekasi.net</strong></h4>

                    </div>
                </div>

                <div class="card p-3 col-12 col-md-6 col-lg-4">
                    <div class="card-img pb-3">
                        <img class="mbr-iconfont" src="assets/logo/Bogor.png" style="width:96px;height:96px;" />
                        <!-- <span class="mbri-responsive mbr-iconfont"></span> -->
                    </div>
                    <div class="card-box">
                        <h4 class="card-title py-3 mbr-fonts-style display-5"><strong>
                                Ayobogor.com</strong></h4>

                    </div>
                </div>



            </div>

        </div>

    </section>

    <section class="testimonials-slider cid-rtIzSofAtZ" data-interval="false"
        id="testimonials-slider1-q">

        <div class="container text-center">
            <h2 class="pb-5 mbr-fonts-style display-2">
                {{ __('messages.founder') }}
            </h2>

            <div class="carousel slide" role="listbox" data-pause="false" data-keyboard="false" data-ride="carousel"
                data-interval="5000">
                <div class="carousel-inner">


                    <div class="carousel-item">
                        <div class="user col-md-8">
                            <div class="user_image">
                                <img src="{{ asset('assets/images/face1.jpg') }}">
                            </div>
                            <div class="user_text pb-3">
                                <p class="mbr-fonts-style display-7">
                                    {{ __('messages.founder_sum_1') }}
                                </p>
                            </div>
                            <div class="user_name mbr-bold pb-2 mbr-fonts-style display-7">
                                {{ __('messages.founder_name_1') }}
                            </div>
                            {{-- <div class="user_desk mbr-light mbr-fonts-style display-7">
                                    DESIGNER
                                </div> --}}
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="user col-md-8">
                            <div class="user_image">
                                <img src="{{ asset('assets/images/face2.jpg') }}">
                            </div>
                            <div class="user_text pb-3">
                                <p class="mbr-fonts-style display-7">
                                    {{ __('messages.founder_sum_2') }}
                                </p>
                            </div>
                            <div class="user_name mbr-bold pb-2 mbr-fonts-style display-7">
                                {{ __('messages.founder_name_2') }}
                            </div>
                            {{-- <div class="user_desk mbr-light mbr-fonts-style display-7">
                                    DEVELOPER
                                </div> --}}
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="user col-md-8">
                            <div class="user_image">
                                <img src="{{ asset('assets/images/face3.jpg') }}">
                            </div>
                            <div class="user_text pb-3">
                                <p class="mbr-fonts-style display-7">
                                    {{ __('messages.founder_sum_3') }}
                                </p>
                            </div>
                            <div class="user_name mbr-bold pb-2 mbr-fonts-style display-7">
                                {{ __('messages.founder_name_3') }}
                            </div>
                            {{-- <div class="user_desk mbr-light mbr-fonts-style display-7">
                                        DEVELOPER
                                    </div> --}}
                        </div>
                    </div>
                </div>

                <div class="carousel-controls">
                    <a class="carousel-control-prev" role="button" data-slide="prev">
                        <span aria-hidden="true" class="mbri-arrow-prev mbr-iconfont"></span>
                        <span class="sr-only">Previous</span>
                    </a>

                    <a class="carousel-control-next" role="button" data-slide="next">
                        <span aria-hidden="true" class="mbri-arrow-next mbr-iconfont"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="features1 cid-r7nHYnjukR" id="features1-h">




        <div class="container">
            <div class="media-container-row">

                <div class="card p-3 col-12 col-md-6 col-lg-4">
                    <div class="card-img pb-3">
                        <img class="mbr-iconfont" src="assets/logo/Cirebon.png" style="width:96px;height:96px;" />
                        <!-- <span class="mbri-bootstrap mbr-iconfont"></span> -->
                    </div>
                    <div class="card-box">
                        <h4 class="card-title py-3 mbr-fonts-style display-5"><strong>
                                ayocirebon.com</strong></h4>

                    </div>
                </div>

                <div class="card p-3 col-12 col-md-6 col-lg-4">
                    <div class="card-img pb-3">
                        <img class="mbr-iconfont" src="assets/logo/Purwakarta.png" style="width:96px;height:96px;" />
                        <!-- <span class="mbri-touch mbr-iconfont"></span> -->
                    </div>
                    <div class="card-box">
                        <h4 class="card-title py-3 mbr-fonts-style display-5"><strong>Ayopurwakarta.com</strong></h4>

                    </div>
                </div>

                <div class="card p-3 col-12 col-md-6 col-lg-4">
                    <div class="card-img pb-3">
                        <img class="mbr-iconfont" src="assets/logo/Semarang.png" style="width:96px;height:96px;" />
                        <!-- <span class="mbri-responsive mbr-iconfont"></span> -->
                    </div>
                    <div class="card-box">
                        <h4 class="card-title py-3 mbr-fonts-style display-5"><strong>Ayosemarang.com</strong></h4>

                    </div>
                </div>



            </div>

        </div>

    </section>

    <section class="features1 cid-r9JBH84RIy" id="features1-f">




        <div class="container">
            <div class="media-container-row">

                <div class="card p-3 col-12 col-md-6 col-lg-4">
                    <div class="card-img pb-3">
                        <img class="mbr-iconfont" src="assets/logo/Tasik.png" style="width:96px;height:96px;" />
                        <!-- <span class="mbri-bootstrap mbr-iconfont"></span> -->
                    </div>
                    <div class="card-box">
                        <h4 class="card-title py-3 mbr-fonts-style display-5"><strong>
                                Ayotasik.com</strong></h4>

                    </div>
                </div>

                <div class="card p-3 col-12 col-md-6 col-lg-4">
                    <div class="card-img pb-3">
                        <img class="mbr-iconfont" src="assets/logo/Yogyakarta.png" style="width:96px;height:96px;" />
                        <!-- <span class="mbri-touch mbr-iconfont"></span> -->
                    </div>
                    <div class="card-box">
                        <h4 class="card-title py-3 mbr-fonts-style display-5"><strong>
                                Ayoyogya.com</strong></h4>

                    </div>
                </div>

                <div class="card p-3 col-12 col-md-6 col-lg-4">
                </div>



            </div>

        </div>

    </section>

    <section class="clients cid-r7nzObqjBz mbr-parallax-background" id="clients-b">



        <div class="container mb-5">
            <div class="media-container-row">
                <div class="col-12 align-center">
                    <h2 class="mbr-section-title pb-3 mbr-fonts-style display-2"><strong>
                            Our Clients
                        </strong></h2>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="carousel slide" data-ride="carousel" role="listbox">
                <div class="carousel-inner" data-visible="6">





                    <div class="carousel-item ">
                        <div class="media-container-row">
                            <div class="col-md-12">
                                <div class="wrap-img ">
                                    <img src="assets/images/bankindonesia-240x240.jpg"
                                        class="img-responsive clients-img" alt="" title="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <div class="media-container-row">
                            <div class="col-md-12">
                                <div class="wrap-img ">
                                    <img src="assets/images/bjb-240x240.jpg" class="img-responsive clients-img" alt=""
                                        title="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <div class="media-container-row">
                            <div class="col-md-12">
                                <div class="wrap-img ">
                                    <img src="assets/images/bjbs-616x616.jpg" class="img-responsive clients-img" alt=""
                                        title="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <div class="media-container-row">
                            <div class="col-md-12">
                                <div class="wrap-img ">
                                    <img src="assets/images/dprd-616x616.jpg" class="img-responsive clients-img" alt=""
                                        title="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <div class="media-container-row">
                            <div class="col-md-12">
                                <div class="wrap-img ">
                                    <img src="assets/images/jabil-613x613.jpg" class="img-responsive clients-img" alt=""
                                        title="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <div class="media-container-row">
                            <div class="col-md-12">
                                <div class="wrap-img ">
                                    <img src="assets/images/lps-613x613.jpg" class="img-responsive clients-img" alt=""
                                        title="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <div class="media-container-row">
                            <div class="col-md-12">
                                <div class="wrap-img ">
                                    <img src="assets/images/nutrifood-613x613.jpg" class="img-responsive clients-img"
                                        alt="" title="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <div class="media-container-row">
                            <div class="col-md-12">
                                <div class="wrap-img ">
                                    <img src="assets/images/pemkabbandung-611x611.jpg"
                                        class="img-responsive clients-img" alt="" title="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <div class="media-container-row">
                            <div class="col-md-12">
                                <div class="wrap-img ">
                                    <img src="assets/images/pemkabpurwakarta-613x613.jpg"
                                        class="img-responsive clients-img" alt="" title="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <div class="media-container-row">
                            <div class="col-md-12">
                                <div class="wrap-img ">
                                    <img src="assets/images/pemkabtasik-613x613.jpg" class="img-responsive clients-img"
                                        alt="" title="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <div class="media-container-row">
                            <div class="col-md-12">
                                <div class="wrap-img ">
                                    <img src="assets/images/pemkotbandung-614x614.jpg"
                                        class="img-responsive clients-img" alt="" title="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <div class="media-container-row">
                            <div class="col-md-12">
                                <div class="wrap-img ">
                                    <img src="assets/images/pemkottasik-613x613.jpg" class="img-responsive clients-img"
                                        alt="" title="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <div class="media-container-row">
                            <div class="col-md-12">
                                <div class="wrap-img ">
                                    <img src="assets/images/pemprovjabar-614x614.jpg" class="img-responsive clients-img"
                                        alt="" title="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <div class="media-container-row">
                            <div class="col-md-12">
                                <div class="wrap-img ">
                                    <img src="assets/images/posindonesia-612x612.jpg" class="img-responsive clients-img"
                                        alt="" title="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <div class="media-container-row">
                            <div class="col-md-12">
                                <div class="wrap-img ">
                                    <img src="assets/images/ptpn8-613x613.jpg" class="img-responsive clients-img" alt=""
                                        title="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <div class="media-container-row">
                            <div class="col-md-12">
                                <div class="wrap-img ">
                                    <img src="assets/images/sumarecon-617x617.jpg" class="img-responsive clients-img"
                                        alt="" title="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <div class="media-container-row">
                            <div class="col-md-12">
                                <div class="wrap-img ">
                                    <img src="assets/images/utc-613x613.jpg" class="img-responsive clients-img" alt=""
                                        title="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <div class="media-container-row">
                            <div class="col-md-12">
                                <div class="wrap-img ">
                                    <img src="assets/images/yamaha-615x615.jpg" class="img-responsive clients-img"
                                        alt="" title="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-controls">
                    <a data-app-prevent-settings="" class="carousel-control carousel-control-prev" role="button"
                        data-slide="prev">
                        <span aria-hidden="true" class="mbri-left mbr-iconfont"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a data-app-prevent-settings="" class="carousel-control carousel-control-next" role="button"
                        data-slide="next">
                        <span aria-hidden="true" class="mbri-right mbr-iconfont"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section id="billboard-1" class="map1">
        <div class="container">
            <div class="media-container-row">
                <div class="col-md-10 align-center">
                    <div class="google-map" id="map1" style="width: 1000px; height: 700px"></div>
                </div>
            </div>
        </div>
    </section>


    <section class="cid-qTkAaeaxX5" id="footer1-2">





        <div class="container">
            <div class="media-container-row content text-white">
                <div class="col-12 col-md-3">
                    <div class="media-wrap">
                        <a href="https://mobirise.com/">
                            <img src="assets/images/logo-a-192x196.png" alt="Mobirise" title="">
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-3 mbr-fonts-style display-7">
                    <h5 class="pb-3">
                        Address
                    </h5>
                    <p class="mbr-text">Jl. Terusan Halimun No.50 Kota Bandung, 40263</p>
                </div>
                <div class="col-12 col-md-3 mbr-fonts-style display-7">
                    <h5 class="pb-3">
                        Contacts
                    </h5>
                    <p class="mbr-text">
                        Email: marketing@ayobandung.com
                        <br>Phone: 022-7351-7371
                        <br>Whatsapp: 08112069272<br>LINE: @ayobandung.com
                    </p>
                </div>
                <div class="col-12 col-md-3 mbr-fonts-style display-7">
                    <h5 class="pb-3">
                        Links
                    </h5>
                    <p class="mbr-text"><a href="http://ayobandung.com" target="_blank">ayobandung.com</a><br><a
                            href="http://ayobekasi.net" target="_blank">ayobekasi.net</a><br><a
                            href="http://ayobogor.com" target="_blank">ayobogor.com</a><br><a
                            href="http://ayocirebon.com">ayocirebon.com</a><br>
                        <a href="http://ayopurwakarta.com" target="_blank">ayopurwakarta.com</a><br><a
                            href="http://ayosemarang.com">ayosemarang.com</a><br><a href="http://ayotasik.com"
                            target="_blank">ayotasik.com</a><br><a href="http://ayoyogya.com"
                            target="_blank">ayoyogya.com</a></p>
                </div>
            </div>
            <div class="footer-lower">
                <div class="media-container-row">
                    <div class="col-sm-12">
                        <hr>
                    </div>
                </div>
                <div class="media-container-row mbr-white">
                    <div class="col-sm-6 copyright">
                        <p class="mbr-text mbr-fonts-style display-7">
                            © Copyright 2018 Ayo Media Network- All Rights Reserved
                        </p>
                    </div>
                    <div class="col-md-6">

                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <script src="{{ asset('assets/web/assets/jquery/jquery.min.js') }}"></script> --}}
    {{-- <script src="{{ asset('assets/jquery/jquery-1.8.2.js') }}"></script> --}}
    <script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
    <script src="{{ asset('assets/popper/popper.min.js') }}"></script>
    <script src="{{ asset('assets/tether/tether.min.js') }}"></script>
    <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/smoothscroll/smooth-scroll.js') }}"></script>
    <script src="{{ asset('assets/dropdown/js/script.min.js') }}"></script>
    <script src="{{ asset('assets/touchswipe/jquery.touch-swipe.min.js') }}"></script>
    <script src="{{ asset('assets/viewportchecker/jquery.viewportchecker.js') }}"></script>
    <script src="{{ asset('assets/vimeoplayer/jquery.mb.vimeo_player.js') }}"></script>
    <script src="{{ asset('assets/parallax/jarallax.min.js') }}"></script>
    <script src="{{ asset('assets/bootstrapcarouselswipe/bootstrap-carousel-swipe.js') }}"></script>
    <script src="{{ asset('assets/mbr-testimonials-slider/mbr-testimonials-slider.js') }}"></script>
    <script src="{{ asset('assets/mbr-clients-slider/mbr-clients-slider.js') }}"></script>
    <script src="{{ asset('assets/masonry/masonry.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/ytplayer/jquery.mb.ytplayer.min.js') }}"></script>
    <script src="{{ asset('assets/theme/js/script.js') }}"></script>
    <script src="{{ asset('assets/gallery/player.min.js') }}"></script>
    <script src="{{ asset('assets/gallery/script.js') }}"></script>
    <script src="{{ asset('assets/slidervideo/script.js') }}"></script>

    <link rel="stylesheet" media="all" href="{{ asset('assets/jquery/jquery-jvectormap.css') }}" />
    <!-- <script src="assets/jquery/jquery-1.8.2.js"></script> -->
    <!-- <script src="assets/jquery/jquery-3.3.1.js"></script> -->
    <script src="{{ asset('assets/jquery/jquery-jvectormap.js') }}"></script>
    <script src="{{ asset('assets/lib/jquery-mousewheel.js') }}"></script>

    <script src="{{ asset('assets/src/jvectormap.js') }}"></script>

    <script src="{{ asset('assets/src/abstract-element.js') }}"></script>
    <script src="{{ asset('assets/src/abstract-canvas-element.js') }}"></script>
    <script src="{{ asset('assets/src/abstract-shape-element.js') }}"></script>

    <script src="{{ asset('assets/src/svg-element.js') }}"></script>
    <script src="{{ asset('assets/src/svg-group-element.js') }}"></script>
    <script src="{{ asset('assets/src/svg-canvas-element.js') }}"></script>
    <script src="{{ asset('assets/src/svg-shape-element.js') }}"></script>
    <script src="{{ asset('assets/src/svg-path-element.js') }}"></script>
    <script src="{{ asset('assets/src/svg-circle-element.js') }}"></script>
    <script src="{{ asset('assets/src/svg-image-element.js') }}"></script>
    <script src="{{ asset('assets/src/svg-text-element.js') }}"></script>

    <script src="{{ asset('assets/src/vml-element.js') }}"></script>
    <script src="{{ asset('assets/src/vml-group-element.js') }}"></script>
    <script src="{{ asset('assets/src/vml-canvas-element.js') }}"></script>
    <script src="{{ asset('assets/src/vml-shape-element.js') }}"></script>
    <script src="{{ asset('assets/src/vml-path-element.js') }}"></script>
    <script src="{{ asset('assets/src/vml-circle-element.js') }}"></script>
    <script src="{{ asset('assets/src/vml-image-element.js') }}"></script>

    <script src="{{ asset('assets/src/map-object.js') }}"></script>
    <script src="{{ asset('assets/src/region.js') }}"></script>
    <script src="{{ asset('assets/src/marker.js') }}"></script>

    <script src="{{ asset('assets/src/vector-canvas.js') }}"></script>
    <script src="{{ asset('assets/src/simple-scale.js') }}"></script>
    <script src="{{ asset('assets/src/ordinal-scale.js') }}"></script>
    <script src="{{ asset('assets/src/numeric-scale.js') }}"></script>
    <script src="{{ asset('assets/src/color-scale.js') }}"></script>
    <script src="{{ asset('assets/src/legend.js') }}"></script>
    <script src="{{ asset('assets/src/data-series.js') }}"></script>
    <script src="{{ asset('assets/src/proj.js') }}"></script>
    <script src="{{ asset('assets/src/map.js') }}"></script>
    <script src="{{ asset('assets/src/jvectormap-region.js') }}"></script>

    <!-- <script src="assets/jquery-jvectormap-world-mill-en.js"></script> -->
    <script src="{{ asset('assets/jquery/jquery-asia-mill.js') }}"></script>
    <script src="{{ asset('assets/jquery/jquery-jvectormap.id.js') }}"></script>
    <script src="{{ asset('assets/jquery/indonesia-adm1.js') }}"></script>

    <script>
        jQuery.noConflict();
        jQuery(function() {
            var $ = jQuery;
            var markers_region = [

                {
                    latLng: [-7.3724822, 108.5186947],
                    desc: '<center><h1>Banjar</h1></center>',
                    style: {
                        fill: 'yellow'
                    },
                    imgsrc: 'assets/images/Banjar/Edit-1.jpg'
                }, {
                    latLng: [-6.2845348, 106.9033369],
                    desc: '<center><h1>Bekasi</h1></center>',
                    style: {
                        fill: 'yellow'
                    },
                    imgsrc: 'assets/images/Bekasi/Edit-1.jpg'
                }, {
                    latLng: [-6.2501056, 106.9965355],
                    desc: '<center><h1>Bekasi(Mayor Madmuin)</h1></center>',
                    style: {
                        fill: 'yellow'
                    },
                    imgsrc: 'assets/images/Bekasi_(Mayor Madmuin)/Edit-1.jpg'
                }, {
                    latLng: [-6.5951886, 106.721852],
                    desc: '<center><h1>Bogor</h1></center>',
                    style: {
                        fill: 'yellow'
                    },
                    imgsrc: 'assets/images/Bogor/Edit-1.jpg'
                }, {
                    latLng: [-7.3112829, 108.30654],
                    desc: '<center><h1>Ciamis</h1></center>',
                    style: {
                        fill: 'yellow'
                    },
                    imgsrc: 'assets/images/Ciamis/Edit-1.jpg'
                }, {
                    latLng: [-7.3267074, 108.3505916],
                    desc: '<center><h1>Ciamis(Alun-alun)</h1></center>',
                    style: {
                        fill: 'yellow'
                    },
                    imgsrc: 'assets/images/Ciamis_(Alun-alun)/Edit-1.jpg'
                }, {
                    latLng: [-7.0532956, 106.8502567],
                    desc: '<center><h1>Cianjur</h1></center>',
                    style: {
                        fill: 'yellow'
                    },
                    imgsrc: 'assets/images/Cianjur/Edit-1.jpg'
                }, {
                    latLng: [-6.9071109, 107.5505683],
                    desc: '<center><h1>Cibeureum</h1></center>',
                    style: {
                        fill: 'yellow'
                    },
                    imgsrc: 'assets/images/Cibeureum/Edit-1.jpg'
                }, {
                    latLng: [-6.4034242, 107.4193335],
                    desc: '<center><h1>Cikampek</h1></center>',
                    style: {
                        fill: 'yellow'
                    },
                    imgsrc: 'assets/images/Cikampek/Edit-1.jpg'
                }, {
                    latLng: [-6.8664635, 107.5021726],
                    desc: '<center><h1>Cimareme</h1></center>',
                    style: {
                        fill: 'yellow'
                    },
                    imgsrc: 'assets/images/Cimareme/Edit-1.jpg'
                }, {
                    latLng: [-6.8933103, 107.556496],
                    desc: '<center><h1>Cimindi Cimahi</h1></center>',
                    style: {
                        fill: 'yellow'
                    },
                    imgsrc: 'assets/images/Cimindi_Cimahi/Edit-1.jpg'
                }, {
                    latLng: [-6.9150016, 107.7067704],
                    desc: '<center><h1>Cinunuk</h1></center>',
                    style: {
                        fill: 'yellow'
                    },
                    imgsrc: 'assets/images/Cinunuk/Edit-1.jpg'
                }, {
                    latLng: [-6.7695024, 108.5199407],
                    desc: '<center><h1>Cirebon(Ciperna)</h1></center>',
                    style: {
                        fill: 'yellow'
                    },
                    imgsrc: 'assets/images/Cirebon_(Ciperna)/Edit-1.jpg'
                }, {
                    latLng: [-6.7110074, 108.539389],
                    desc: '<center><h1>Cirebon(Tuparev)</h1></center>',
                    style: {
                        fill: 'yellow'
                    },
                    imgsrc: 'assets/images/Cirebon_Tuparev/Edit-1.jpg'
                }, {
                    latLng: [-6.3903877, 106.8088527],
                    desc: '<center><h1>Depok Kantor PWI</h1></center>',
                    style: {
                        fill: 'yellow'
                    },
                    imgsrc: 'assets/images/Depan Kantor PWI/Edit-1.jpg'
                }, {
                    latLng: [-6.3878474, 106.782778],
                    desc: '<center><h1>Depok</h1></center>',
                    style: {
                        fill: 'yellow'
                    },
                    imgsrc: 'assets/images/Depok/Edit-1.jpg'
                }, {
                    latLng: [-7.2101551, 107.8865619],
                    desc: '<center><h1>Garut(Jl Pembangunan)</h1></center>',
                    style: {
                        fill: 'yellow'
                    },
                    imgsrc: 'assets/images/Garut_(Jl Pembangunan)/Edit-1.jpg'
                }, {
                    latLng: [-7.194729, 107.8907258],
                    desc: '<center><h1>Garut(Terogong)</h1></center>',
                    style: {
                        fill: 'yellow'
                    },
                    imgsrc: 'assets/images/Garut_Tarogong/Edit-1.jpg'
                }, {
                    latLng: [-6.4517638, 108.0546836],
                    desc: '<center><h1>Indramayu</h1></center>',
                    style: {
                        fill: 'yellow'
                    },
                    imgsrc: 'assets/images/Indramayu/Edit-1.jpg'
                }, {
                    latLng: [-6.7549677, 108.1581284],
                    desc: '<center><h1>Kadipaten</h1></center>',
                    style: {
                        fill: 'yellow'
                    },
                    imgsrc: 'assets/images/Kadipaten/Edit-1.jpg'
                }, {
                    latLng: [-6.7548874, 107.8954511],
                    desc: '<center><h1>Karawang(Mega Mall)</h1></center>',
                    style: {
                        fill: 'yellow'
                    },
                    imgsrc: 'assets/images/Karawang (Mega Mall)/Edit-1.jpg'
                }, {
                    latLng: [-6.9731222, 107.5406375],
                    desc: '<center><h1>Kopo</h1></center>',
                    style: {
                        fill: 'yellow'
                    },
                    imgsrc: 'assets/images/Kopo/Edit-1.jpg'
                }, {
                    latLng: [-6.8102501, 107.6227387],
                    desc: '<center><h1>Lembang</h1></center>',
                    style: {
                        fill: 'yellow'
                    },
                    imgsrc: 'assets/images/Lembang/Edit-1.jpg'
                }, {
                    latLng: [-6.9398807, 107.6043465],
                    desc: '<center><h1>Moch Toha</h1></center>',
                    style: {
                        fill: 'yellow'
                    },
                    imgsrc: 'assets/images/M_Toha/Edit-1.jpg'
                }, {
                    latLng: [-6.841368, 108.2539097],
                    desc: '<center><h1>Majalengka</h1></center>',
                    style: {
                        fill: 'yellow'
                    },
                    imgsrc: 'assets/images/Majalengka/Edit-1.jpg'
                }, {
                    latLng: [-6.2841269, 107.6808522],
                    desc: '<center><h1>Pamanukan</h1></center>',
                    imgsrc: 'assets/images/Pamanukan/Edit-1.jpg',
                    style: {
                        fill: 'yellow'
                    }
                }, {
                    latLng: [-6.6858488, 106.953417],
                    desc: '<center><h1>Puncak Bogor</h1></center>',
                    style: {
                        fill: 'yellow'
                    },
                    imgsrc: 'assets/images/Puncak Bogor/Edit-1.jpg'
                }, {
                    latLng: [-6.3486951, 106.2321422],
                    desc: '<center><h1>RangkasBitung</h1></center>',
                    style: {
                        fill: 'yellow'
                    },
                    imgsrc: 'assets/images/Rangkasbitung/Edit-1.jpg'
                }, {
                    latLng: [-6.882686, 107.6000798],
                    desc: '<center><h1>Setiabudhi</h1></center>',
                    style: {
                        fill: 'yellow'
                    },
                    imgsrc: 'assets/images/Setiabudhi/Edit-1.jpg'
                }, {
                    latLng: [-6.9475327, 107.5950839],
                    desc: '<center><h1>Soekarno Hatta Leuwi Panjang</h1></center>',
                    style: {
                        fill: 'yellow'
                    },
                    imgsrc: 'assets/images/Soekarno_hatta-Leuwi_Panjang/Edit-1.jpg'
                }, {
                    latLng: [-7.0195878, 107.5398106],
                    desc: '<center><h1>Soreang</h1></center>',
                    style: {
                        fill: 'yellow'
                    },
                    imgsrc: 'assets/images/Soreang/Edit-1.jpg'
                }, {
                    latLng: [-6.558962, 107.7687463],
                    desc: '<center><h1>Subang</h1></center>',
                    style: {
                        fill: 'yellow'
                    },
                    imgsrc: 'assets/images/Subang/Edit-1.jpg'
                }, {
                    latLng: [-6.9206519, 106.9296916],
                    desc: '<center><h1>Sukabumi</h1></center>',
                    style: {
                        fill: 'yellow'
                    },
                    imgsrc: 'assets/images/Sukabumi/Edit-1.jpg'
                }, {
                    latLng: [-6.7655942, 106.8024505],
                    desc: '<center><h1>Sukabumi(Sukaraja)</h1></center>',
                    style: {
                        fill: 'yellow'
                    },
                    imgsrc: 'assets/images/Sukabumi_(Sukaraja)/Edit-1.jpg'
                }, {
                    latLng: [-6.835366, 107.9296167],
                    desc: '<center><h1>Sumedang</h1></center>',
                    style: {
                        fill: 'yellow'
                    },
                    imgsrc: 'assets/images/Sumedang/Edit-1.jpg'
                }, {
                    latLng: [-6.8811767, 107.5795791],
                    desc: '<center><h1>Bandung(Surya Sumantri)</h1></center>',
                    style: {
                        fill: 'yellow'
                    },
                    imgsrc: 'assets/images/Surya_sumantri_(Bandung)/Edit-1.jpg'
                }, {
                    latLng: [-7.3486348, 108.2172145],
                    desc: '<center><h1>Tasik(HZ Mustofa)</h1></center>',
                    style: {
                        fill: 'yellow'
                    },
                    imgsrc: 'assets/images/Tasik (HZ Mustofa)/Edit-1.jpg'
                },







            ];

            // $('#focus-single').click(function(){
            //   $('#map1').vectorMap('set', 'focus', {region: 'ID', animate: true});
            // });
            // $('#focus-multiple').click(function(){
            //   $('#map1').vectorMap('set', 'focus', {regions: ['JP'], animate: true});
            // });
            // $('#focus-coords').click(function(){
            //   $('#map1').vectorMap('set', 'focus', {scale: 7, lat: -2.4153217, lng: 108.8507662, animate: true});
            // });
            // $('#focus-init').click(function(){
            //   $('#map1').vectorMap('set', 'focus', {scale: 1, x: 0.5, y: 0.5, animate: true});
            // });
            $('#map1').vectorMap({
                map: 'indonesia-adm1_merc',
                markers: markers_region,
                onMarkerTipShow: function(e, el, code) {
                    var markers = $('#map1').vectorMap('get', 'mapObject').markers;
                    el.html(el.html() + '<img style="width: 400px; height: 400px" src="' +
                        markers[code].config.imgsrc +
                        '"/><br/>' + markers[code].config.desc).css("fontSize", "15px");
                },
                panOnDrag: true,
                // focusOn: {
                //   x: 0.5,
                //   y: 0.5,
                //   scale: 2,
                //   animate: false
                // },
            });
            // $('#map1').vectorMap('set', 'focus', {region: 'ID', animate: true});
        })
    </script>


    <div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i></i></a></div>
    <input name="animation" type="hidden">

</body>

</html>
