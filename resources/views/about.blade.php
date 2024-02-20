<!DOCTYPE html>
<html lang="en">

<head>
    <title>About us || GNG Music Production</title>
    @include('layouts.user.head')
    <link rel="stylesheet" type="text/css" href="{{ url('mixtape-master/styles/about.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('mixtape-master/styles/about_responsive.css') }}">
</head>

<body>

    <div class="super_container">

    @include('layouts.user.menu')
        <!-- Home -->

        <div class="home">
            <div class="home_inner">
                <!-- Image artist: https://unsplash.com/@yoannboyer -->
                <div class="parallax_background-home parallax-window-home" data-parallax="scroll" data-image-src="/storage/lainya/{{$about->var4}}" data-speed="0.8"></div>
                <div class="home_container">
                    <div class="home_content text-center">
                        <div class="home_title">Discover</div>
                        <div class="home_subtitle">us</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- begin::about -->
        <div class="container-fluid">
            <div class="about row d-flex align-items-center justify-content-center px-lg-5">
                <div class="col-sm-12 col-lg-6 p-2">
                    <div class="parallax_background-about parallax-window-about" data-parallax="scroll" data-image-src="/storage/lainya/{{$about->var2}}" data-speed="0.8"></div>
                </div>
                <div class="aboutcard col-sm-12 col-lg-6 text-justify">
                    <div class="row p-3">
                        <h1>About Us</h1>
                    </div>
                    <div class="row p-3">
                        @php
                            echo $about->text
                        @endphp
                    </div>
                </div>
            </div>
            <div class="detailAbout row d-flex flex-row-reverse align-top justify-content-center px-lg-5">
                <div class="col-sm-12 col-lg-6 p-2">
                    <div class="parallax_background-about parallax-window-about" data-parallax="scroll" data-image-src="/storage/lainya/{{$about->var3}}" data-speed="0.8"></div>
                </div>
                <div class="col-sm-12 col-lg-6 text-justify">
                    <p class="p-3">
                       {{$about->var5}}
                    </p>
                </div>
            </div>
        </div>
        <!-- end::about -->

        <!-- begin::visi dan misi -->
        <div class="visimisi">
            <div class="visimisi_container">
                <div class="headvimi">
                    <h1>
                        Visi dan Misi
                    </h1>
                </div>
                <!-- Visi -->
                <div class="row d-flex justify-content-center align-items-center">
                    <div class="col-xl-12">
                        <div class="milestone d-flex flex-row align-items-center justify-content-center">
                            <div class="milestone_content">
                                <h1>
                                    Visi
                                </h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <div class="milestone d-flex flex-row align-items-center justify-content-center">
                            <div class="milestone_content">
                            @php
                                echo $visi->text
                            @endphp
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Misi -->
                <div class="row d-flex justify-content-center align-items-center pt-xl-5">
                    <div class="col-xl-12">
                        <div class="milestone d-flex flex-row align-items-center justify-content-center">
                            <div class="milestone_content">
                                <h1>
                                    Misi
                                </h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <div class="milestone d-flex flex-row align-items-center justify-content-center">
                            <div class="milestone_content">
                            @php
                                echo $misi->text
                            @endphp
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end::visi dan misi -->

    </div>
    @include('layouts.user.footer')

    @include('layouts.user.js')
</body>

</html>