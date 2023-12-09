<!DOCTYPE html>
<html lang="en">

<head>
    <title>Mixtape</title>
    @include('layouts.user.head')
</head>

<body>

    <div class="super_container">

        <!-- begin::Header -->
        <header class="header">
            <div class="header_content d-flex flex-row align-items-center justify-content-end">
                <div class="logo"><a href="#">GNG Music Production</a></div>
                <nav class="main_nav">
                    <ul class="d-flex flex-row align-items-start justify-content-start">
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Artist</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </nav>
                <div class="hamburger ml-auto">
                    <div class="d-flex flex-column align-items-end justify-content-between">
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                </div>
            </div>
        </header>
        <!-- end::Header -->

        <!-- begin::menu -->
        <div class="menu">
            <div>
                <div class="menu_overlay"></div>
                <div class="menu_container d-flex flex-column align-items-start justify-content-center">
                    <nav class="menu_nav">
                        <ul class="d-flex flex-column align-items-start justify-content-start">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Music</a></li>
                            <li><a href="#">News</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- end::menu -->

        <!-- begin::carousel artist -->
        <div class="home">
            <div class="home_slider_container">

                <!-- Home Slider -->
                <div class="owl-carousel owl-theme home_slider">

                    <!-- Slide -->
                    <div class="owl-item">
                        <div class="background_image" style="background-image:url(/mixtape-master/images/index.jpg)"></div>
                        <div class="home_container">
                            <div class="home_container_inner d-flex flex-column align-items-center justify-content-center">
                                <div class="home_content text-center">
                                    <div class="home_subtitle">New single release</div>
                                    <div class="home_title">
                                        <h1>Love is all around</h1>
                                    </div>
                                    <div class="home_link"><a href="#">Listen on Soundcloud</a></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide -->
                    <div class="owl-item">
                        <div class="background_image" style="background-image:url(/mixtape-master/images/index.jpg)"></div>
                        <div class="home_container">
                            <div class="home_container_inner d-flex flex-column align-items-center justify-content-center">
                                <div class="home_content text-center">
                                    <div class="home_subtitle">New single release</div>
                                    <div class="home_title">
                                        <h1>Love is all around</h1>
                                    </div>
                                    <div class="home_link"><a href="#">Listen on Soundcloud</a></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide -->
                    <div class="owl-item">
                        <div class="background_image" style="background-image:url(/mixtape-master/images/index.jpg)"></div>
                        <div class="home_container">
                            <div class="home_container_inner d-flex flex-column align-items-center justify-content-center">
                                <div class="home_content text-center">
                                    <div class="home_subtitle">New single release</div>
                                    <div class="home_title">
                                        <h1>Love is all around</h1>
                                    </div>
                                    <div class="home_link"><a href="#">Listen on Soundcloud</a></div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- end::carousel artist -->

        <!-- begin::about us -->
        <div class="featured_album">
            <div class="background_image featured_background" style="background-image:url(/mixtape-master/images/featured.png)"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-6">
                        <div class="section_title_container">
                            <div class="section_title">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row featured_row row-lg-eq-height">

                    <!-- Featured Album Image -->
                    <div class="col-md-6">
                        <div class="featured_album_image">
                            <div class="image_overlay"></div>
                            <div class="background_image" style="background-image:url(/mixtape-master/images/featured_album.jpg)"></div>
                            <!-- <img src="/mixtape-master/images/featured_album.jpg" alt=""> -->
                        </div>
                    </div>

                    <!-- Featured Album Player -->
                    <div class="col-md-6 featured_album_col">
                        <div class="featured_album_player_container d-flex flex-column align-items-start justify-content-center">
                            <div class="featured_album_player">
                                <div class="featured_album_title_bar d-flex flex-row align-items-center justify-content-start">
                                    <div class="featured_album_title_container">
                                        <div class="featured_album_artist">GNG Music Production</div>
                                        <div class="featured_album_title">Love is all Around</div>
                                    </div>
                                </div>
                                <div id="jp_container_1" class="jp-audio" role="application" aria-label="media player">
                                    <div class="jp-type-playlist">
                                        <div class="jp-playlist container">
                                            <h4 class="container">
                                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Assumenda officia praesentium rerum earum eos, molestias deleniti ut asperiores nam hic enim. Earum laudantium voluptas accusamus, exercitationem maxime cum quod quos ab ipsum deserunt officiis et hic animi ipsa veritatis provident fugit perferendis laborum eius labore rem soluta! Nemo assumenda expedita dolores necessitatibus accusamus? Dolorem, ipsum neque. Dolorum magni laboriosam voluptatem quaerat labore ipsa nemo atque libero minus itaque autem, quos adipisci sunt repudiandae, laudantium recusandae esse consequatur corrupti alias dolores exercitationem cum. Dignissimos nam excepturi, amet natus corporis ex. Dolor sed eum eius recusandae tempore officiis. Quia natus beatae consequatur?
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="featured_album_title_bar d-flex flex-row align-items-center justify-content-start">
                                    <div class="featured_album_link ml-auto"><a href="/about">More</a></div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- end::about us -->

        <!-- begin::artist -->
        <div class="artist">
            <div class="container">
                <div class="artist_content">
                    <div class="section_title_container">
                        <div class="section_title">
                            <h1>The Artist</h1>
                        </div>
                    </div>
                    <div class="row d-flex align-items-center justify-content-around mt-lg-5" style="border: solid white;">
                        <div class="col-sm-1 col-md-3 col-3">
                            <div class="disc">
                                <a href="single.html">
                                    <img class="disc_image" src="https://picsum.photos/200/300">
                                    <div class="disc_container">
                                        <div>
                                            <div class="disc_content_1">
                                                <div class="disc_title">Mixtape</div>
                                                <div class="disc_subtitle">Music For the People</div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-1 col-md-3 col-3">
                            <div class="disc">
                                <a href="single.html">
                                    <img class="disc_image" src="https://picsum.photos/200/300">
                                    <div class="disc_container">
                                        <div>
                                            <div class="disc_content_1">
                                                <div class="disc_title">Mixtape</div>
                                                <div class="disc_subtitle">Music For the People</div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-1 col-md-3 col-3">
                            <div class="disc">
                                <a href="single.html">
                                    <img class="disc_image" src="https://picsum.photos/200/300">
                                    <div class="disc_container">
                                        <div>
                                            <div class="disc_content_1">
                                                <div class="disc_title">Mixtape</div>
                                                <div class="disc_subtitle">Music For the People</div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end::artist -->

        <!-- Shows -->

        <div class="shows">
            <div class="container">
                <div class="row" style="z-index:10;">
                    <div class="col">
                        <div class="section_title_container">
                            <div class="section_subtitle">Events</div>
                            <div class="section_title">
                                <h1>Upcoming Shows</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row shows_row">

                    <!-- Shows List -->
                    <div class="col-lg-8 order-lg-1 order-2 shows_list_col">
                        <div class="shows_list_container">
                            <ul class="shows_list">

                                <!-- Show -->
                                <li class="d-flex flex-row align-items-center justify-content-start">
                                    <div>
                                        <div class="show_date">18/07</div>
                                    </div>
                                    <div class="show_info d-flex flex-md-row flex-column align-items-md-center align-items-start justify-content-md-start justify-content-center">
                                        <div class="show_name"><a href="#">Electric Castle Festival</a></div>
                                        <div class="show_location">Cluj, Romania</div>
                                    </div>
                                    <div class="ml-auto">
                                        <div class="show_shop trans_200"><a href="#">Buy Tickets</a></div>
                                    </div>
                                </li>

                                <!-- Show -->
                                <li class="d-flex flex-row align-items-center justify-content-start">
                                    <div>
                                        <div class="show_date">20/07</div>
                                    </div>
                                    <div class="show_info d-flex flex-md-row flex-column align-items-md-center align-items-start justify-content-md-start justify-content-center">
                                        <div class="show_name"><a href="#">Ultra Music Festival</a></div>
                                        <div class="show_location">Miami, USA</div>
                                    </div>
                                    <div class="ml-auto">
                                        <div class="show_shop trans_200"><a href="#">Buy Tickets</a></div>
                                    </div>
                                </li>

                                <!-- Show -->
                                <li class="d-flex flex-row align-items-center justify-content-start">
                                    <div>
                                        <div class="show_date">03/08</div>
                                    </div>
                                    <div class="show_info d-flex flex-md-row flex-column align-items-md-center align-items-start justify-content-md-start justify-content-center">
                                        <div class="show_name"><a href="#">Untold Festival</a></div>
                                        <div class="show_location">Cluj, Romania</div>
                                    </div>
                                    <div class="ml-auto">
                                        <div class="show_shop trans_200"><a href="#">Buy Tickets</a></div>
                                    </div>
                                </li>

                                <!-- Show -->
                                <li class="d-flex flex-row align-items-center justify-content-start">
                                    <div>
                                        <div class="show_date">11/08</div>
                                    </div>
                                    <div class="show_info d-flex flex-md-row flex-column align-items-md-center align-items-start justify-content-md-start justify-content-center">
                                        <div class="show_name"><a href="#">Sun Kissed Festival</a></div>
                                        <div class="show_location">Paris, France</div>
                                    </div>
                                    <div class="ml-auto">
                                        <div class="show_shop trans_200"><a href="#">Buy Tickets</a></div>
                                    </div>
                                </li>

                                <!-- Show -->
                                <li class="d-flex flex-row align-items-center justify-content-start">
                                    <div>
                                        <div class="show_date">18/08</div>
                                    </div>
                                    <div class="show_info d-flex flex-md-row flex-column align-items-md-center align-items-start justify-content-md-start justify-content-center">
                                        <div class="show_name"><a href="#">Spanish Festival</a></div>
                                        <div class="show_location">Madrid, Spain</div>
                                    </div>
                                    <div class="ml-auto">
                                        <div class="show_shop trans_200"><a href="#">Buy Tickets</a></div>
                                    </div>
                                </li>

                                <!-- Show -->
                                <li class="d-flex flex-row align-items-center justify-content-start">
                                    <div>
                                        <div class="show_date">25/08</div>
                                    </div>
                                    <div class="show_info d-flex flex-md-row flex-column align-items-md-center align-items-start justify-content-md-start justify-content-center">
                                        <div class="show_name"><a href="#">Vikings Festival</a></div>
                                        <div class="show_location">Oslo, Norway</div>
                                    </div>
                                    <div class="ml-auto">
                                        <div class="show_shop trans_200"><a href="#">Buy Tickets</a></div>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>

                    <!-- Shows Image -->
                    <div class="col-lg-4 order-lg-2 order-1">
                        <div class="shows_image">
                            <div class="image_overlay"></div>
                            <img src="/mixtape-master/images/shows.jpg" alt="https://unsplash.com/@anthonydelanoix">
                        </div>
                    </div>

                </div>
            </div>
        </div>


        <!-- Extra -->

        <div class="extra">
            <div class="extra_container">
                <div class="background_image" style="background-image:url(/mixtape-master/images/extra.jpg)"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="extra_content d-flex flex-column align-items-start justify-content-center">
                                <div class="extra_title">
                                    <h1>Get your tickets now!</h1>
                                </div>
                                <div class="extra_text">
                                    <p>In vitae nisi aliquam, scelerisque leo a, volutpat sem. Vivamus rutrum dui fermentum eros hendrerit, id lobortis leo volutpat. Maecenas sollicitudin est in libero pretium interdum</p>
                                </div>
                                <div class="extra_button"><a href="#">Buy Now</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.user.footer')

    <script src="/mixtape-master/js/jquery-3.2.1.min.js"></script>
    <script src="/mixtape-master/styles/bootstrap-4.1.2/popper.js"></script>
    <script src="/mixtape-master/styles/bootstrap-4.1.2/bootstrap.min.js"></script>
    <script src="/mixtape-master/plugins/greensock/TweenMax.min.js"></script>
    <script src="/mixtape-master/plugins/greensock/TimelineMax.min.js"></script>
    <script src="/mixtape-master/plugins/scrollmagic/ScrollMagic.min.js"></script>
    <script src="/mixtape-master/plugins/greensock/animation.gsap.min.js"></script>
    <script src="/mixtape-master/plugins/greensock/ScrollToPlugin.min.js"></script>
    <script src="/mixtape-master/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
    <script src="/mixtape-master/plugins/easing/easing.js"></script>
    <script src="/mixtape-master/plugins/progressbar/progressbar.min.js"></script>
    <script src="/mixtape-master/plugins/parallax-js-master/parallax.min.js"></script>
    <script src="/mixtape-master/plugins/jPlayer/jquery.jplayer.min.js"></script>
    <script src="/mixtape-master/plugins/jPlayer/jplayer.playlist.min.js"></script>
    <script src="/mixtape-master/js/custom.js"></script>
</body>

</html>