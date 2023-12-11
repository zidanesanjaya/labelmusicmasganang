<!DOCTYPE html>
<html lang="en">

<head>
    <title>About us</title>
    @include('layouts.user.head')
    <link rel="stylesheet" type="text/css" href="/mixtape-master/styles/about.css">
    <link rel="stylesheet" type="text/css" href="/mixtape-master/styles/about_responsive.css">
</head>

<body>

    <div class="super_container">

        <!-- begin::Header -->
        <header class="header">
            <div class="header_content d-flex flex-row align-items-center justify-content-end">
                <div class="logo"><a href="#">GNG Music Production</a></div>
                <nav class="main_nav">
                    <ul class="d-flex flex-row align-items-start justify-content-start">
                        <li><a href="/">Home</a></li>
                        <li class="active"><a href="/about">About us</a></li>
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
                            <li><a href="/">Home</a></li>
                            <li><a href="/about">About us</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Artist</a></li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- end::menu -->

        <!-- Home -->

        <div class="home">
            <div class="home_inner">
                <!-- Image artist: https://unsplash.com/@yoannboyer -->
                <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="/mixtape-master/images/about.jpg" data-speed="0.8"></div>
                <div class="home_container">
                    <div class="home_content text-center">
                        <div class="home_subtitle">Just us</div>
                        <div class="home_title">Discography</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Discs -->

        <div class="discs">
            <div class="container">
                <div class="row discs_row">

                    <!-- Disc -->
                    <div class="col-xl-4 col-md-6">
                        <div class="disc">
                            <a href="single.html">
                                <div class="disc_image"><img src="/mixtape-master/images/disc_1.jpg" alt="https://unsplash.com/@tanelah"></div>
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

                    <!-- Disc -->
                    <div class="col-xl-4 col-md-6">
                        <div class="disc">
                            <a href="single.html">
                                <div class="disc_image"><img src="/mixtape-master/images/disc_2.jpg" alt="https://unsplash.com/@kasperrasmussen"></div>
                                <div class="disc_container">
                                    <div>
                                        <div class="disc_content_2 d-flex flex-column align-items-center justify-content-center">
                                            <div>
                                                <div class="disc_title">Mixtape</div>
                                                <div class="disc_subtitle">the world is ours</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <!-- Disc -->
                    <div class="col-xl-4 col-md-6">
                        <div class="disc">
                            <a href="single.html">
                                <div class="disc_image"><img src="/mixtape-master/images/disc_3.jpg" alt="https://unsplash.com/@photones11"></div>
                                <div class="disc_container">
                                    <div>
                                        <div class="disc_content_3">
                                            <div>
                                                <div class="disc_title">Mixtape</div>
                                                <div class="disc_subtitle">Singles</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <!-- Disc -->
                    <div class="col-xl-4 col-md-6">
                        <div class="disc">
                            <a href="single.html">
                                <div class="disc_image"><img src="/mixtape-master/images/disc_4.jpg" alt="https://unsplash.com/@rexcuando"></div>
                                <div class="disc_container">
                                    <div>
                                        <div class="disc_content_4 d-flex flex-column align-items-start justify-content-end">
                                            <div class="text-left">
                                                <div class="disc_title">Mixtape</div>
                                                <div class="disc_subtitle">1983</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <!-- Disc -->
                    <div class="col-xl-4 col-md-6">
                        <div class="disc">
                            <a href="single.html">
                                <div class="disc_image"><img src="/mixtape-master/images/disc_5.jpg" alt="https://unsplash.com/@alicemoore"></div>
                                <div class="disc_container">
                                    <div>
                                        <div class="disc_content_5">
                                            <div class="disc_title">Mixtape</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <!-- Disc -->
                    <div class="col-xl-4 col-md-6">
                        <div class="disc">
                            <a href="single.html">
                                <div class="disc_image"><img src="/mixtape-master/images/disc_6.jpg" alt="https://unsplash.com/@arstyy"></div>
                                <div class="disc_container">
                                    <div>
                                        <div class="disc_content_6">
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

        <!-- Artist -->

        <div class="artist">
            <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="/mixtape-master/images/artist_2.jpg" data-speed="0.8"></div>
            <div class="container">
                <div class="row">

                    <!-- Artist Content -->
                    <div class="col-lg-7 offset-lg-5">
                        <div class="artist_content">
                            <div class="section_title_container">
                                <div class="section_subtitle">Events</div>
                                <div class="section_title">
                                    <h1>The Artist</h1>
                                </div>
                            </div>
                            <div class="artist_text">
                                <p> In vitae nisi aliquam, scelerisque leo a, volutpat sem. Vivamus rutrum dui fermentum eros hendrerit, id lobortis leo volutpat. Maecenas sollicitudin est in libero pretium interdum. Nullam volutpat dui sem, ac congue purus luctus nec. Curabitur luctus luctus erat, sit amet facilisis quam congue quis. Quisque ornare luctus erat id dignissim. Nullam ac nunc quis ex porttitor luctus.</p>
                                <p>Integer sed facilisis eros. In iaculis rhoncus velit in malesuada. In hac habitasse platea dictumst. Fusce erat ex, consectetur sit amet ornare suscipit, porta et erat. Donec nec nisi in nibh commodo laoreet. Mauris dapibus justo ut feugiat malesuada. Fusce ultricies ante tortor, non vestibulum est feugiat ut.</p>
                            </div>
                            <div class="artist_sig"><img src="/mixtape-master/images/sig.png" alt=""></div>
                            <div class="single_player_container d-flex flex-column align-items-start justify-content-center">
                                <div class="single_player">
                                    <div id="jplayer_2" class="jp-jplayer"></div>
                                    <div id="jp_container_2" class="jp-audio" role="application" aria-label="media player">
                                        <div class="jp-type-single">
                                            <div class="player_details d-flex flex-row align-items-center justify-content-start">
                                                <div class="jp-details">
                                                    <div>playing</div>
                                                    <div class="jp-title" aria-label="title">&nbsp;</div>
                                                </div>
                                                <div class="jp-controls-holder ml-auto">
                                                    <button class="jp-play" tabindex="0"></button>
                                                </div>
                                            </div>
                                            <div class="player_controls">
                                                <div class="jp-gui jp-interface d-flex flex-row align-items-center justify-content-start">
                                                    <div class="jp-controls-holder time_controls d-flex flex-row align-items-center justify-content-start">
                                                        <div>
                                                            <div class="jp-current-time" role="timer" aria-label="time">&nbsp;</div>
                                                        </div>
                                                        <div class="jp-progress">
                                                            <div class="jp-seek-bar">
                                                                <div class="jp-play-bar"></div>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="jp-duration ml-auto" role="timer" aria-label="duration">&nbsp;</div>
                                                        </div>
                                                    </div>
                                                    <div class="jp-volume-controls d-flex flex-row align-items-center justify-content-start ml-auto">
                                                        <button class="jp-mute" tabindex="0"></button>
                                                        <div class="jp-volume-bar">
                                                            <div class="jp-volume-bar-value"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="jp-no-solution">
                                                <span>Update Required</span>
                                                To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Milestones -->

        <div class="milestones">
            <div class="milestones_container">
                <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="/mixtape-master/images/milestones.jpg" data-speed="0.8"></div>
                <div class="container">
                    <div class="row milestones_row">

                        <!-- Milestone -->
                        <div class="col-xl-3 col-md-6 milestone_col">
                            <div class="milestone d-flex flex-row align-items-center justify-content-start">
                                <div class="milestone_icon"><img src="/mixtape-master/images/icon_1.svg" alt="https://www.flaticon.com/authors/smashicons"></div>
                                <div class="milestone_content">
                                    <div class="milestone_counter" data-end-value="298" data-sign-after="k">0</div>
                                    <div class="milestone_text">Albums sold</div>
                                </div>
                            </div>
                        </div>

                        <!-- Milestone -->
                        <div class="col-xl-3 col-md-6 milestone_col">
                            <div class="milestone d-flex flex-row align-items-center justify-content-start">
                                <div class="milestone_icon"><img src="/mixtape-master/images/icon_2.svg" alt="https://www.flaticon.com/authors/smashicons"></div>
                                <div class="milestone_content">
                                    <div class="milestone_counter" data-end-value="183">0</div>
                                    <div class="milestone_text">Live Concerts</div>
                                </div>
                            </div>
                        </div>

                        <!-- Milestone -->
                        <div class="col-xl-3 col-md-6 milestone_col">
                            <div class="milestone d-flex flex-row align-items-center justify-content-start">
                                <div class="milestone_icon"><img src="/mixtape-master/images/icon_3.svg" alt="https://www.flaticon.com/authors/smashicons"></div>
                                <div class="milestone_content">
                                    <div class="milestone_counter" data-end-value="37">0</div>
                                    <div class="milestone_text">Awards won</div>
                                </div>
                            </div>
                        </div>

                        <!-- Milestone -->
                        <div class="col-xl-3 col-md-6 milestone_col">
                            <div class="milestone d-flex flex-row align-items-center justify-content-start">
                                <div class="milestone_icon"><img src="/mixtape-master/images/icon_4.svg" alt="https://www.flaticon.com/authors/smashicons"></div>
                                <div class="milestone_content">
                                    <div class="milestone_counter" data-end-value="14">0</div>
                                    <div class="milestone_text">New Singles</div>
                                </div>
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
    <script src="/mixtape-master/js/about.js"></script>
</body>

</html>