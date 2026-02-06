<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>ICTE</title>
    <meta content="" name="description" />
    <meta content="" name="author" />
    <meta content="" name="keywords" />
    <meta
        content="height=device-height, width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"
        name="viewport" />
    <link href="css/plugins.css" media="all" rel="stylesheet" type="text/css" />
    <link href="css/style.css" media="all" rel="stylesheet" type="text/css" />
    <link href="css/main.css" media="all" rel="stylesheet" type="text/css" />

    <link href="http://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900%7COswald:300,400,700"
        rel="stylesheet" type="text/css" />



</head>

<body>
    <div class="preloader-bg"></div>
    <div id="preloader">
        <div id="preloader-status">
            <div class="preloader-position loader">
                <span></span>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-fixed-top navbar-bg-switch">
        <!-- container start -->
        <div class="container-fluid">
            <div class="navbar-header fadeIn-element">
                <!-- logo start -->
                <div class="logo">
                    <a class="navbar-brand logo" href="#">
                        <!-- logo light start -->
                        <img alt="Logo" class="logo-light" src="/logo.png" /><!-- logo light end -->
                        <!-- logo dark start -->
                        <img alt="Logo" class="logo-dark" src="/logo.png" /><!-- logo dark end --></a>
                </div>
                <!-- logo end -->
            </div>
            <!-- main navigation start -->
            <div class="main-navigation fadeIn-element">
                <div class="navbar-header">
                    <button aria-expanded="false" class="navbar-toggle collapsed" data-target="#navbar-collapse"
                        data-toggle="collapse" type="button">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span> <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a class="page-scroll link-underline-menu active"
                                href="#home">{{ __('main.main_page') }}</a>
                        </li>

                        <li>
                            <a class="page-scroll link-underline-menu"
                                href="#about">{{ __('main.about_conference') }}</a>
                        </li>
                        <li>
                            <a class="page-scroll link-underline-menu" href="#goals">{{ __('main.goals') }}</a>
                        </li>
                        <li>
                            <a class="page-scroll link-underline-menu" href="#maps">{{ __('main.location') }}</a>
                        </li>

                        <li>
                            <a download class="page-scroll link-underline-menu" href="/files/ICTE_2025_UZ.pdf">
                                {{ __('main.information_letter') }}</a>
                        </li>

                        <li>
                            <a download class="page-scroll link-underline-menu" href="/files/program.docx">
                                {{ __('main.program') }}</a>
                        </li>
                        <li>
                            <a class="page-scroll link-underline-menu" download
                                href="/files/COLLECTION2025.pdf">{{ __('main.archive') }}</a>
                        </li>


                        <li class="dropdown lang-dropdown">
                            <a href="#" class="dropdown-toggle page-scroll link-underline-menu"
                                data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                {{ __('main.language') }} <span class="caret"></span>
                            </a>
                            <!-- dropdown-menu-right qo'shildi -->
                            <ul class="dropdown-menu dropdown-menu-right lang-menu">
                                <li><a href="{{ route('lang.switch', 'uz') }}"><span class="flag"></span>
                                        O‘zbekcha</a></li>
                                <li><a href="{{ route('lang.switch', 'ru') }}"><span class="flag"></span> Русский</a>
                                </li>
                                <li><a href="{{ route('lang.switch', 'en') }}"><span class="flag"></span> English</a>
                                </li>
                            </ul>
                        </li>


                        <!-- END TIL DROPDOWN -->

                    </ul>
                    <!-- menu end -->
                </div>
            </div>

            <!-- main navigation end -->
        </div>
        <!-- container end -->
    </nav>

    <section class="upper-page" id="home">
        <div class="hero-fullscreen overlay overlay-dark-70">
            <div class="hero-bg kenburns-slide-wrapper">
                <div class="kenburns-slide kenburns-slide-1"></div>
                <div class="kenburns-slide kenburns-slide-2"></div>
                <div class="kenburns-slide kenburns-slide-3"></div>
                <div class="kenburns-slide kenburns-slide-4"></div>
            </div>
        </div>
        <div class="center-container">
            <div class="center-block">
                <h2 class="home-page-title fadeIn-element">
                    {{ __('main.header_section.subname') }}
                </h2>
                <!-- home subtitle end -->
                <!-- divider start -->
                <div class="inner-divider-half"></div>
                <!-- divider end -->
                <!-- home title start -->
                <h1 class="home-page-title fadeIn-element">
                    {{ __('main.header_section.name') }}
                </h1>
                <!-- home title end -->
                <!-- divider start -->
                <div class="inner-divider-half"></div>
                <!-- divider end -->
                <!-- sign up modal launcher start -->
                <div class="the-button-wrapper fadeIn-element">
                    <div class="the-button">{{ __('main.header_section.city') }}</div>
                </div>
                <!-- sign up modal launcher end -->
            </div>
            <!-- center block end -->
        </div>


        <div class="scroll-indicator-wrapper fadeIn-element">
            <div class="scroll-indicator"></div>
        </div>
        <!-- scroll indicator end -->
    </section>
    <!-- home section end -->

    <section class="section-light" id="about">
        <!-- container start -->
        <div class="container">
            <!-- divider start -->
            <div class="inner-divider"></div>
            <!-- divider end -->
            <!-- row start -->
            <div class="row">
                <!-- col start -->
                <div class="col-lg-12">
                    <!-- page title start -->
                    <div class="post-title">{{ __('main.about_conference') }}</div>
                    <!-- page title end -->
                </div>
                <!-- col end -->
            </div>
            <!-- row end -->
            <!-- divider start -->
            <div class="inner-divider"></div>
            <div class="col-sm-12 mb-10">
                <div class="post-txt">
                    <h4>
                        <p>
                            {{ __('main.about_section.suggestion') }}
                        </p>
                        <br />
                        <p>
                            {!! __('main.about_section.sections') !!}
                        </p>
                    </h4>
                </div>
            </div>

            <!-- divider end -->
            <!-- row start -->

            <div class="row justify-content-between">
                <!-- col start -->
                <div class="col-md-4 col-sm-12">
                    <div class="post-txt">
                        <!-- page subtitle start -->
                        <h4 class="post-heading">
                            {{ __('main.about_section.samsu') }}


                        </h4>
                        <!-- page subtitle end -->
                        <!-- divider start -->
                        <div class="inner-divider-half"></div>
                        <!-- divider end -->
                        <!-- page subtitle number start -->
                        <div class="post-title"> {{ __('main.about_section.date1') }}
                        </div>
                        <!-- page subtitle number end -->
                        <!-- divider start -->
                        <div class="inner-divider-half"></div>
                        <!-- divider end -->
                        <!-- page TXT start -->
                        <p>
                            {!! __('main.about_section.sections') !!}

                        </p>
                        <!-- page TXT end -->
                    </div>
                    <!-- mobile divider start -->
                    <div class="inner-divider-mobile"></div>
                    <!-- mobile divider end -->
                </div>

                <div class="col-md-4 col-sm-12">
                    <div class="post-txt">
                        <!-- page subtitle start -->
                        <h4 class="post-heading">
                            {{ __('main.about_section.inyaz') }}

                        </h4>
                        <!-- page subtitle end -->
                        <!-- divider start -->
                        <div class="inner-divider-half"></div>
                        <!-- divider end -->
                        <!-- page subtitle number start -->
                        <div class="post-title"> {{ __('main.about_section.date2') }}
                        </div>
                        <div class="inner-divider-half"></div>
                        <p>
                            {!! __('main.about_section.section2') !!}
                        </p>
                        <!-- page TXT end -->
                    </div>
                </div>

                <div class="col-md-4 col-sm-12">
                    <div class="post-txt">
                        <!-- page subtitle start -->
                        <h4 class="post-heading">
                            {{ __('main.about_section.ShahrisabzSPI') }}

                        </h4>
                        <!-- page subtitle end -->
                        <!-- divider start -->
                        <div class="inner-divider-half"></div>
                        <!-- divider end -->
                        <!-- page subtitle number start -->
                        <div class="post-title"> {{ __('main.about_section.date3') }}
                        </div>
                        <!-- page subtitle number end -->
                        <!-- divider start -->
                        <div class="inner-divider-half"></div>
                        <!-- divider end -->
                        <!-- page TXT start -->
                        <p>
                            {!! __('main.about_section.section3') !!}

                        </p>
                        <!-- page TXT end -->
                    </div>
                </div>
                <!-- col end -->
            </div>
            <div class="inner-divider"></div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div id="goals" class="post-title">{{ __('main.goals_section.name') }}</div>
                </div>
            </div>
            <div class="inner-divider"></div>
            <div class="row justify-content-center">
                <div class="col-sm-12">
                    <div class="post-txt">
                        <h4>
                            {!! __('main.goals_section.goals') !!}
                        </h4>
                        <p></p>
                        <!-- page TXT end -->
                    </div>
                    <!-- mobile divider start -->
                    <div class="inner-divider-mobile"></div>
                    <div class="inner-divider"></div>
                    <!-- mobile divider end -->
                </div>
                <!-- col end -->
            </div>
            <!-- row end -->
            <!-- divider start -->
            <!-- divider end -->
        </div>
        <!-- container end -->
    </section>
    <!-- about section end -->
    <!-- services section start -->
    <section>
        <!-- halve dark start -->
        <div class="halves section-dark">
            <!-- halve dark visible IMG start -->
            <!-- <div class="half services-bg-1 visible-xs"></div> -->
            <!-- halve dark visible IMG end -->
            <!-- halve dark TXT start -->
            <div class="half map-samdu-image">
                <!-- divider start -->
                <div class="inner-divider"></div>
                <!-- divider end -->
                <!-- col start -->
                <div class="post-txt post-txt-light services-txt">
                    <!-- page subtitle start -->

                    <div class="inner-divider-half"></div>

                    <!-- divider end -->
                    <!-- page title start -->
                    <div class="post-title post-title-light">{{ __('main.locations_section.only_date1') }}</div>
                    <!-- page title end -->
                    <!-- divider start -->

                    <!-- divider start -->
                    <div class="inner-divider-half"></div>
                    <!-- divider end -->
                    <!-- page TXT start -->
                    <p>
                        {{ __('main.locations_section.text1') }}

                    </p>
                    <!-- page TXT end -->
                </div>
                <!-- mobile divider start -->
                <div class="inner-divider-mobile"></div>
                <!-- mobile divider end -->
                <!-- col end -->
                <!-- divider start -->
                <div class="inner-divider hide-on-mobile"></div>
                <!-- divider end -->
            </div>
            <!-- halve dark TXT end -->
            <!-- halve dark hidden IMG start -->
            <div class="half hidden-xs" id="maps">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d914.910068401583!2d66.96522443883515!3d39.6489734009829!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f4d18cddc57780f%3A0x26754d158e8b093c!2sSamarkand%20State%20University%20Faculty%20of%20Biology%2C%20Shohruh%20Mirzo%20Street%2C%20Samarkand%2C%20Samarqand%20Region%2C%20Uzbekistan!5e0!3m2!1sen!2s!4v1739119974490!5m2!1sen!2s"
                    width="100%" height="100%" style="border: 0" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <!-- halve dark hidden IMG end -->
        </div>
        <!-- halve dark end -->
        <!-- halve light start -->
        <div class="halves section-light">
            <!-- halve light IMG start -->
            <div class="half">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3071.9797483362645!2d66.96215037934569!3d39.65017031095938!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f4d18ce36ffe105%3A0x2fc344ea136c09b!2sSamarkand%20State%20Institute%20of%20Foreign%20Languages!5e0!3m2!1sen!2s!4v1741598406371!5m2!1sen!2s"
                    width="100%" height="100%" style="border: 0" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <!-- halve light IMG end -->
            <!-- halve light TXT start -->
            <div class="half map-samdchti-image">
                <!-- divider start -->
                <div class="inner-divider"></div>
                <!-- divider end -->
                <!-- col start -->
                <div class="post-txt post-txt-light services-txt">
                    <div class="post-title post-title-light">{{ __('main.locations_section.only_date2') }}</div>

                    <div class="inner-divider-half"></div>
                    <!-- divider end -->
                    <!-- page TXT start -->
                    <p>
                        {{ __('main.locations_section.text2') }}
                    </p>
                    <!-- page TXT end -->
                </div>
                <!-- mobile divider start -->
                <div class="inner-divider-mobile"></div>
                <!-- mobile divider end -->
                <!-- col end -->
                <!-- divider start -->
                <div class="inner-divider hide-on-mobile"></div>
                <!-- divider end -->
            </div>
            <!-- halve light TXT end -->
        </div>
        <!-- halve light end -->
        <!-- halve dark start -->
        <div class="halves section-dark">
            <!-- halve dark visible IMG start -->
            <div class="half services-bg-1 visible-xs"></div>
            <!-- halve dark visible IMG end -->
            <!-- halve dark TXT start -->
            <div class="half map-ped-image">
                <!-- divider start -->
                <div class="inner-divider"></div>
                <!-- divider end -->
                <!-- col start -->
                <div class="post-txt post-txt-light services-txt">
                    <!-- page subtitle start -->

                    <div class="post-title post-title-light">{{ __('main.locations_section.only_date3') }}</div>

                    <div class="inner-divider-half"></div>
                    <!-- divider end -->
                    <!-- page TXT start -->
                    <p>
                        {{ __('main.locations_section.text3') }}
                    </p>
                    <!-- page TXT end -->
                </div>
                <!-- mobile divider start -->
                <div class="inner-divider-mobile"></div>
                <!-- mobile divider end -->
                <!-- col end -->
                <!-- divider start -->
                <div class="inner-divider hide-on-mobile"></div>
                <!-- divider end -->
            </div>
            <!-- halve dark TXT end -->
            <!-- halve dark hidden IMG start -->
            <div class="half hidden-xs">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3098.0692421748035!2d66.8494425757984!3d39.05933617169004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f4c9bcd72f689e5%3A0xd8f257f4c281eb73!2sShahrisabz%20davlat%20pedagogika%20instituti!5e0!3m2!1sen!2s!4v1741598469807!5m2!1sen!2s"
                    width="100%" height="100%" style="border: 0" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <!-- halve dark hidden IMG end -->
        </div>
        <!-- halve dark end -->
    </section>
    <!-- services section end -->
    <!-- launch section start -->
    <section>
        <!-- parallax wrapper start -->
        <div class="parallax parallax-launch" data-parallax-speed="0.75">
            <!-- parallax overlay start -->
            <div class="parallax-overlay"></div>
            <!-- parallax overlay end -->
            <!-- divider start -->
            <div class="inner-divider"></div>
            <!-- divider end -->
            <!-- countdown start -->
            <div class="countdown">
                <!-- page subtitle start -->
                <h2 class="countdown-top">{{ __('main.locations_section.until_project') }}</h2>
                <!-- page subtitle end -->
                <!-- divider start -->
                <div class="inner-divider-half"></div>
                <!-- divider end -->
                <h3>{dnnn}</h3>
                <div class="inner-divider-half"></div>
                <h2 class="countdown-bottom">{{ __('main.locations_section.day_left') }}</h2>
            </div>
            <div class="inner-divider"></div>
        </div>
    </section>
    <div class="inner-divider-light"></div>

    <div class="inner-divider inner-divider-light"></div>

    <section class="section-light" id="contact">
        <div class="container">
            <footer class="py-5 p-4">
                <h2 class="post-title">{{ __('main.contac_us_section.name') }}</h2>
                <div class="row p-4">
                    <div class="col-4 col-md-4 mb-3">
                        <h5 class="text-body-secondary footer-header">
                            {{ __('main.about_section.samsu') }}
                        </h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2">
                                <span class="nav-link p-0 text-body-secondary">
                                    <strong> {{ __('main.contac_us_section.contacts') }}:</strong>
                                    Axmedova Shahzoda +998909098657
                                </span>
                            </li>
                            <li class="nav-item mb-2">
                                <span class="nav-link p-0 text-body-secondary">
                                    <strong> E-mail: </strong>
                                    shahzodaaxmedova@gmail.com
                                </span>
                            </li>
                        </ul>
                    </div>

                    <div class="col-4 col-md-4 mb-3">
                        <h5 class="text-body-secondary footer-header">
                            {{ __('main.about_section.inyaz') }}
                        </h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2">
                                <span class="nav-link p-0 text-body-secondary">
                                    <strong> {{ __('main.contac_us_section.contacts') }}: </strong>

                                    Julmatova Saodat +998975786875, Narzikulova Feruza
                                    +998915569869</span>
                            </li>
                            <li class="nav-item mb-2">
                                <span class="nav-link p-0 text-body-secondary">
                                    <strong> {{ __('main.contac_us_section.email') }}: </strong>

                                    sjulmatova@gmail.com
                                </span>
                            </li>
                        </ul>
                    </div>

                    <div class="col-4 col-md-4 mb-3">
                        <h5 class="text-body-secondary footer-header">
                            {{ __('main.about_section.ShahrisabzSPI') }}
                        </h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2">
                                <span class="nav-link p-0 text-body-secondary">
                                    <strong> {{ __('main.contac_us_section.contacts') }}: </strong>
                                    Sardor Ximmatov +99895 335 23 99
                                </span>
                            </li>

                        </ul>
                    </div>
                </div>

                <div
                    class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top text-body-secondary">
                    <p class="text-body-secondary">© since 2024, ICTE</p>
                </div>
            </footer>
        </div>
    </section>

    <a class="page-scroll" href="#home">
        <div class="to-top-arrow">
            <span class="ion-ios-arrow-up"></span>
        </div>
    </a><!-- to top arrow end -->
    <script src="js/plugins.js"></script>
    <script src="js/goex.js"></script>
</body>

</html>
