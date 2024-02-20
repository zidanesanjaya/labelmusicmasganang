<!DOCTYPE html>
<html lang="en">

<head>
    <title>Services || GNG Music Production</title>
    @include('layouts.user.head')
    <link rel="stylesheet" type="text/css" href="/public/mixtape-master/styles/services.css">
    <link rel="stylesheet" type="text/css" href="/public/mixtape-master/styles/services_responsive.css">
</head>

<body>

    <div class="super_container">

        <!-- begin::Header -->
        @include('layouts.user.menu')
        <!-- end::menu -->

        <!-- Home -->

        <div class="home">
            <div class="home_inner">
                <!-- Image artist: https://unsplash.com/@yoannboyer -->
                <!-- <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="/public/mixtape-master/images/blog.jpg" data-speed="0.8"></div> -->
                <div class="home_container">
                    <div class="home_content text-center">
                        <!-- <div class="home_subtitle">Just us</div> -->
                        <div class="home_title">Our Services</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- begin::services -->
        <div class="services">
            <div class="container">
                @foreach($services AS $data => $key)
                    @if($data % 2 == 0)
                        <div class="row flex-row arman d-flex align-items-center justify-content-center p-4 my-5 mx-1">
                    @elseif($data % 2 == 1)
                        <div class="row flex-row-reverse arman d-flex align-items-center justify-content-center p-4 my-5 mx-1">
                    @endif
                        <div class="col-sm-12 col-lg-3 d-flex align-items-center justify-content-center">
                            <img class="serviceimg" src="/storage/services/{{$key->var1}}" alt="">
                        </div>
                        <div class="col-sm-12 col-lg-9">
                            <h1>{{ ucwords(str_replace('_', ' ', $key->title)) }}</h1>
                            @php
                            echo $key->text
                            @endphp
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <!-- end::services -->

        @include('layouts.user.footer')
    </div>

    @include('layouts.user.js')
</body>

</html>