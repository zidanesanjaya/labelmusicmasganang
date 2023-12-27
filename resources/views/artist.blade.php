<!DOCTYPE html>
<html lang="en">

<head>
    <title>Artist || GNG Music Production</title>
    @include('layouts.user.head')
    <link rel="stylesheet" type="text/css" href="/mixtape-master/styles/artist.css">
    <link rel="stylesheet" type="text/css" href="/mixtape-master/styles/artist_responsive.css">
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
                        <li><a href="/about">About us</a></li>
                        <li><a href="/services">Services</a></li>
                        <li class="active"><a href="/artist">Artist</a></li>
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
                            <li><a href="/services">Services</a></li>
                            <li><a href="/artist">Artist</a></li>
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
                <!-- <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="/mixtape-master/images/blog.jpg" data-speed="0.8"></div> -->
                <div class="home_container">
                    <div class="home_content text-center">
                        <!-- <div class="home_subtitle">Just us</div> -->
                        <div class="home_title">Artist</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- begin::search -->
        <div class="container">
            <div class="search_container">
                <form action="#" id="#" class="search_form">
                    <input type="search" class="search_input" placeholder="Search">
                </form>
            </div>
        </div>
        <!-- end::search -->

        <!-- begin::List Artist -->
        <div class="artist">
            <div class="artist_container">
                <div class="allArtist row d-flex align-items-center justify-content-between p-4 my-5">
                    <div class="listartist col-sm-3 my-2">
                        <img class="artistImage" src="https://picsum.photos/200" alt="">

                    </div>
                    <div class="listartist col-sm-3 my-2">
                        <img class="artistImage" src="https://picsum.photos/200" alt="">

                    </div>
                    <div class="listartist col-sm-3 my-2">
                        <img class="artistImage" src="https://picsum.photos/200" alt="">

                    </div>
                    <div class="listartist col-sm-3 my-2">
                        <img class="artistImage" src="https://picsum.photos/200" alt="">

                    </div>
                </div>
            </div>
        </div>
        <!-- end::List Artist -->

        @include('layouts.user.footer')
    </div>

    @include('layouts.user.js')
</body>

</html>