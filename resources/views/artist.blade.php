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
        @include('layouts.user.menu')
        <!-- end::Header -->

        <!-- begin::menu -->
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
                <form action="{{route('page.artist')}}" class="search_form" method="get">
                    <input type="search" name="artist_name" class="search_input" placeholder="Search">
                </form>
            </div>
        </div>
        <!-- end::search -->

        <!-- begin::List Artist -->
        <div class="artist">
            <div class="artist_container">
                <div class="allArtist row d-flex align-items-center justify-content-around p-4 my-5">
                    @foreach($data AS $key)
                    <div class="listartist col-sm-3 my-2">
                        <a href="/artist-detail/{{$key->id}}">
                            <img src="/storage/artist_images/{{$key->text}}" class="artistImage w-100 h-100 shadow-1-strong rounded" style="max-height:300px;max-width:300px;"  alt="">
                            <h2 class="artistName py-2">{{$key->title}}</h2>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- end::List Artist -->

        @include('layouts.user.footer')
    </div>

    @include('layouts.user.js')
</body>

</html>