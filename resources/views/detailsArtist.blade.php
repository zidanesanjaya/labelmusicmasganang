<!DOCTYPE html>
<html lang="en">

<head>
    <title>Single Album</title>
    @include('layouts.user.head')
    <link rel="stylesheet" type="text/css" href="{{ url('mixtape-master/styles/single.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('mixtape-master/styles/single_responsive.css') }}">
</head>

<body>

    <div class="super_container">

        <!-- begin::Header -->
        @include('layouts.user.menu')
        <!-- end::menu -->

        <div class="home">
            <div class="home_inner">
                <div class="home_container">
                    <div class="home_content text-center">
                        <div class="home_title">{{$data->name}}</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Single -->
        <div class="single">
            <div class="container">
                <div class="row d-flex align-items-center">

                    <!-- Single Info -->
                    <div class="col-lg-5">
                        <div class="single_info">
                            <div class="single_image"><img src="/storage/artist_images/{{$data->photo}}" alt=""></div>
                        </div>
                    </div>

                    <!-- Single Content -->
                    <div class="col-lg-7 single_content_col">
                        <div class="single_content">
                            <div class="single_info_list">
                                <ul>
                                    <li><span>Debut: </span>{{$data->debut}}</li>
                                    <li><span>Debut Album: </span>{{$data->debut_album}}</li>
                                    <li><span>Top Tracks: </span>{{$data->top_track}}</li>
                                    <li><span>Album: </span>{{$data->album}}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row d-flex align-items-center" style="margin-top: 50px;">

                    <!-- Single Info -->
                    <div class="col-lg-5">
                        <div class="single_info">
                            <div class="single_text">
                               {{$data->text}}
                            </div>
                        </div>
                    </div>

                    <!-- Single Content -->
                    <div class="col-lg-7 single_content_col">
                        <div class="single_content">
                            <div class="single_image"><img src="/storage/artist_images/{{$data->var1}}" alt=""></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('layouts.user.footer')
    </div>

    @include('layouts.user.js')
</body>

</html>