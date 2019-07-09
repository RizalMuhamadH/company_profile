<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ayo Media Network</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/anwal/css/bootstrap.css') }}">
    <!-- Fonts -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&subset=devanagari,latin-ext" rel="stylesheet">  -->
    <link rel="stylesheet" href="{{ asset('assets/anwal/fonts/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/anwal/fonts/IcoMoon/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/anwal/fonts/linearicon/style.css') }}">
    <!-- Mobile Menu -->
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/anwal/css/jquery.mmenu.all.css') }}" />
    <!-- OWL CAROUSEL
			================================================== -->
    <link rel="stylesheet" href="{{ asset('assets/anwal/css/owl.carousel.css') }}">
    <!-- SELECTBOX
			================================================== -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/anwal/css/fancySelect.css') }}" media="screen" />
    <!-- REVOLUTION STYLE SHEETS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/anwal/revolution/css/settings.css') }}">
    <!-- REVOLUTION LAYERS STYLES -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/anwal/revolution/css/layers.css') }}">
    <!-- REVOLUTION NAVIGATION STYLES -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/anwal/revolution/css/navigation.css') }}">
    <!-- Main Style -->
    <link rel="stylesheet" href="{{ asset('assets/anwal/style.css') }}">

    <!-- Favicons
			================================================== -->
    <link rel="shortcut icon" href="{{ asset('assets/images/logo-a-122x125.png') }}">
</head>

<body class="royal_loader">
    <!-- royal_loader -->
    <div id="page">
        <!-- Mobile Menu -->
        <nav id="menu">
            <ul>
                <li>
                    <a href="#home">{{ __('messages.menu_home') }}</a>
                </li>
                <li><a href="#about_us">{{ __('messages.menu_about') }}</a>
                </li>
                <li>
                    <a href="#portal">{{ __('messages.menu_news') }}</a>
                </li>
                <li>
                    <a href="#service">{{ __('messages.menu_service') }}</a>
                </li>
                <li>
                    <a href="#client">{{ __('messages.menu_client') }}</a>
                </li>
                <li>
                    <a href="#founder">{{ __('messages.menu_founder') }}</a>
                </li>

                <li>
                    <a href="#news">{{ __('messages.menu_article') }}</a>
                </li>
                <li>
                    <a href="#billboard">{{ __('messages.menu_billboard') }}</a>
                </li>
                <li><a href="#contact">{{ __('messages.menu_contact') }}</a></li>
                <li><a href="#contact">{{ __('messages.language') }}</a>
                    <ul>
                        <li><a href="{{ url('locale/en') }}">{{ __('messages.english') }}</a></li>
                        <li><a href="{{ url('locale/id') }}">{{ __('messages.indonesian') }}</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /Mobile Menu -->
        <header class="header-1-fix">
            <div class="topbar tb-transparent tb-md">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="topbar-home1">
                                <div class="tb-contact tb-oneline">
                                    <ul>
                                        <li><a href="https://www.google.co.id/maps/place/Jl.+Terusan+Halimun+No.50,+Lkr.+Sel.,+Kec.+Lengkong,+Kota+Bandung,+Jawa+Barat+40263" target="_blank"><i class="fa fa-map-marker" aria-hidden="true"></i>
                                                Jl. Terusan Halimun No. 50 Bandung</a></li>
                                        <li><a href="mailto:admin@amwal.com"><i class="fa fa-envelope"
                                                    aria-hidden="true"></i> info@ayomedia.com</a></li>
                                        <li><a href="tel:+622273517371"><i class="fa fa-phone" aria-hidden="true"></i>
                                                +62 (22) 73517371</a></li>
                                    </ul>
                                </div>
                                <div class="tb-social-lan language">
                                    <ul>
                                        <li><a href="#" data-toggle="tooltip" data-placement="bottom"
                                                title="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        </li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="bottom" title="twitter"><i
                                                    class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="bottom"
                                                title="google plus"><i class="fa fa-google-plus"
                                                    aria-hidden="true"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="bottom" title="youtube"><i
                                                    class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /topbar -->
            <div class="nav-warp nav-warp-h1">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="navi-warp-home-1">
                                <a href="index.html" class="logo"><img
                                        src="{{ asset('assets/images/logo-a-122x125.png') }}" class="img-responsive"
                                        height="35" width="35" alt="Image"></a>
                                <a href="#menu" class="btn-menu-mobile"><i class="fa fa-bars"
                                        aria-hidden="true"></i></a>
                                {{-- <ul class="subnavi">
                                    <li><a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                                    <li>
                                        <a class="btn-search-navi" href="#/"><i class="fa fa-search"
                                                aria-hidden="true"></i></a>
                                        <div class="search-popup">
                                            <form class="form-search-navi">
                                                <div class="input-group">
                                                    <input class="form-control" placeholder="Search Here" type="text">
                                                </div>
                                                <!-- /input-group -->
                                            </form>
                                        </div>
                                    </li>
                                </ul> --}}
                                <nav>
                                    <ul class="navi-level-1 active-subcolor">
                                        <li>
                                            <a href="#home">{{ __('messages.menu_home') }}</a>
                                        </li>
                                        <li><a href="#about_us">{{ __('messages.menu_about') }}</a>
                                        </li>
                                        <li>
                                            <a href="#portal">{{ __('messages.menu_news') }}</a>
                                        </li>
                                        <li>
                                            <a href="#service">{{ __('messages.menu_service') }}</a>
                                        </li>
                                        <li>
                                            <a href="#client">{{ __('messages.menu_client') }}</a>
                                        </li>
                                        <li>
                                            <a href="#founder">{{ __('messages.menu_founder') }}</a>
                                        </li>

                                        <li>
                                            <a href="#news">{{ __('messages.menu_article') }}</a>
                                        </li>
                                        <li>
                                            <a href="#billboard">{{ __('messages.menu_billboard') }}</a>
                                        </li>
                                        <li><a href="#contact">{{ __('messages.menu_contact') }}</a></li>
                                        <li><a href="#contact">{{ __('messages.language') }}</a>
                                            <ul class="navi-level-2">
                                                <li><a href="{{ url('locale/en') }}">{{ __('messages.english') }}</a>
                                                </li>
                                                <li><a href="{{ url('locale/id') }}">{{ __('messages.indonesian') }}</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /nav -->
        </header>
        <!-- /End Header 1 Warp -->
        <!-- Slider -->
        <section id="home" class="no-padding">
            <div id="slide_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container">
                <!-- START REVOLUTION SLIDER 5.0.7 auto mode -->
                <div id="slider_1" class="rev_slider fullwidthabanner slider-home1" style="display:none;"
                    data-version="5.0.7">
                    <ul>
                        <!-- SLIDE  -->
                        <li data-title="FOCUS ON">
                            <!-- MAIN IMAGE -->
                            <img src="{{ asset('assets/anwal/images/Slider/home1/1.jpg') }}" alt=""
                                data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat"
                                class="rev-slidebg" data-no-retina>
                            <!-- LAYERS -->
                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption tp-resizeme sl-s1" data-x="center" data-hoffset="" data-y="center"
                                data-voffset="-50" data-width="['auto','auto','480','320']" data-transform_idle="o:1;"
                                data-whitespace="['nowrap','nowrap','nowrap','normal']"
                                data-fontsize="['21','21','21','16']"
                                data-transform_in="y:-100px;opacity:0;s:1500;e:Power3.easeOut;"
                                data-transform_out="y:-100;opacity:0;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                                data-start="1000">
                                <p>{{ __('messages.title') }}</p>
                            </div>
                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption tp-resizeme sl-s2" data-x="center" data-hoffset="" data-y="center"
                                data-voffset="30" data-width="['auto','auto','480','320']" data-transform_idle="o:1;"
                                data-transform_in="y:100px;opacity:0;s:1500;e:Power3.easeOut;"
                                data-transform_out="y:100px;opacity:0;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                                data-start="1300" data-whitespace="['nowrap','nowrap','nowrap','normal']"
                                data-fontsize="['60','50','40','30']" data-lineheight="['auto','auto','auto','40']">
                                <p>{{ __('messages.sub_title') }}</p>
                            </div>
                            <!-- LAYER NR. 3 -->
                            {{-- <div class="tp-caption tp-resizeme sl-s3" data-x="center" data-hoffset="" data-y="center"
                                data-voffset="120" data-width="['570','480','480','320']" data-transform_idle="o:1;"
                                data-whitespace="normal" data-transform_in="y:100px;opacity:0;s:1500;e:Power3.easeOut;"
                                data-transform_out="y:100px;opacity:0;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                                data-start="1600" data-fontsize="['16','16','14','12']">
                                <p style="text-align: center;">Moving forward you will be paired with a highly vetted,
                                    professional awal bookkeeper who will get to know.</p>
                            </div> --}}
                            <!-- LAYER NR. 4 -->
                            {{-- <div class="tp-caption" data-x="center" data-hoffset="[-70,-70,-70,-90]" data-y="bottom"
                                data-voffset="147" data-transform_idle="o:1;"
                                data-transform_in="x:-50px;opacity:0;s:1000;e:Power3.easeOut;"
                                data-transform_out="x:-50px;opacity:0;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                                data-start="2000"><a href="#" class="sl-btn-1">Learn More</a>
                            </div> --}}
                            <!-- LAYER NR. 5 -->
                            {{-- <div class="tp-caption" data-x="center" data-hoffset="[70,70,70,90]" data-y="bottom"
                                data-voffset="147" data-transform_idle="o:1;"
                                data-transform_in="x:50px;opacity:0;s:1000;e:Power3.easeOut;"
                                data-transform_out="x:50px;opacity:0;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                                data-start="2000"><a href="#" class="sl-btn-2">Get a Quote</a>
                            </div> --}}
                        </li>
                        <!-- SLIDE  -->
                        <li data-title="FINANCE PLAN">
                            <!-- MAIN IMAGE -->
                            <img src="{{ asset('assets/anwal/images/Slider/home1/2.jpg') }}" alt=""
                                data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat"
                                class="rev-slidebg" data-no-retina>
                            <!-- LAYERS -->
                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption tp-resizeme sl-s1" data-x="center" data-hoffset="" data-y="center"
                                data-voffset="-50" data-width="['auto','auto','480','320']" data-transform_idle="o:1;"
                                data-whitespace="['nowrap','nowrap','nowrap','normal']"
                                data-fontsize="['21','21','21','16']"
                                data-transform_in="y:-100px;opacity:0;s:1500;e:Power3.easeOut;"
                                data-transform_out="y:-100;opacity:0;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                                data-start="1000">
                                <p>{{ __('messages.title') }}</p>
                            </div>
                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption tp-resizeme sl-s2" data-x="center" data-hoffset="" data-y="center"
                                data-voffset="30" data-width="['auto','auto','480','320']" data-transform_idle="o:1;"
                                data-transform_in="y:100px;opacity:0;s:1500;e:Power3.easeOut;"
                                data-transform_out="y:100px;opacity:0;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                                data-start="1300" data-whitespace="['nowrap','nowrap','nowrap','normal']"
                                data-fontsize="['60','50','40','30']" data-lineheight="['auto','auto','auto','40']">
                                <p>{{ __('messages.sub_title') }}</p>
                            </div>
                            <!-- LAYER NR. 3 -->
                            {{-- <div class="tp-caption tp-resizeme sl-s3" data-x="center" data-hoffset="" data-y="center"
                                data-voffset="120" data-width="['570','480','480','320']" data-transform_idle="o:1;"
                                data-whitespace="normal" data-transform_in="y:100px;opacity:0;s:1500;e:Power3.easeOut;"
                                data-transform_out="y:100px;opacity:0;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                                data-start="1600" data-fontsize="['16','16','14','12']">
                                <p style="text-align: center;">Moving forward you will be paired with a highly vetted,
                                    professional awal bookkeeper who will get to know.</p>
                            </div> --}}
                            <!-- LAYER NR. 4 -->
                            {{-- <div class="tp-caption" data-x="center" data-hoffset="-70" data-y="bottom"
                                data-voffset="147" data-transform_idle="o:1;"
                                data-transform_in="x:-50px;opacity:0;s:1000;e:Power3.easeOut;"
                                data-transform_out="x:-50px;opacity:0;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                                data-start="2000"><a href="#" class="sl-btn-1">Learn More</a>
                            </div> --}}
                            <!-- LAYER NR. 5 -->
                            {{-- <div class="tp-caption" data-x="center" data-hoffset="70" data-y="bottom" data-voffset="147"
                                data-transform_idle="o:1;" data-transform_in="x:50px;opacity:0;s:1000;e:Power3.easeOut;"
                                data-transform_out="x:50px;opacity:0;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                                data-start="2000"><a href="#" class="sl-btn-2">Get a Quote</a>
                            </div> --}}
                        </li>
                        <!-- SLIDE  -->
                        <li data-title="MOVING FORWARD">
                            <!-- MAIN IMAGE -->
                            <img src="{{ asset('assets/anwal/images/Slider/home1/3.jpg') }}" alt=""
                                data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat"
                                class="rev-slidebg" data-no-retina>
                            <!-- LAYERS -->
                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption tp-resizeme sl-s1" data-x="center" data-hoffset="" data-y="center"
                                data-voffset="-50" data-width="['auto','auto','480','320']" data-transform_idle="o:1;"
                                data-whitespace="['nowrap','nowrap','nowrap','normal']"
                                data-fontsize="['21','21','21','16']"
                                data-transform_in="y:-100px;opacity:0;s:1500;e:Power3.easeOut;"
                                data-transform_out="y:-100;opacity:0;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                                data-start="1000">
                                <p>{{ __('messages.title') }}</p>
                            </div>
                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption tp-resizeme sl-s2" data-x="center" data-hoffset="" data-y="center"
                                data-voffset="30" data-width="['auto','auto','480','320']" data-transform_idle="o:1;"
                                data-transform_in="y:100px;opacity:0;s:1500;e:Power3.easeOut;"
                                data-transform_out="y:100px;opacity:0;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                                data-start="1300" data-whitespace="['nowrap','nowrap','nowrap','normal']"
                                data-fontsize="['60','50','40','30']" data-lineheight="['auto','auto','auto','40']">
                                <p>{{ __('messages.sub_title') }}</p>
                            </div>
                            <!-- LAYER NR. 3 -->
                            {{-- <div class="tp-caption tp-resizeme sl-s3" data-x="center" data-hoffset="" data-y="center"
                                data-voffset="120" data-width="['570','480','480','320']" data-transform_idle="o:1;"
                                data-whitespace="normal" data-transform_in="y:100px;opacity:0;s:1500;e:Power3.easeOut;"
                                data-transform_out="y:100px;opacity:0;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                                data-start="1600" data-fontsize="['16','16','14','12']">
                                <p style="text-align: center;">Moving forward you will be paired with a highly vetted,
                                    professional awal bookkeeper who will get to know.</p>
                            </div> --}}
                            <!-- LAYER NR. 4 -->
                            {{-- <div class="tp-caption" data-x="center" data-hoffset="-70" data-y="bottom"
                                data-voffset="147" data-transform_idle="o:1;"
                                data-transform_in="x:-50px;opacity:0;s:1000;e:Power3.easeOut;"
                                data-transform_out="x:-50px;opacity:0;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                                data-start="2000"><a href="#" class="sl-btn-1">Learn More</a>
                            </div> --}}
                            <!-- LAYER NR. 5 -->
                            {{-- <div class="tp-caption" data-x="center" data-hoffset="70" data-y="bottom" data-voffset="147"
                                data-transform_idle="o:1;" data-transform_in="x:50px;opacity:0;s:1000;e:Power3.easeOut;"
                                data-transform_out="x:50px;opacity:0;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                                data-start="2000"><a href="#" class="sl-btn-2">Get a Quote</a>
                            </div> --}}
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- /Slider -->

        <section id="about_us" class="about-h1">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="demo-about-h1">
                            <div class="col-md-6">
                                <div class="left-about-h1">
                                    <div class="title-block">
                                        <span class="top-title"></span>
                                        <h2>{{ __('messages.menu_about') }}</h2>
                                        {{-- <p class="sub-title">As always, partners grows with you!</p> --}}
                                        <span class="bottom-title"></span>
                                    </div>
                                    <div class="iconbox-warp ">
                                        <p class="demo-sub-about-text">{{ __('messages.ayo_is') }}</p>
                                        <div class="title-block text-center title-pd" id="portal">
                                            <span class="top-title "></span>
                                            <h2>{{ __('messages.menu_news') }}</h2>
                                            {{-- <p class="sub-title">As always, partners grows with you!</p> --}}
                                            <span class="bottom-title"></span>
                                        </div>
                                        <div class="col-md-3 col-sm-6">
                                            <div class="text-center">
                                                <a href="#"><img src="{{ asset('assets/logo/Bandung.png') }}"
                                                        class="img-responsive partner-img" alt="Image"></a>
                                                <p>ayobandung.com</p>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6">
                                            <div class="text-center">
                                                <a href="#"><img src="{{ asset('assets/logo/Bekasi.png') }}"
                                                        class="img-responsive partner-img" alt="Image"></a>
                                                <p>ayobekasi.net</p>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6">
                                            <div class="text-center">
                                                <a href="#"><img src="{{ asset('assets/logo/Bogor.png') }}"
                                                        class="img-responsive partner-img" alt="Image"></a>
                                                <p>ayobogor.com</p>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6">
                                            <div class="text-center">
                                                <a href="#"><img src="{{ asset('assets/logo/Cirebon.png') }}"
                                                        class="img-responsive partner-img" alt="Image"></a>
                                                <p>ayocirebon.com</p>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6">
                                            <div class="text-center">
                                                <a href="#"><img src="{{ asset('assets/logo/Jakarta.png') }}"
                                                        class="img-responsive partner-img" alt="Image"></a>
                                                <p>ayojakarta.com</p>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6">
                                            <div class="text-center">
                                                <a href="#"><img src="{{ asset('assets/logo/Purwakarta.png') }}"
                                                        class="img-responsive partner-img" alt="Image"></a>
                                                <p>ayopurwakarta.com</p>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6">
                                            <div class="text-center">
                                                <a href="#"><img src="{{ asset('assets/logo/Semarang.png') }}"
                                                        class="img-responsive partner-img" alt="Image"></a>
                                                <p>ayosemarang.com</p>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6">
                                            <div class="text-center">
                                                <a href="#"><img src="{{ asset('assets/logo/Surabaya.png') }}"
                                                        class="img-responsive partner-img" alt="Image"></a>
                                                <p>ayosurabaya.com</p>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6">
                                            <div class="text-center">
                                                <a href="#"><img src="{{ asset('assets/logo/Tasik.png') }}"
                                                        class="img-responsive partner-img" alt="Image"></a>
                                                <p>ayotasik.com</p>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6">
                                            <div class="text-center">
                                                <a href="#"><img src="{{ asset('assets/logo/Yogyakarta.png') }}"
                                                        class="img-responsive partner-img" alt="Image"></a>
                                                <p>ayoyogya.com</p>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6">
                                            <div class="text-center">
                                                <a href="#"><img src="{{ asset('assets/logo/Bandung.png') }}"
                                                        class="img-responsive partner-img" alt="Image"></a>
                                                <p>ayobatang.com</p>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6">
                                            <div class="text-center">
                                                <a href="#"><img src="{{ asset('assets/logo/Bandung.png') }}"
                                                        class="img-responsive partner-img" alt="Image"></a>
                                                <p>ayotegal.com</p>
                                            </div>
                                        </div>

                                        {{-- <div class="iconbox">
                                            <span class="icon icon-briefcase"></span>
                                            <p>Experienced</p>
                                            <p>Lorem ipsum dolor sit , consectet adipisi elit, sed do eiusmod tempor for
                                                enim adesg ens minim veniam.</p>
                                        </div>
                                        <div class="iconbox">
                                            <span class="icon icon-library"></span>
                                            <p>Vibrant</p>
                                            <p>Lorem ipsum dolor sit , consectet adipisi elit, sed do eiusmod tempor for
                                                enim adesg ens minim veniam.</p>
                                        </div>
                                        <div class="iconbox">
                                            <span class="icon icon-user-tie"></span>
                                            <p>Personality</p>
                                            <p>Lorem ipsum dolor sit , consectet adipisi elit, sed do eiusmod tempor for
                                                enim adesg ens minim veniam.</p>
                                        </div> --}}

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="right-about-h1">
                                    <img src="{{ asset('assets/anwal/images/About/1.jpg') }}" class="img-responsive"
                                        alt="Image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /about -->

        {{-- <section class="no-padding bg-counter-h1">
            <div class="container">
                <div class="row">
                    <div class="warp-counter">
                        <div class="col-md-3 col-sm-6">
                            <div class="counter-inline">
                                <span class="icon icon-stats-bars"></span>
                                <span class="counter">460</span>
                                <p>Cases completed</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="counter-inline">
                                <span class="icon icon-users"></span>
                                <span class="counter">29</span>
                                <p>Consultants</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="counter-inline">
                                <span class="icon icon-trophy"></span>
                                <span class="counter">18</span>
                                <p>Awards winning</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="counter-inline">
                                <span class="icon icon-library"></span>
                                <span class="counter">50</span>
                                <p>Years of Experiences</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- couterup -->

        {{-- <section class="no-padding" id="portal">
            <div class="container">
                <div class="row">
                    <div class="title-block text-center title-pd">
                        <span class="top-title "></span>
                        <h2>{{ __('messages.menu_news') }}</h2>
        <p class="sub-title">As always, partners grows with you!</p>
        <span class="bottom-title"></span>
    </div>
    <div class="partner-warp-h1">
        <div class="col-md-1 col-sm-1">
            <div class="text-center">
                <a href="#"><img src="{{ asset('assets/logo/Bandung.png') }}" class="img-responsive partner-img"
                        alt="Image"></a>
                <p>ayobandung.com</p>
            </div>
        </div>
        <div class="col-md-1 col-sm-1">
            <div class="text-center">
                <a href="#"><img src="{{ asset('assets/logo/Bekasi.png') }}" class="img-responsive partner-img"
                        alt="Image"></a>
                <p>ayobekasi.net</p>
                <p>Lorem ipsum dolor sit , consectet adipisi elit, sed do eiusmod tempor for
                    enim adesg ens minim veniam.</p>
            </div>
        </div>
        <div class="col-md-1 col-sm-1">
            <div class="text-center">
                <a href="#"><img src="{{ asset('assets/logo/Bogor.png') }}" class="img-responsive partner-img"
                        alt="Image"></a>
                <p>ayobogor.com</p>
            </div>
        </div>
        <div class="col-md-1 col-sm-1">
            <div class="text-center">
                <a href="#"><img src="{{ asset('assets/logo/Cirebon.png') }}" class="img-responsive partner-img"
                        alt="Image"></a>
                <p>ayocirebon.com</p>
                <p>Lorem ipsum dolor sit , consectet adipisi elit, sed do eiusmod tempor for
                    enim adesg ens minim veniam.</p>
            </div>
        </div>
        <div class="col-md-1 col-sm-1">
            <div class="text-center">
                <a href="#"><img src="{{ asset('assets/logo/Jakarta.png') }}" class="img-responsive partner-img"
                        alt="Image"></a>
                <p>ayojakarta.com</p>
            </div>
        </div>
        <div class="col-md-1 col-sm-1">
            <div class="text-center">
                <a href="#"><img src="{{ asset('assets/logo/Purwakarta.png') }}" class="img-responsive partner-img"
                        alt="Image"></a>
                <p>ayopurwakarta.com</p>
                <p>Lorem ipsum dolor sit , consectet adipisi elit, sed do eiusmod tempor for
                    enim adesg ens minim veniam.</p>
            </div>
        </div>
        <div class="col-md-1 col-sm-1">
            <div class="text-center">
                <a href="#"><img src="{{ asset('assets/logo/Semarang.png') }}" class="img-responsive partner-img"
                        alt="Image"></a>
                <p>ayosemarang.com</p>
            </div>
        </div>
        <div class="col-md-1 col-sm-1">
            <div class="text-center">
                <a href="#"><img src="{{ asset('assets/logo/Surabaya.png') }}" class="img-responsive partner-img"
                        alt="Image"></a>
                <p>ayosurabaya.com</p>
                <p>Lorem ipsum dolor sit , consectet adipisi elit, sed do eiusmod tempor for
                    enim adesg ens minim veniam.</p>
            </div>
        </div>
        <div class="col-md-1 col-sm-1">
            <div class="text-center">
                <a href="#"><img src="{{ asset('assets/logo/Tasik.png') }}" class="img-responsive partner-img"
                        alt="Image"></a>
                <p>ayotasik.com</p>
            </div>
        </div>
    </div>
    </div>
    </div>
    </section> --}}
    <!-- /portal news -->

    <section id="service" class="no-padding services-h1">
        <div class="warp-full-width bg-theme">
            <div class="title-block text-center title-on-dark title-pd">
                <span class="top-title "></span>
                <h2>{{ __('messages.menu_service') }}</h2>
                {{-- <p class="sub-title">As always, partners grows with you!</p> --}}
                <span class="bottom-title"></span>
            </div>
        </div>

        <div class="warp-full-width services-h1-warp">
            <div id="services-h1" class="owl-services-h1">
                <div class="item-services">
                    <div class="iconbox-type-sm  text-center">
                        <span class="lnr lnr-pie-chart"></span>
                        <h4>{{ __('messages.title_social_media_analysis') }}</h4>
                        <p>{{ __('messages.sub_social_media_analysis') }}</p>
                        {{-- <a href="#" class="ot-btn btn-border-main-color">Learn More</a> --}}
                    </div>
                </div>
                <div class="item-services">
                    <div class="iconbox-type-sm text-center">
                        <span class="lnr lnr-calendar-full"></span>
                        <h4>{{ __('messages.title_social_media_monitoring') }}</h4>
                        <p>{{ __('messages.sub_social_media_monitoring') }}</p>
                        {{-- <a href="#" class="ot-btn btn-border-main-color">Learn More</a> --}}
                    </div>
                </div>
                <div class="item-services">
                    <div class="iconbox-type-sm text-center">
                        <span class="lnr lnr-briefcase"></span>
                        <h4>{{ __('messages.title_buzzer_management') }}</h4>
                        <p>{{ __('messages.sub_buzzer_management') }}</p>
                        {{-- <a href="#" class="ot-btn btn-border-main-color">Learn More</a> --}}
                    </div>
                </div>
                <div class="item-services">
                    <div class="iconbox-type-sm text-center">
                        <span class="lnr lnr-layers"></span>
                        <h4>{{ __('messages.title_brand_content') }}</h4>
                        <p>{{ __('messages.sub_brand_content') }}</p>
                        {{-- <a href="#" class="ot-btn btn-border-main-color">Learn More</a> --}}
                    </div>
                </div>
                <div class="item-services">
                    <div class="iconbox-type-sm text-center">
                        <span class="lnr lnr-pie-chart"></span>
                        <h4>{{ __('messages.title_native_ads') }}</h4>
                        <p>{{ __('messages.sub_native_ads') }}</p>
                        {{-- <a href="#" class="ot-btn btn-border-main-color">Learn More</a> --}}
                    </div>
                </div>
                <div class="item-services">
                    <div class="iconbox-type-sm text-center">
                        <span class="lnr lnr-calendar-full"></span>
                        <h4>{{ __('messages.title_media_monitoring') }}</h4>
                        <p>{{ __('messages.sub_media_monitoring') }}</p>
                        {{-- <a href="#" class="ot-btn btn-border-main-color">Learn More</a> --}}
                    </div>
                </div>
                <div class="item-services">
                    <div class="iconbox-type-sm text-center">
                        <span class="lnr lnr-briefcase"></span>
                        <h4>{{ __('messages.title_campaign') }}</h4>
                        <p>{{ __('messages.sub_campaign') }}</p>
                        {{-- <a href="#" class="ot-btn btn-border-main-color">Learn More</a> --}}
                    </div>
                </div>
                <div class="item-services">
                    <div class="iconbox-type-sm text-center">
                        <span class="lnr lnr-layers"></span>
                        <h4>{{ __('messages.title_billboard_management') }}</h4>
                        <p>{{ __('messages.sub_billboard_management') }}</p>
                        {{-- <a href="#" class="ot-btn btn-border-main-color">Learn More</a> --}}
                    </div>
                </div>
                <div class="item-services">
                    <div class="iconbox-type-sm text-center">
                        <span class="lnr lnr-pie-chart"></span>
                        <h4>{{ __('messages.title_media_buying') }}</h4>
                        <p>{{ __('messages.sub_media_buying') }}</p>
                        {{-- <a href="#" class="ot-btn btn-border-main-color">Learn More</a> --}}
                    </div>
                </div>
                <div class="item-services">
                    <div class="iconbox-type-sm text-center">
                        <span class="lnr lnr-calendar-full"></span>
                        <h4>{{ __('messages.title_Web_app') }}</h4>
                        <p>{{ __('messages.sub_Web_app') }}</p>
                        {{-- <a href="#" class="ot-btn btn-border-main-color">Learn More</a> --}}
                    </div>
                </div>
                <div class="item-services">
                    <div class="iconbox-type-sm text-center">
                        <span class="lnr lnr-briefcase"></span>
                        <h4>{{ __('messages.title_public_relation_support') }}</h4>
                        <p>{{ __('messages.sub_public_relation_support') }}</p>
                        {{-- <a href="#" class="ot-btn btn-border-main-color">Learn More</a> --}}
                    </div>
                </div>
            </div>
            <div class="customNavigation">
                <a class="btn-1 prev-services-h1"><i class="fa fa-angle-left"></i></a>
                <a class="btn-1 next-services-h1"><i class="fa fa-angle-right"></i></a>
            </div><!-- End owl button -->
        </div>
    </section>
    <!-- /services -->

    <section class="no-padding" id="client">
        <div class="container">
            <div class="row">
                <div class="title-block text-center title-pd">
                    <span class="top-title "></span>
                    <h2>{{ __('messages.menu_client') }}</h2>
                    {{-- <p class="sub-title">As always, partners grows with you!</p> --}}
                    <span class="bottom-title"></span>
                </div>
                <div class="partner-warp-h1">
                    <div class="col-md-1 col-sm-1">
                        <a href="#"><img src="{{ asset('assets/images/nutrifood-613x613.jpg') }}"
                                class="img-responsive partner-img" alt="Image"></a>
                    </div>
                    <div class="col-md-1 col-sm-1">
                        <a href="#"><img src="{{ asset('assets/images/bankindonesia-240x240.jpg') }}"
                                class="img-responsive partner-img" alt="Image"></a>
                    </div>
                    <div class="col-md-1 col-sm-1">
                        <a href="#"><img src="{{ asset('assets/images/bjb-240x240.jpg') }}"
                                class="img-responsive partner-img" alt="Image"></a>
                    </div>
                    <div class="col-md-1 col-sm-1">
                        <a href="#"><img src="{{ asset('assets/images/bjbs-616x616.jpg') }}"
                                class="img-responsive partner-img" alt="Image"></a>
                    </div>
                    <div class="col-md-1 col-sm-1">
                        <a href="#"><img src="{{ asset('assets/images/dprd-616x616.jpg') }}"
                                class="img-responsive partner-img" alt="Image"></a>
                    </div>
                    <div class="col-md-1 col-sm-1">
                        <a href="#"><img src="{{ asset('assets/images/jabil-613x613.jpg') }}"
                                class="img-responsive partner-img" alt="Image"></a>
                    </div>
                    <div class="col-md-1 col-sm-1">
                        <a href="#"><img src="{{ asset('assets/images/lps-613x613.jpg') }}"
                                class="img-responsive partner-img" alt="Image"></a>
                    </div>
                    <div class="col-md-1 col-sm-1">
                        <a href="#"><img src="{{ asset('assets/images/pemkabbandung-611x611.jpg') }}"
                                class="img-responsive partner-img" alt="Image"></a>
                    </div>
                    <div class="col-md-1 col-sm-1">
                        <a href="#"><img src="{{ asset('assets/images/pemkabpurwakarta-613x613.jpg') }}"
                                class="img-responsive partner-img" alt="Image"></a>
                    </div>
                    <div class="col-md-1 col-sm-1">
                        <a href="#"><img src="{{ asset('assets/images/pemkabtasik-613x613.jpg') }}"
                                class="img-responsive partner-img" alt="Image"></a>
                    </div>
                    <div class="col-md-1 col-sm-1">
                        <a href="#"><img src="{{ asset('assets/images/pemkotbandung-614x614.jpg') }}"
                                class="img-responsive partner-img" alt="Image"></a>
                    </div>
                    <div class="col-md-1 col-sm-1">
                        <a href="#"><img src="{{ asset('assets/images/pemkottasik-613x613.jpg') }}"
                                class="img-responsive partner-img" alt="Image"></a>
                    </div>
                    <div class="col-md-1 col-sm-1">
                        <a href="#"><img src="{{ asset('assets/images/pemprovjabar-614x614.jpg') }}"
                                class="img-responsive partner-img" alt="Image"></a>
                    </div>
                    <div class="col-md-1 col-sm-1">
                        <a href="#"><img src="{{ asset('assets/images/posindonesia-612x612.jpg') }}"
                                class="img-responsive partner-img" alt="Image"></a>
                    </div>
                    <div class="col-md-1 col-sm-1">
                        <a href="#"><img src="{{ asset('assets/images/ptpn8-613x613.jpg') }}"
                                class="img-responsive partner-img" alt="Image"></a>
                    </div>
                    <div class="col-md-1 col-sm-1">
                        <a href="#"><img src="{{ asset('assets/images/sumarecon-617x617.jpg') }}"
                                class="img-responsive partner-img" alt="Image"></a>
                    </div>
                    <div class="col-md-1 col-sm-1">
                        <a href="#"><img src="{{ asset('assets/images/utc-613x613.jpg') }}"
                                class="img-responsive partner-img" alt="Image"></a>
                    </div>
                    <div class="col-md-1 col-sm-1">
                        <a href="#"><img src="{{ asset('assets/images/yamaha-615x615.jpg') }}"
                                class="img-responsive partner-img" alt="Image"></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /partner -->

    {{-- <section class="bg-project-h1">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="group-title-btn">
                            <div class="title-block">
                                <span class="top-title "></span>
                                <h2>Our Projects</h2>
                                <p class="sub-title">As always, partners grows with you!</p>
                                <span class="bottom-title"></span>
                            </div>
                            <a href="cases.html" class="ot-btn btn-border-dark-color pull-right">View All</a>
                        </div>
                    </div>
                    <div class="project-h1-warp">
                        <div class="col-md-6">
                            <div class="item-project">
                                <img src="http://placehold.it/570x270/ccc.jpg" class="img-responsive" alt="Image">
                                <div class="overlay-project">
                                    <h4><a href="#">Enterprise Loan</a></h4>
                                    <a class="cate" href="#">Accumulation</a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="item-project">
                                        <img src="http://placehold.it/570x570/ccc.jpg" class="img-responsive"
                                            alt="Image">
                                        <div class="overlay-project">
                                            <h4><a href="#">Turnaround Consultingan</a></h4>
                                            <a class="cate" href="#">Accumulation</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="item-project">
                                        <img src="http://placehold.it/500x500/ccc.jpg" class="img-responsive"
                                            alt="Image">
                                        <div class="overlay-project">
                                            <h4><a href="#">Audit & Assurance</a></h4>
                                            <a class="cate" href="#">Assurance</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="item-project">
                                <img src="http://placehold.it/570x570/ccc.jpg" class="img-responsive" alt="Image">
                                <div class="overlay-project">
                                    <h4><a href="#">Strategic Planning</a></h4>
                                    <a class="cate" href="#">Strategic</a>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </section> --}}
    <!-- /Cases -->
    <section class="bg-tw-h7" id="founder">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-block title-on-dark">
                        <span class="top-title "></span>
                        <h2>{{ __('messages.menu_founder') }}</h2>
                        {{-- <p class="sub-title">All what customers said about us</p> --}}
                        <span class="bottom-title"></span>
                    </div>
                    <div class="testimonial-warp tw-h1">
                        <div id="testimonial-h6" class="owl-testimonial-h6">
                            <div class="item-testimonial-h1">
                                <a href="#"><img src="{{ ('assets/images/direksi/Pak_Hilman.png') }}"
                                        class="img-responsive" alt="Image"></a>

                                <p>{{ __('messages.founder_name_1') }}</p>

                                <span class="name">{{ __('messages.founder_sum_1') }}</span>
                            </div>
                            <div class="item-testimonial-h1">
                                <a href="#"><img src="{{ ('assets/images/direksi/Pak_Obet.png') }}"
                                        class="img-responsive" alt="Image"></a>

                                <p>{{ __('messages.founder_name_2') }}</p>

                                <span class="name">{{ __('messages.founder_sum_2') }}</span>
                            </div>
                            <div class="item-testimonial-h1">
                                <a href="#"><img src="{{ ('assets/images/direksi/Pak_Ruddy.png') }}"
                                        class="img-responsive" alt="Image"></a>

                                <p>{{ __('messages.founder_name_3') }}</p>

                                <span class="name">{{ __('messages.founder_sum_3') }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /founder -->

    <section>
        <div class="container" id="news">
            <div class="row">
                <div class="col-md-12">
                    <div class="group-title-btn">
                        <div class="title-block">
                            <span class="top-title "></span>
                            <h2>{{ __('messages.menu_article') }}</h2>
                            {{-- <p class="sub-title">All about company updates</p> --}}
                            <span class="bottom-title"></span>
                        </div>
                        <a href="/blog" class="ot-btn btn-sub-color pull-right">View All</a>
                    </div>
                </div>
                <div class="news-h8-warp">
                    @foreach ($post as $item)
                    <div class="col-md-6">
                        <div class="item-new">
                            <a href="#"><img src="storage/{{ $item->post_image_thumb }}" class="img-responsive"
                                    alt="Image"></a>
                            <div class="new-info">
                                <h4><a href="#">{{ $item->post_title }}</a></h4>
                                <p><i class="fa fa-calendar"
                                        aria-hidden="true"></i>{{ date('d, M Y', strtotime($item->created_at)) }}</p>
                                <p><i class="fa fa-user" aria-hidden="true"></i> <a href="#">{{ $item->user->name }}</a>
                                </p>

                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- /News -->

    <section class="bg-news-h9" id="billboard">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-block text-center">
                        <span class="top-title "></span>
                        <h2>{{ __('messages.menu_billboard') }}</h2>
                        {{-- <p class="sub-title">All about company updates</p> --}}
                        <span class="bottom-title"></span>
                    </div>
                </div>
                <div class="warp-full-width news-h9-warp ">
                    <div id="news-h9" class="  owl-news-h9">
                        <div class="item-new">
                            <img src="{{ asset('assets/custom/img/bilboard/bandung.png') }}" class="img-responsive"
                                alt="Image">
                        </div>
                        <div class="item-new">
                            <img src="{{ asset('assets/custom/img/bilboard/banten.png') }}" class="img-responsive"
                                alt="Image">
                        </div>
                        <div class="item-new">
                            <img src="{{ asset('assets/custom/img/bilboard/jawabarat.png') }}" class="img-responsive"
                                alt="Image">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- /billboard -->

    <!-- Footer -->
    <footer class="f-bg-dark" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="widget widget-footer widget-footer-text">
                        <div class="title-block title-on-dark title-xs">
                            <h4>{{ __('messages.menu_about') }}</h4>
                            <span class="bottom-title"></span>
                        </div>
                        <p>{{ __('messages.ayo_is') }}</p>
                        {{-- <ul class="widget widget-footer widget-footer-social-1">
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
                            </ul> --}}
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="widget widget-footer widget-footer-icon-link">
                        <div class="title-block title-on-dark title-xs">
                            <h4>{{ __('messages.menu_news') }}</h4>
                            <span class="bottom-title"></span>
                        </div>

                        <ul class="icon-link-list-icon">
                            <li><a href="ayobandung.com">ayobandung.com</a></li>
                            <li><a href="ayobogor.com">ayobogor.com</a></li>
                            <li><a href="ayotasik.com">ayotasik.com</a></li>
                            <li><a href="ayocirebon.com">ayocirebon.com</a></li>
                            <li><a href="ayopurwakarta.com">ayopurwakarta.com</a></li>
                            <li><a href="ayobekasi.net">ayobekasi.net</a></li>
                            <li><a href="ayosemarang.com">ayosemarang.com</a></li>
                            <li><a href="ayoyogya.com">ayoyogya.com</a></li>
                            <li><a href="ayojakarta.com">ayojakarta.com</a></li>
                            <li><a href="ayobatang.com">ayobatang.com</a></li>
                            <li><a href="ayotegal.com">ayotegal.com</a></li>
                            <li><a href="ayosurabaya.com">ayosurabaya.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="widget widget-footer widget-footer-list-link">
                        <div class="title-block title-on-dark title-xs">
                            <h4>{{ __('messages.menu_contact') }}</h4>
                            <span class="bottom-title"></span>
                        </div>
                        <p>
                            <strong>AYO MEDIA NETWORK</strong><br>
                            Jl. Terusan Halimun No. 50<br>
                            Bandung <br>
                            P : +62 (22) 73517371 &amp; 73513312<br>
                            E : info@ayomedia.com<br>
                            W : www.ayomedianetwork.com<br>
                        </p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="widget widget-footer widget-footer-img">
                        <div class="title-block title-on-dark title-xs">
                            {{-- <h4>Our Branches</h4> --}}
                            {{-- <span class="bottom-title"></span> --}}
                        </div>
                        <img src="{{ asset('assets/images/logo-a-122x125.png') }}" class="img-responsive" alt="Image">
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- /Footer -->

    <section class="no-padding cr-h1">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="copyright-warp cr-1">
                        <div class="copyright-text">
                            <p>© 2019 <span>Copyright</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /copyright -->

    </div>
    <!-- /page -->
    <a id="to-the-top" class="fixbtt bg-hover-theme"><i class="fa fa-chevron-up"></i></a>
    <!-- Back To Top -->
    <!-- Switcher -->
    <!-- End Switcher -->
    <!-- SCRIPT -->
    <script src="{{ asset('assets/anwal/js/vendor/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/anwal/js/vendor/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/anwal/js/plugins/jquery.waypoints.min.js') }}"></script>
    <!-- Sticky -->
    <script src="{{ asset('assets/anwal/js/plugins/jquery.sticky-kit.min.js') }}"></script>
    <!-- <script src="js/plugins/sticky.js"></script> -->
    <!-- Mobile Menu
			================================================== -->
    <script type="text/javascript" src="{{ asset('assets/anwal/js/plugins/jquery.mmenu.all.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/anwal/js/plugins/mobilemenu.js') }}"></script>
    <!-- REVOLUTION JS FILES -->
    <script type="text/javascript" src="{{ asset('assets/anwal/revolution/js/jquery.themepunch.tools.min.js') }}">
    </script>
    <script type="text/javascript" src="{{ asset('assets/anwal/revolution/js/jquery.themepunch.revolution.min.js') }}">
    </script>
    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
    <script type="text/javascript"
        src="{{ asset('assets/anwal/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
    <script type="text/javascript"
        src="{{ asset('assets/anwal/revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>
    <script type="text/javascript"
        src="{{ asset('assets/anwal/revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
    <script type="text/javascript"
        src="{{ asset('assets/anwal/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
    <script type="text/javascript"
        src="{{ asset('assets/anwal/revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
    <script type="text/javascript"
        src="{{ asset('assets/anwal/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
    <script type="text/javascript"
        src="{{ asset('assets/anwal/revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
    <script type="text/javascript"
        src="{{ asset('assets/anwal/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
    <script type="text/javascript"
        src="{{ asset('assets/anwal/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>
    <script src="{{ asset('assets/anwal/js/plugins/slider-home-1.js') }}"></script>
    <!-- Initializing Owl Carousel
			================================================== -->
    <script src="{{ asset('assets/anwal/js/plugins/owl.carousel.js') }}"></script>
    <script src="{{ asset('assets/anwal/js/plugins/owl.js') }}"></script>
    <!-- PreLoad
			================================================== -->
    <script type="text/javascript" src="{{ asset('assets/anwal/js/plugins/royal_preloader.js') }}"></script>
    <!-- Parallax -->
    <script src="{{ asset('assets/anwal/js/plugins/jquery.parallax-1.1.3.js') }}"></script>
    <!-- <script src="js/plugins/parallax.js"></script> -->
    <!-- Fancy Select -->
    <script src="{{ asset('assets/anwal/js/plugins/fancySelect.js') }}"></script>
    <script src="{{ asset('assets/anwal/js/plugins/lang-select.js') }}"></script>
    <script src="{{ asset('assets/anwal/js/plugins/cb-select.js') }}"></script>
    <!-- Initializing Counter Up
			================================================== -->
    <script src="{{ asset('assets/anwal/js/plugins/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets/anwal/js/plugins/counterup.js') }}"></script>
    <!-- Global Js
			================================================== -->
    <script src="{{ asset('assets/anwal/js/plugins/template.js') }}"></script>
    <!-- Demo Switcher
			================================================== -->
    <!-- <script src="switcher/demo.js"></script> -->
</body>

</html>
