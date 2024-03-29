<!--========== BEGIN #HEADER ==========-->
<header id="header">
    <!-- Begin .top-menu -->
    <div class="top-menu">
        <!-- Begin .container -->
        <div class="container">
            <!-- Begin .left-top-menu -->
            <ul class="left-top-menu">
                <li>
                    <a href="javascript:void(0)" class="facebook"><i class="fa fa-facebook"></i></a>
                </li>
                <li>
                    <a href="javascript:void(0)" class="twitter"><i class="fa fa-twitter"></i></a>
                </li>
                <li>
                    <a href="javascript:void(0)" class="youtube">
                        <i class="fa fa-youtube"></i></a>
                </li>
                <li>
                    <a href="javascript:void(0)" class="google-plus"><i class="fa fa-google-plus"></i></a>
                </li>
                <li>
                    <a href="javascript:void(0)" class="linkedin"><i class="fa fa-linkedin"></i></a>
                </li>
                <li>
                    <a href="javascript:void(0)" class="instagram">
                        <i class="fa fa-instagram"></i></a>
                </li>
                <li class="address">
                    <a href="tel:+880 (1951) 254 193"><i class="fa fa-phone"></i> +00 (123) 456
                        7890</a>
                </li>
                <li class="address">
                    <a href="mailto:{{ env('MAIL_FROM_ADDRESS') }}"><i class="fa fa-envelope-o"></i>
                        {{ env('MAIL_FROM_ADDRESS') }}</a>
                </li>
            </ul>
            <!-- End .left-top-menu -->
            <!-- Begin .right-top-menu -->
            <ul class="right-top-menu pull-right">
                <li class="contact">
                    <a href="contact.html"><i class="fa fa-map-marker fa-i"></i></a>
                </li>
                <li class="about">
                    <a href="about-us.html"><i class="fa fa-user fa-i"></i></a>
                </li>
                <li>
                    <div class="search-container">
                        <div class="search-icon-btn">
                            <span style="cursor: pointer"><i class="fa fa-search"></i></span>
                        </div>
                        <div class="search-input">
                            <input type="search" class="search-bar" placeholder="Search..." title="Search" />
                        </div>
                    </div>
                </li>
            </ul>
            <!-- End .right-top-menu -->
        </div>
        <!-- End .container -->
    </div>
    <!-- End .top-menu -->
    <!-- Begin .container -->
    <div class="container">
        <!-- Begin .header-logo -->
        <div class="header-logo">
            <a href="index.html"><img src="{{ url('img/logo.png') }}" style="max-width: 46px" alt="Site Logo" />
                <h1>24h <span>News</span></h1>
                <h4>Your 24h News Source</h4>
            </a>
        </div>
        <!-- End .header-logo -->
        <!-- Begin .header-add-place -->
        <div class="header-add-place">
            <div class="desktop-add">
                <a href="https://themeforest.net/item/24h-news-broadcast-news-tv-channel-news-magazine-template/18614179"
                    target="_blank"><img src="{{ url('img/banner_728x90.jpg') }}" alt="" /></a>
            </div>
        </div>
        <!-- End .header-add-place -->
        <!--========== BEGIN .NAVBAR #MOBILE-NAV ==========-->
        <nav class="navbar navbar-default" id="mobile-nav">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" id="sidenav-toggle">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="sidenav-header-logo">
                    <a href="index.html"><img src="{{ url('img/logo.png') }}" alt="Site Logo" />
                        <h2>24h <span>News</span></h2>
                        <h5>Your 24h News Source</h5>
                    </a>
                </div>
            </div>
            <div class="sidenav" data-sidenav data-sidenav-toggle="#sidenav-toggle">
                <button type="button" class="navbar-toggle active" data-toggle="collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="sidenav-brand">
                    <div class="sidenav-header-logo">
                        <a href="index.html"><img src="{{ url('img/logo.png') }}" alt="Site Logo" />
                            <h2>24h <span>News</span></h2>
                            <h5>Your 24h News Source</h5>
                        </a>
                    </div>
                </div>
                <ul class="sidenav-menu">
                    <li>
                        <a href="index.html" class="active">Home</a>
                        <div class="icon-sub-menu" data-sidenav-dropdown-toggle>
                            <span class="sidenav-dropdown-icon show" data-sidenav-dropdown-icon></span><span
                                class="sidenav-dropdown-icon up-icon" data-sidenav-dropdown-icon></span>
                        </div>
                        <ul class="sidenav-dropdown" data-sidenav-dropdown>
                            <li>
                                <a href="watch-live.html">Watch Live 24/7</a>
                            </li>
                            <li>
                                <a href="24-tv-radio.html">24 TV & Radio</a>
                            </li>
                            <li>
                                <a href="web-shows.html">Web Shows</a>
                            </li>
                            <li>
                                <a href="24-news-store.html">24 News Store</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="world.html">World</a>
                        <div class="icon-sub-menu" data-sidenav-dropdown-toggle>
                            <span class="sidenav-dropdown-icon show" data-sidenav-dropdown-icon></span><span
                                class="sidenav-dropdown-icon up-icon" data-sidenav-dropdown-icon></span>
                        </div>
                        <ul class="sidenav-dropdown" data-sidenav-dropdown>
                            <li>
                                <a href="africa.html">Africa</a>
                            </li>
                            <li>
                                <a href="antarctica.html">Antarctica</a>
                            </li>
                            <li><a href="asia.html">Asia</a></li>
                            <li>
                                <a href="australia.html">Australia</a>
                            </li>
                            <li>
                                <a href="europe.html">Europe</a>
                            </li>
                            <li>
                                <a href="middle-east.html">Middle East</a>
                            </li>
                            <li>
                                <a href="north-america.html">North America</a>
                            </li>
                            <li>
                                <a href="south-america.html">South America</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="news.html">News</a>
                        <div class="icon-sub-menu" data-sidenav-dropdown-toggle>
                            <span class="sidenav-dropdown-icon show" data-sidenav-dropdown-icon></span><span
                                class="sidenav-dropdown-icon up-icon" data-sidenav-dropdown-icon></span>
                        </div>
                        <ul class="sidenav-dropdown" data-sidenav-dropdown>
                            <li>
                                <a href="politics.html">Politics</a>
                            </li>
                            <li>
                                <a href="business.html">Business</a>
                            </li>
                            <li>
                                <a href="tech-science.html">Tech-Science</a>
                            </li>
                            <li>
                                <a href="lifestyle.html">Lifestyle</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="sport.html">Sport</a>
                        <div class="icon-sub-menu" data-sidenav-dropdown-toggle>
                            <span class="sidenav-dropdown-icon show" data-sidenav-dropdown-icon></span><span
                                class="sidenav-dropdown-icon up-icon" data-sidenav-dropdown-icon></span>
                        </div>
                        <ul class="sidenav-dropdown" data-sidenav-dropdown>
                            <li>
                                <a href="americanfootball.html">American Football</a>
                            </li>
                            <li>
                                <a href="soccer.html">Soccer</a>
                            </li>
                            <li>
                                <a href="basketball.html">Basketball</a>
                            </li>
                            <li>
                                <a href="formula-1.html">Formula 1</a>
                            </li>
                            <li>
                                <a href="tennis.html">Tennis</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="health.html">Health</a>
                        <div class="icon-sub-menu" data-sidenav-dropdown-toggle>
                            <span class="sidenav-dropdown-icon show" data-sidenav-dropdown-icon></span><span
                                class="sidenav-dropdown-icon up-icon" data-sidenav-dropdown-icon></span>
                        </div>
                        <ul class="sidenav-dropdown" data-sidenav-dropdown>
                            <li>
                                <a href="health-home.html">Health Home</a>
                            </li>
                            <li>
                                <a href="men-health.html">Men's Health</a>
                            </li>
                            <li>
                                <a href="women-health.html">Women's Health</a>
                            </li>
                            <li>
                                <a href="children-health.html">Children's Health</a>
                            </li>
                            <li>
                                <a href="alternative-medicine.html">Alternative Medicine</a>
                            </li>
                            <li>
                                <a href="nutrition.html">Nutrition & Fitness</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="travel.html">Travel</a>
                        <div class="icon-sub-menu" data-sidenav-dropdown-toggle>
                            <span class="sidenav-dropdown-icon show" data-sidenav-dropdown-icon></span><span
                                class="sidenav-dropdown-icon up-icon" data-sidenav-dropdown-icon></span>
                        </div>
                        <ul class="sidenav-dropdown" data-sidenav-dropdown>
                            <li>
                                <a href="destinations.html">Destinations</a>
                            </li>
                            <li>
                                <a href="types-of-trip.html">Types Of Trip</a>
                            </li>
                            <li>
                                <a href="national-parks.html">National Parks</a>
                            </li>
                            <li>
                                <a href="hotels.html">Hotels</a>
                            </li>
                            <li>
                                <a href="food-drinks.html">Food & drinks</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="art-entertainment.html">Art & Entertainment</a>
                        <div class="icon-sub-menu" data-sidenav-dropdown-toggle>
                            <span class="sidenav-dropdown-icon show" data-sidenav-dropdown-icon></span><span
                                class="sidenav-dropdown-icon up-icon" data-sidenav-dropdown-icon></span>
                        </div>
                        <ul class="sidenav-dropdown" data-sidenav-dropdown>
                            <li>
                                <a href="music-opera.html">Music & Opera</a>
                            </li>
                            <li>
                                <a href="art-design.html">Art & design</a>
                            </li>
                            <li>
                                <a href="theatre-dance.html">Theatre & Dance</a>
                            </li>
                            <li>
                                <a href="celebrity-film.html">Celebrity & Film</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="tv-schedule.html">TV Schedule</a>
                    </li>
                    <li>
                        <a href="#">More</a>
                        <div class="icon-sub-menu" data-sidenav-dropdown-toggle>
                            <span class="sidenav-dropdown-icon show" data-sidenav-dropdown-icon></span><span
                                class="sidenav-dropdown-icon up-icon" data-sidenav-dropdown-icon></span>
                        </div>
                        <ul class="sidenav-dropdown" data-sidenav-dropdown>
                            <li>
                                <a href="coming-soon.html">Coming Soon</a>
                            </li>
                            <li><a href="autos.html">Autos</a></li>
                            <li><a href="deals.html">Deals</a></li>
                            <li>
                                <a href="environment.html">Environment</a>
                            </li>
                            <li>
                                <a href="about-us.html">About Us</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Pages</a>
                        <div class="icon-sub-menu" data-sidenav-dropdown-toggle>
                            <span class="sidenav-dropdown-icon show" data-sidenav-dropdown-icon></span><span
                                class="sidenav-dropdown-icon up-icon" data-sidenav-dropdown-icon></span>
                        </div>
                        <ul class="sidenav-dropdown" data-sidenav-dropdown>
                            <li>
                                <a href="single-post.html">Single Post</a>
                            </li>
                            <li>
                                <a href="404.html">Error 404</a>
                            </li>
                            <li>
                                <a href="shortcodes.html">Shortcodes</a>
                            </li>
                            <li><a href="video.html">Video</a></li>
                            <li>
                                <a href="video-full.html">Video Full Width</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                        <div class="icon-sub-menu" data-sidenav-dropdown-toggle>
                            <span class="sidenav-dropdown-icon show" data-sidenav-dropdown-icon></span><span
                                class="sidenav-dropdown-icon up-icon" data-sidenav-dropdown-icon></span>
                        </div>
                        <ul class="sidenav-dropdown" data-sidenav-dropdown>
                            <li>
                                <a href="contact.html">Contact</a>
                            </li>
                            <li>
                                <a href="contact-1.html">Contact 1</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        <!--========== END .NAVBAR #MOBILE-NAV ==========-->
    </div>
    <!-- End .container -->
    <!--========== BEGIN .NAVBAR #FIXED-NAVBAR ==========-->
    <div class="navbar" id="fixed-navbar">
        <!--========== BEGIN MAIN-MENU .NAVBAR-COLLAPSE COLLAPSE #FIXED-NAVBAR-TOOGLE ==========-->
        <div class="main-menu nav navbar-collapse collapse" id="fixed-navbar-toggle">
            <!--========== BEGIN .CONTAINER ==========-->
            <div class="container">
                <!-- Begin .nav navbar-nav -->
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="index.html">Home</a>
                    </li>
                    <li><a href="world.html">World</a></li>
                    <li><a href="news.html">News</a></li>
                    <li><a href="sport.html">Sport</a></li>
                    <li><a href="health.html">Health</a></li>
                    <li><a href="travel.html">Travel</a></li>
                    <li>
                        <a href="art-entertainment.html">Art & Entertainment</a>
                    </li>
                    <li>
                        <a href="tv-schedule.html">TV Schedule</a>
                    </li>
                    <!--========== BEGIN .DROPDOWN ==========-->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">More</a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="coming-soon.html">Coming Soon</a>
                            </li>
                            <li><a href="autos.html">Autos</a></li>
                            <li><a href="deals.html">Deals</a></li>
                            <li>
                                <a href="environment.html">Environment</a>
                            </li>
                            <li>
                                <a href="about-us.html">About us</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages</a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="single-post.html">Single Post</a>
                            </li>
                            <li>
                                <a href="404.html">Error 404 Page</a>
                            </li>
                            <li>
                                <a href="shortcodes.html">Shortcodes</a>
                            </li>
                            <li><a href="video.html">Video</a></li>
                            <li>
                                <a href="video-full.html">Video Full Width</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Contact</a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="contact.html">Contact</a>
                            </li>
                            <li>
                                <a href="contact-1.html">Contact 1</a>
                            </li>
                        </ul>
                    </li>
                    <!--========== END .DROPDOWN ==========-->
                    <!--========== BEGIN DROPDOWN MEGA-DROPDOWN ==========-->
                    <li class="dropdown mega-dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Mega Menu</a>
                        <ul class="dropdown-menu mega-dropdown-menu">
                            <!-- Begin col-sm-4-->
                            <li class="col-sm-4">
                                <h3 class="title">
                                    24h News In Pictures
                                </h3>
                                <!-- Begin carousel-1-->
                                <div id="carousel-1" class="nav-slider carousel slide slide-carousel"
                                    data-ride="carousel">
                                    <!-- Begin carousel-indicators-->
                                    <ol class="carousel-indicators">
                                        <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
                                        <li data-target="#carousel-1" data-slide-to="1"></li>
                                        <li data-target="#carousel-1" data-slide-to="2"></li>
                                    </ol>
                                    <!-- End carousel-indicators-->
                                    <!-- Begin carousel-inner-->
                                    <div class="carousel-inner">
                                        <div class="item active">
                                            <a href="#"><img src="{{ url('img/menu_slide-image01.jpg') }}"
                                                    alt="" /></a>
                                        </div>
                                        <div class="item">
                                            <img src="{{ url('img/menu_slide-image02.jpg') }}" alt="" />
                                        </div>
                                        <div class="item">
                                            <img src="{{ url('img/menu_slide-image03.jpg') }}" alt="" />
                                        </div>
                                    </div>
                                    <!-- End carousel-inner-->
                                    <a class="left carousel-control" href="#carousel-1" role="button"
                                        data-slide="prev">
                                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="right carousel-control" href="#carousel-1" role="button"
                                        data-slide="next">
                                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                                <!-- End carousel-1-->
                            </li>
                            <!-- End col-sm-4 -->
                            <!-- Begin col-sm-4 -->
                            <li class="col-sm-4">
                                <h3 class="title">Latest News</h3>
                                <ul class="media-list">
                                    <li class="media">
                                        <a class="pull-right" href="news.html"><img class="img-responsive"
                                                alt="" src="{{ url('img/menu_small-image01.jpg') }}" /></a>
                                        <div class="media-body">
                                            <p>
                                                <a href="news.html" target="_blank"><span
                                                        class="bg-1">News</span></a><a href="news.html">Thousands of
                                                    people have
                                                    demonstrated
                                                    against...</a>
                                            </p>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <a class="pull-right" href="sport.html"><img
                                                src="{{ url('img/menu_small-image02.jpg') }}" alt=""
                                                class="img-image media-object" /></a>
                                        <div class="media-body">
                                            <p>
                                                <a href="sport.html" target="_blank"><span
                                                        class="bg-4">Sport</span></a><a href="sport.html">Europe's
                                                    top
                                                    four leagues are
                                                    to be guaranteed
                                                    four
                                                    places...</a>
                                            </p>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <a class="pull-right" href="health.html"><img
                                                src="{{ url('img/menu_small-image03.jpg') }}" alt=""
                                                class="img-image media-object" /></a>
                                        <div class="media-body">
                                            <p>
                                                <a href="health.html" target="_blank"><span
                                                        class="bg-2">Health</span></a><a href="health.html">Robot
                                                    performs
                                                    surgery on soft
                                                    tissue better
                                                    than human...</a>
                                            </p>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <a class="pull-right" href="lifestyle.html"><img
                                                src="{{ url('img/menu_small-image04.jpg') }}" alt=""
                                                class="img-image media-object" /></a>
                                        <div class="media-body">
                                            <p>
                                                <a href="lifestyle.html" target="_blank"><span
                                                        class="bg-9">Lifestyle</span></a><a href="lifestyle.html">A
                                                    positive
                                                    lifestyle can
                                                    bring you
                                                    happiness...</a>
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <!-- End col-sm-4 -->
                            <!-- Begin col-sm-4 -->
                            <li class="col-sm-4">
                                <h3 class="title">Video</h3>
                                <div class="video-container">
                                    <iframe
                                        src="https://player.vimeo.com/video/100192146?title=0&amp;byline=0&amp;portrait=0"
                                        class="video" title="Advertisement"></iframe>
                                </div>
                            </li>
                            <!-- End col-sm-4 -->
                            <!-- Begin col-sm-8 -->
                            <li class="col-sm-8">
                                <h3 class="title">About Us</h3>
                                <p>
                                    <a href="about-us.html" target="_blank"><strong>24h News</strong>
                                        is among the world's
                                        entry-posters in online news
                                        and information delivery.
                                        Help us make your comments
                                        count. Use our viewer
                                        comment page to tell us what
                                        you think about our shows
                                        and our hot topics for the
                                        day.</a>
                                </p>
                            </li>
                            <!-- End col-sm-8 -->
                            <!-- Begin col-sm-4 -->
                            <li class="col-sm-4">
                                <h3 class="title">Follow Us</h3>
                                <div class="menu-social-icons">
                                    <ul>
                                        <li>
                                            <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" class="youtube"><i class="fa fa-youtube"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" class="google-plus"><i
                                                    class="fa fa-google-plus"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" class="rss"><i class="fa fa-rss"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" class="tumblr"><i class="fa fa-tumblr"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <!-- End col-sm-4 -->
                        </ul>
                    </li>
                    <!--========== END DROPDOWN MEGA-DROPDOWN ==========-->
                </ul>
                <!--========== END .NAV NAVBAR-NAV ==========-->
            </div>
            <!--========== END .CONTAINER ==========-->
        </div>
        <!--========== END MAIN-MENU .NAVBAR-COLLAPSE COLLAPSE #FIXED-NAVBAR-TOOGLE ==========-->
        <!--========== BEGIN .SECOND-MENU NAVBAR #NAV-BELOW-MAIN ==========-->
        <div class="second-menu navbar" id="nav-below-main">
            <!-- Begin .container -->
            <div class="container">
                <!-- Begin .collapse navbar-collapse -->
                <div class="collapse navbar-collapse nav-below-main">
                    <!-- Begin .nav navbar-nav -->
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="watch-live.html">Watch Live 24/7</a>
                        </li>
                        <li>
                            <a href="24-tv-radio.html">24 TV & Radio</a>
                        </li>
                        <li>
                            <a href="web-shows.html">Web Shows</a>
                        </li>
                        <li>
                            <a href="24-news-store.html">24 News Store</a>
                        </li>
                    </ul>
                    <!-- End .nav navbar-nav -->
                </div>
                <!-- End .collapse navbar-collapse -->
                <!-- Begin .clock -->
                <div class="clock">
                    <div id="time"></div>
                    <div id="date"></div>
                </div>
                <!-- End .clock -->
            </div>
            <!-- End .container -->
        </div>
        <!--========== END .SECOND-MENU NAVBAR #NAV-BELOW-MAIN ==========-->
    </div>
</header>
<!--========== END #HEADER ==========-->
