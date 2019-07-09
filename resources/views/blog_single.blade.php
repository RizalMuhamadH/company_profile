<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blog</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/anwal/css/bootstrap.css') }}">
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> --}}
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&subset=devanagari,latin-ext"
        rel="stylesheet">
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
    <!-- Magnific Popup core CSS file -->
    <link rel="stylesheet" href="{{ asset('assets/anwal/css/magnific-popup.css') }}">
    <!-- Main Style -->
    <link rel="stylesheet" href="{{ asset('assets/anwal/style.css') }}">

    <!-- Favicons
			================================================== -->
    <link rel="shortcut icon" href="{{ asset('assets/images/logo-a-122x125.png') }}">
</head>

<body class="royal_loader">
    <!-- royal_loader -->
    <div id="page">
        {{-- <!-- Mobile Menu -->
        <nav id="menu">
            <ul>
                <li class="active">
                    <a href="index.html">Home</a>
                    <ul>
                        <li><a href="index.html">HomePage v1</a></li>
                        <li><a href="index_2.html">HomePage v2</a></li>
                        <li><a href="index_3.html">HomePage v3</a></li>
                        <li><a href="index_4.html">HomePage v4</a></li>
                        <li><a href="index_5.html">HomePage v5</a></li>
                        <li><a href="index_6.html">HomePage v6</a></li>
                        <li><a href="index_7.html">HomePage v7</a></li>
                        <li><a href="index_8.html">HomePage v8</a></li>
                        <li><a href="index_9.html">HomePage v9</a></li>
                        <li><a href="index_10.html">HomePage v10</a></li>
                        <li><a href="index_11.html">HomePage v11</a></li>
                        <li><a href="index_12.html">HomePage v12</a></li>
                    </ul>
                </li>
                <li><a href="company_history.html">Company</a>
                    <ul>

                        <li><a href="company_history.html"><span>Company History</span></a>
                            <ul>
                                <li><a href="company_history.html"><span>Company History V1</span></a></li>
                                <li><a href="company_history_2.html"><span>Company History V2</span></a></li>
                            </ul>
                        </li>
                        <li><a href="about.html"><span>About</span></a>
                            <ul>
                                <li><a href="about.html"><span>About Verision 1</span></a></li>
                                <li><a href="about_2.html"><span>About Verision 2</span></a></li>
                                <li><a href="about_3.html"><span>About Verision 3</span></a></li>
                                <li><a href="about_4.html"><span>About Verision 4</span></a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="services.html">Services </a>
                    <ul>
                        <li><a href="services.html">Services Page</a></li>
                        <li><a href="single_services.html">Single Services</a>
                            <ul>
                                <li><a href="single_services.html">Single Services V1</a></li>
                                <li><a href="single_services_2.html">Single Services V2</a></li>
                                <li><a href="single_services_3.html">Single Services V3</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="cases.html">Cases</a>
                    <ul>
                        <li><a href="cases.html">Cases Page</a></li>
                        <li><a href="single_case.html">Single Cases</a></li>
                    </ul>
                </li>
                <li>
                    <a href="news.html">Blogs</a>
                    <ul>
                        <li><a href="news.html">Blog Page</a>
                            <ul>
                                <li><a href="news.html">Blog List Layout</a></li>
                                <li><a href="news-2.html">Blog Grid Layout</a></li>
                            </ul>
                        </li>
                        <li><a href="single_new.html">Single Blog</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">Pages</a>
                    <ul>

                        <li><a href="team.html">Our Team</a>
                            <ul>
                                <li><a href="team.html">Our Team V1</a></li>
                                <li><a href="team_2.html">Our Team V2</a></li>
                                <li><a href="single_team.html">Team Single</a></li>
                            </ul>
                        </li>
                        <li><a href="testimonials.html">Testimonials</a>
                            <ul>
                                <li><a href="testimonials.html">Testimonials V1</a></li>
                                <li><a href="testimonials_2.html">Testimonials V2</a></li>
                            </ul>
                        </li>
                        <li><a href="career.html">Career</a>
                            <ul>
                                <li><a href="career.html">Career Page</a></li>
                                <li><a href="career_single.html">Career Single</a></li>
                            </ul>
                        </li>
                        <li><a href="partners.html">Partners</a>
                            <ul>
                                <li><a href="partners.html">Partners Verision 1</a></li>
                                <li><a href="partners_2.html">Partners Verision 2</a></li>
                            </ul>
                        </li>
                        <li><a href="branches.html">Branches</a></li>
                        <li><a href="ceo_message.html">Ceo Message</a></li>
                        <li><a href="faq.html">FAQ Page</a></li>
                        <li><a href="pricing.html">Pricing Page</a></li>
                        <li><a href="my_account.html">Account Page</a></li>
                        <li><a href="404.html">404 Page</a></li>
                        <li><a href="comingsoon.html">Under Contruction</a></li>
                        <!-- <li ><a  href="typography.html">Typography</a></li>
												<li ><a  href="element.html">Element</a></li> -->
                    </ul>
                </li>
                <li>
                    <a href="shop.html">Shop</a>
                    <ul>
                        <li> <a href="shop.html"><span>Shop Category </span></a>
                            <ul>
                                <li> <a href="shop.html"><span>Shop Category </span></a></li>
                                <li> <a href="shop_2.html"><span>Shop Sidebar </span></a></li>
                            </ul>
                        </li>
                        <li><a href="single-shop.html">Shop Single</a></li>
                        <li><a href="checkout.html">CheckOut Page</a></li>
                        <li><a href="cart.html">Shopping Cart</a></li>
                    </ul>
                </li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
        </nav> --}}
        <!-- /Mobile Menu -->
        <header class="header-h2">
            <div class="topbar tb-dark tb-md">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="topbar-home2">
                                <div class="tb-contact tb-iconbox">
                                    <ul>
                                        <li><a
                                                href="https://www.google.co.id/maps/place/Jl.+Terusan+Halimun+No.50,+Lkr.+Sel.,+Kec.+Lengkong,+Kota+Bandung,+Jawa+Barat+40263"><i
                                                    class="fa fa-map-marker" aria-hidden="true"
                                                    target="_blank"></i><span><i>Find us</i> Jl. Terusan Halimun No.
                                                    50 Bandung</span></a></li>
                                        <li><a href="mailto:info@ayomedia.com"><i class="fa fa-envelope"
                                                    aria-hidden="true"></i><span><i>Email us</i>
                                                    info@ayomedia.com</span></a></li>
                                        <li><a href="tel:02273517371"><i class="fa fa-phone"
                                                    aria-hidden="true"></i><span><i>Call us now</i>
                                                    +62 (22) 73517371</span></a></li>
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
            {{-- <div class="nav-warp nav-warp-h2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="navi-warp-home-2">
                                <a href="index.html" class="logo"><img src="http://placehold.it/151x38/ccc.jpg"
                                        class="img-responsive" alt="Image"></a>
                                <nav>
                                    <ul class="navi-level-1 active-subcolor">
                                        <li class="active">
                                            <a href="index.html">Home</a>
                                            <ul class="navi-level-2">
                                                <li><a href="index.html">HomePage v1</a></li>
                                                <li><a href="index_2.html">HomePage v2</a></li>
                                                <li><a href="index_3.html">HomePage v3</a></li>
                                                <li><a href="index_4.html">HomePage v4</a></li>
                                                <li><a href="index_5.html">HomePage v5</a></li>
                                                <li><a href="index_6.html">HomePage v6</a></li>
                                                <li><a href="index_7.html">HomePage v7</a></li>
                                                <li><a href="index_8.html">HomePage v8</a></li>
                                                <li><a href="index_9.html">HomePage v9</a></li>
                                                <li><a href="index_10.html">HomePage v10</a></li>
                                                <li><a href="index_11.html">HomePage v11</a></li>
                                                <li><a href="index_12.html">HomePage v12</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="company_history.html">Company</a>
                                            <ul class="navi-level-2">

                                                <li><a href="company_history.html"><span>Company History</span></a>
                                                    <ul class="navi-level-3">
                                                        <li><a href="company_history.html"><span>Company History
                                                                    V1</span></a></li>
                                                        <li><a href="company_history_2.html"><span>Company History
                                                                    V2</span></a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="about.html"><span>About</span></a>
                                                    <ul class="navi-level-3">
                                                        <li><a href="about.html"><span>About Verision 1</span></a></li>
                                                        <li><a href="about_2.html"><span>About Verision 2</span></a>
                                                        </li>
                                                        <li><a href="about_3.html"><span>About Verision 3</span></a>
                                                        </li>
                                                        <li><a href="about_4.html"><span>About Verision 4</span></a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="services.html">Services </a>
                                            <ul class="navi-level-2">
                                                <li><a href="services.html">Services Page</a></li>
                                                <li><a href="single_services.html">Single Services</a>
                                                    <ul class="navi-level-3">
                                                        <li><a href="single_services.html">Single Services V1</a></li>
                                                        <li><a href="single_services_2.html">Single Services V2</a></li>
                                                        <li><a href="single_services_3.html">Single Services V3</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="cases.html">Cases</a>
                                            <ul class="navi-level-2">
                                                <li><a href="cases.html">Cases Page</a></li>
                                                <li><a href="single_case.html">Single Cases</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="news.html">Blogs</a>
                                            <ul class="navi-level-2">
                                                <li><a href="news.html">Blog Page</a>
                                                    <ul class="navi-level-3">
                                                        <li><a href="news.html">Blog List Layout</a></li>
                                                        <li><a href="news-2.html">Blog Grid Layout</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="single_new.html">Single Blog</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">Pages</a>
                                            <ul class="navi-level-2">

                                                <li><a href="team.html">Our Team</a>
                                                    <ul class="navi-level-3">
                                                        <li><a href="team.html">Our Team V1</a></li>
                                                        <li><a href="team_2.html">Our Team V2</a></li>
                                                        <li><a href="single_team.html">Team Single</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="testimonials.html">Testimonials</a>
                                                    <ul class="navi-level-3">
                                                        <li><a href="testimonials.html">Testimonials V1</a></li>
                                                        <li><a href="testimonials_2.html">Testimonials V2</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="career.html">Career</a>
                                                    <ul class="navi-level-3">
                                                        <li><a href="career.html">Career Page</a></li>
                                                        <li><a href="career_single.html">Career Single</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="partners.html">Partners</a>
                                                    <ul class="navi-level-3">
                                                        <li><a href="partners.html">Partners Verision 1</a></li>
                                                        <li><a href="partners_2.html">Partners Verision 2</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="branches.html">Branches</a></li>
                                                <li><a href="ceo_message.html">Ceo Message</a></li>
                                                <li><a href="faq.html">FAQ Page</a></li>
                                                <li><a href="pricing.html">Pricing Page</a></li>
                                                <li><a href="my_account.html">Account Page</a></li>
                                                <li><a href="404.html">404 Page</a></li>
                                                <li><a href="comingsoon.html">Under Contruction</a></li>
                                                <!-- <li ><a  href="typography.html">Typography</a></li>
												<li ><a  href="element.html">Element</a></li> -->
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="shop.html">Shop</a>
                                            <ul class="navi-level-2">
                                                <li> <a href="shop.html"><span>Shop Category </span></a>
                                                    <ul class="navi-level-3">
                                                        <li> <a href="shop.html"><span>Shop Category </span></a></li>
                                                        <li> <a href="shop_2.html"><span>Shop Sidebar </span></a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="single-shop.html">Shop Single</a></li>
                                                <li><a href="checkout.html">CheckOut Page</a></li>
                                                <li><a href="cart.html">Shopping Cart</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.html">Contact</a></li>
                                    </ul>
                                </nav>
                                <ul class="subnavi">
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
                                </ul>
                                <a href="#menu" class="btn-menu-mobile"><i class="fa fa-bars"
                                        aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            <!-- /nav -->
        </header>
        <!-- /End Header 1 Warp -->

        <section class="no-padding sh-news">
            <div class="sub-header ">
                <span>COMPANY UPDATES</span>
                <h3>LATEST NEWS</h3>
                <ol class="breadcrumb">
                    <li>
                        <a href="/"><i class="fa fa-home"></i> {{ __('messages.menu_home') }} </a>
                    </li>

                    <li> <a href="/blog">{{ __('messages.menu_article') }}</a></li>
                    <li class="active"> {{ __('messages.detail') }}</li>
                </ol>
            </div>
        </section>
        <!-- /subheader -->

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="new-detail-warp">
                            <div class="feature-img-deital">
                                <img src="{{ url('storage').'/'.$post->post_image }}" class="img-responsive" alt="Image">
                            </div>
                            <div class="new-info new-info-detail">
                                <h4>
                                    <a href="">{{ $post->post_title }}</a>
                                </h4>
                                <p><i class="fa fa-calendar" aria-hidden="true"></i>{{ date('d, M Y', strtotime($post->created_at)) }}</p>
                                <p><i class="fa fa-user" aria-hidden="true"> </i> {{ $post->user->name }}</p>
                            </div>
                            <div class="content-detail content-new-detail">
                                    {!! $post->post_content !!}
                            </div>
                        </div>
                        <div class="footer-post">
                            {{-- <p class="tags-post">
                                <i class="fa fa-tags" aria-hidden="true"></i>
                                <a href="#">Business</a>,
                                <a href="#">Financial</a>,
                                <a href="#">Money</a>,
                                <a href="#">Loans</a>
                            </p> --}}
                            <ul class="widget-footer-social-1 footer-post-share social-hover-defaul">
                                <li><a class="facebook" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                </li>
                                <li><a class="twitter" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                </li>
                                <li><a class="google" href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                </li>
                                <li><a class="linkedin" href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer class="f-bg-dark">
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
                            <img src="{{ asset('assets/images/logo-a-122x125.png') }}" class="img-responsive"
                                alt="Image">
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
    <!-- Sticky -->
    <script src="{{ asset('assets/anwal/js/plugins/jquery.sticky-kit.min.js') }}"></script>
    <!-- <script src="js/plugins/sticky.js"></script> -->
    <!-- Mobile Menu
			================================================== -->
    <script type="text/javascript" src="{{ asset('assets/anwal/js/plugins/jquery.mmenu.all.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/anwal/js/plugins/mobilemenu.js') }}"></script>
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
    <!-- Magnific Popup core JS file -->
    <script src="{{ asset('assets/anwal/js/plugins/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/anwal/js/plugins/lightbox.js') }}"></script>
    <!-- Global Js
			================================================== -->
    <script src="{{ asset('assets/anwal/js/plugins/template.js') }}"></script>
    <!-- Demo Switcher
			================================================== -->
    {{-- <script src="{{ ('assets/anwal/switcher/demo.js') }}"></script> --}}
</body>

</html>
