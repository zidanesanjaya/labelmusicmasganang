<!DOCTYPE html>
<html lang="en">

<head>
    <title>About us || GNG Music Production</title>
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
                <div class="parallax_background-home parallax-window-home" data-parallax="scroll" data-image-src="/mixtape-master/images/about.jpg" data-speed="0.8"></div>
                <div class="home_container">
                    <div class="home_content text-center">
                        <div class="home_title">About</div>
                        <div class="home_subtitle">us</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- <div class="discs">
            <div class="container">
                <div class="row discs_row">

                </div>
            </div>
        </div> -->

        <!-- begin::about -->
        <div class="container-fluid">
            <div class="about row d-flex align-items-center justify-content-center p-lg-5">
                <div class="col-sm-12 col-lg-6 p-2">
                    <div class="parallax_background-about parallax-window-about" data-parallax="scroll" data-image-src="https://picsum.photos/200" data-speed="0.8"></div>
                </div>
                <div class="col-sm-12 col-lg-6 text-justify">
                    <div class="row p-3">
                        <h1>About Us</h1>
                    </div>
                    <div class="row p-3">
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Adipisci vitae quia corrupti dolorum voluptates quas ea omnis repudiandae assumenda animi dicta autem dolores, iste ipsum distinctio accusantium laudantium consequatur odio!
                            Provident, maxime, hic cumque nostrum veniam quibusdam molestias sequi totam soluta assumenda iusto molestiae repellat harum? Corporis placeat voluptatibus perferendis quisquam, accusantium delectus ab! Ipsum suscipit laudantium modi asperiores ex.
                            Quam eos, doloribus, eius consequuntur illum reprehenderit nostrum accusamus aperiam necessitatibus nam, autem quae? Et ducimus asperiores facilis, itaque necessitatibus, veritatis iste, rem tempora ullam quisquam aut corporis delectus? Ipsum.
                            Minus laboriosam, deserunt ipsa numquam quis reiciendis, vel quod rerum, illo sed maxime. Distinctio ducimus necessitatibus numquam repudiandae consequatur fugit tempora dolores illum in, voluptatum deleniti blanditiis corrupti animi porro?
                            Soluta deserunt esse odio rerum fuga obcaecati eaque blanditiis maxime consequuntur eveniet nihil quis facere sint ipsa error porro, dolorum, nulla ipsum pariatur, labore nesciunt perspiciatis suscipit eius! Est, tempora.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- end::about -->

        <!-- begin::visi dan misi -->
        <div class="visimisi">
            <div class="visimisi_container">
                <div class="row d-flex justify-content-center align-items-center">

                    <!-- Visi -->
                    <div class="col-xl-6 col-md-12">
                        <div class="milestone d-flex flex-row align-items-center justify-content-center">
                            <div class="milestone_content">
                                <h1>
                                    Visi
                                </h1>
                            </div>
                        </div>
                    </div>

                    <!-- Misi -->
                    <div class="col-xl-6 col-md-12">
                        <div class="milestone d-flex flex-row align-items-center justify-content-center">
                            <div class="milestone_content">
                                <h1>
                                    Misi
                                </h1>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- end::visi dan misi -->

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