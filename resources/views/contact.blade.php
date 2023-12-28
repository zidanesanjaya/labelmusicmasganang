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
                                <input type="text" class="contact_input" placeholder="Name" required="required">
                                <input type="email" class="contact_input" placeholder="E-mail" required="required">
                                <input type="text" class="contact_input" placeholder="Subject">
                                <textarea class="contact_input contact_textarea" placeholder="Message" required="required"></textarea>
                                <button class="contact_button">Send Message</button>
                            </form>
                        </div>
                    </div>

                    <!-- Contact Info -->
                    <div class="col-lg-6 contact_col">
                        <div class="contact_info">
                            <div class="contact_title">Where to find us</div>
                            <div class="contact_text">
                                <p>In vitae nisi aliquam, scelerisque leo a, volutpat sem. Vivamus rutrum dui fermentum eros hendrerit, id lobortis leo volutpat. Maecenas sollicitudin est in libero pretium interdum. Nullam volutpat dui sem, ac congue purus luctus nec. Curabitur luctus luctus erat, sit amet facilisis quam congue quis. Quisque ornare luctus erat id dignissim. Nullam ac nunc quis ex porttitor luctus.</p>
                            </div>
                            <div class="contact_info_list">
                                <ul>
                                    <li class="d-flex flex-row align-items-start justify-content-start">
                                        <div>
                                            <div>Address</div>
                                        </div>
                                        <div>1481 Creekside Lane Avila Beach, CA 931</div>
                                    </li>
                                    <li class="d-flex flex-row align-items-start justify-content-start">
                                        <div>
                                            <div>Phone</div>
                                        </div>
                                        <div>+53 345 7953 32453</div>
                                    </li>
                                    <li class="d-flex flex-row align-items-start justify-content-start">
                                        <div>
                                            <div>E-mail</div>
                                        </div>
                                        <div>yourmail@gmail.com</div>
                                    </li>
                                </ul>
                            </div>
                            <div class="social">
                                <ul class="d-flex flex-row align-items-center justify-content-start">
                                    <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->

        <footer class="footer">
            <div class="footer_container d-flex flex-xl-row flex-column align-items-start justify-content-start">
                <div class="newsletter_container">
                    <div class="newsletter_title">
                        <h2>Subscribe to our newsletter</h2>
                    </div>
                    <form action="#" id="newsletter_form" class="newsletter_form">
                        <input type="email" class="newsletter_input" placeholder="Your E-mail" required="required">
                        <button class="newsletter_button">Subscribe</button>
                    </form>
                </div>
                <div class="footer_lists d-flex flex-sm-row  flex-column align-items-start justify-content-start ml-xl-auto">

                    <!-- Useful Links -->
                    <div class="footer_list">
                        <div class="footer_list_title">Useful Links</div>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><a href="about.html">About us</a></li>
                            <li><a href="#">Testimonials</a></li>
                            <li><a href="#">Music</a></li>
                            <li><a href="blog.html">News</a></li>
                        </ul>
                    </div>

                    <!-- Mixtape -->
                    <div class="footer_list">
                        <div class="footer_list_title">Mixtape</div>
                        <ul>
                            <li><a href="#">Music</a></li>
                            <li><a href="#">PR & Marketing</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Testimonials</a></li>
                        </ul>
                    </div>

                    <!-- Connect -->
                    <div class="footer_list">
                        <div class="footer_list_title">Connect</div>
                        <ul>
                            <li><a href="#">Returns</a></li>
                            <li><a href="#">Shippings</a></li>
                            <li><a href="#">Jobs</a></li>
                            <li><a href="#">Social Media</a></li>
                            <li><a href="#">Soundcloud</a></li>
                        </ul>
                    </div>

                </div>
            </div>
            <div class="copyright_bar">
                <span><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>
                        document.write(new Date().getFullYear());
                    </script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </span>
            </div>
        </footer>
    </div>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="styles/bootstrap-4.1.2/popper.js"></script>
    <script src="styles/bootstrap-4.1.2/bootstrap.min.js"></script>
    <script src="plugins/greensock/TweenMax.min.js"></script>
    <script src="plugins/greensock/TimelineMax.min.js"></script>
    <script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
    <script src="plugins/greensock/animation.gsap.min.js"></script>
    <script src="plugins/greensock/ScrollToPlugin.min.js"></script>
    <script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
    <script src="plugins/easing/easing.js"></script>
    <script src="plugins/progressbar/progressbar.min.js"></script>
    <script src="plugins/parallax-js-master/parallax.min.js"></script>
    <script src="plugins/jPlayer/jquery.jplayer.min.js"></script>
    <script src="plugins/jPlayer/jplayer.playlist.min.js"></script>
    <script src="js/contact.js"></script>
</body>

</html>