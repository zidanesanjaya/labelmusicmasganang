<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home || GNG Music Production</title>
    @include('layouts.user.head')
    <link rel="stylesheet" type="text/css" href="{{ url('mixtape-master/styles/main_styles.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('mixtape-master/styles/responsive.css') }}">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
</head>

<body>

    <div class="super_container">

        <!-- begin::Header -->
        @include('layouts.user.menu')
        <!-- end::menu -->

        <!-- begin::carousel artist -->
        <div class="home">
            <div class="home_slider_container w-100">

                <!-- Home Slider -->
                <div class="owl-carousel owl-theme home_slider">

                    <!-- Slide -->
                    @foreach($jumbotron AS $key)
                    <div class="owl-item">
                        <div class="background_image img-fluid" style="background-image:url(/storage/jumbotron/{{$key->text}})"></div>
                        <div class="home_container">
                            <div class="home_container_inner d-flex flex-column align-items-center justify-content-center">
                                <div class="home_content text-center">
                                    <!-- <div class="home_subtitle">New single release</div> -->
                                    <div class="home_title">
                                        <h1>Our Artist</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- end::carousel artist -->

        <!-- begin::about us -->
        <div class="featured_album">
            <div class="background_image featured_background" style="background-image:url(/public/mixtape-master/images/featured.png)"></div>
            <!-- <div class="about_image featured_background" style="background-image:url(/public/mixtape-master/images/featured.png)"></div> -->
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
                            <div class="about_image" style="background-image:url(/storage/lainya/{{$about->var1}})"></div>
                            <!-- Gambar Ukuran 597x722 -->
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
                                                <?php
                                                $maxLength = 700;
                                                $aboutText = $about->text;
                                                if (strlen($aboutText) > $maxLength) {
                                                    $trimmedText = substr($aboutText, 0, $maxLength) . "...";
                                                    echo $trimmedText;
                                                } else {
                                                    echo $aboutText;
                                                }
                                                ?>
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

        <!-- begin::list artist -->
        <div class="listArtist container">
            <div class="row">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <p>The</p>
                            <h1>Artist</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row d-flex align-items-center justify-content-center pt-lg-5">
                @foreach($artist AS $key)
                <div class="col-sm-12 col-xl-4 col-md-4">
                    <img class="w-100 h-100 p-4 shadow-1-strong rounded" style="max-height:400px;max-width:400px;" src="/storage/artist_images/{{$key->text}}" alt="">
                </div>
                @endforeach
            </div>
            <div class="row d-flex align-items-end justify-content-end">
                <div class="featured_album_title_bar d-flex flex-row align-items-center justify-content-start">
                    <div class="featured_album_link ml-auto"><a href="/artist-page">Our Artist</a></div>
                </div>
            </div>
        </div>
        <!-- end::list artist -->
    </div>

    @include('layouts.user.footer')

    @include('layouts.user.js')
</body>

</html>