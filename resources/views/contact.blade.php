<!DOCTYPE html>
<html lang="en">

<head>
    <title>Contact</title>
    @include('layouts.user.head')
    <link rel="stylesheet" type="text/css" href="/mixtape-master/styles/contact.css">
    <link rel="stylesheet" type="text/css" href="/mixtape-master/styles/contact_responsive.css">
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
                        <li><a href="/artist">Artist</a></li>
                        <li class="active"><a href="/contact">Contact Us</a></li>
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
                            <li><a href="/contact">Contact Us</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- end::menu -->

        <!-- Home -->
        <div class="home">
            <div class="home_inner">
                <div class="home_container">
                    <div class="home_content text-center">
                        <div class="home_title">Contact Us</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact -->

        <div class="contact">
            <div class="container">
                <div class="row">

                    <!-- Contact Form -->
                    <div class="col-lg-6">
                        <div class="contact_form_container">
                            <div class="contact_title">Send us a message</div>
                            <form action="#" class="contact_form" id="contact_form">
                                <input type="text" class="contact_input" placeholder="Full Name" required="required">
                                <input type="text" class="contact_input" placeholder="Phone Number">
                                <input type="email" class="contact_input" placeholder="E-mail" required="required">
                                <textarea class="contact_input contact_textarea" placeholder="Message" required="required"></textarea>
                                <button class="contact_button">Send Message</button>
                            </form>
                        </div>
                    </div>

                    <!-- Contact Info -->
                    <div class="col-lg-6 contact_col">
                        <div class="contact_info">
                            <div class="contact_title">Find Us</div>
                            <div class="contact_maps">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126438.2861801199!2d112.5493808251497!3d-7.9786372047923715!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd62822063dc2fb%3A0x78879446481a4da2!2sMalang%2C%20Kota%20Malang%2C%20Jawa%20Timur!5e0!3m2!1sid!2sid!4v1703850821773!5m2!1sid!2sid" width="500" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                            <div class="social">
                                <div class="row">
                                    <a href="#" target="_blank">
                                        <i class="fa fa-whatsapp" aria-hidden="true">
                                            <span>085123321123</span>
                                        </i>
                                    </a>
                                </div>
                                <div class="row">
                                    <a href="#" target="_blank">
                                        <i class="fa fa-instagram" aria-hidden="true">
                                            <span>@ganangproduct</span>
                                        </i>
                                    </a>
                                </div>
                                <div class="row">
                                    <a href="#" target="_blank">
                                        <i class="fa fa-facebook" aria-hidden="true">
                                            <span>ganangproduct</span>
                                        </i>
                                    </a>
                                </div>
                                <div class="row">
                                    <a href="#" target="_blank">
                                        <i class="fa fa-twitter" aria-hidden="true">
                                            <span>@ganangproduct</span>
                                        </i>
                                    </a>
                                </div>
                                <div class="row">
                                    <a href="#" target="_blank">
                                        <i class="fa fa-youtube" aria-hidden="true">
                                            <span>ganangproduct</span>
                                        </i>
                                    </a>
                                </div>
                                <div class="row">
                                    <a href="#" target="_blank">
                                        <i class="fa-brands fa-tiktok" aria-hidden="true">
                                            <span>ganangproduct</span>
                                        </i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('layouts.user.footer')
    </div>

    <script src="https://kit.fontawesome.com/3f31db6242.js" crossorigin="anonymous"></script>
</body>

</html>