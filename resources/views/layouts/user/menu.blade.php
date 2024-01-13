<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>
<body>

<header class="header">
    <div class="header_content d-flex flex-row align-items-center justify-content-end">
        <div class="logo"><a href="#">GNG Music Production</a></div>
        <nav class="main_nav">
            <ul class="d-flex flex-row align-items-start justify-content-start">
                <li><a href="/">Home</a></li>
                <li><a href="/about-page">About us</a></li>
                <li><a href="/services-page">Services</a></li>
                <li><a href="/artist-page">Artist</a></li>
                <li><a href="/contact-page">Contact Us</a></li>
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

<div class="menu">
    <div>
        <div class="menu_overlay"></div>
        <div class="menu_container d-flex flex-column align-items-start justify-content-center">
            <nav class="menu_nav">
                <ul class="d-flex flex-column align-items-start justify-content-start">
                    <li><a href="/">Home</a></li>
                    <li><a href="/about-page">About us</a></li>
                    <li><a href="/services-page">Services</a></li>
                    <li><a href="/artist-page">Artist</a></li>
                    <li><a href="/contact-page">Contact Us</a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        var currentUrl = window.location.pathname; 

        $('.main_nav a').each(function() {
            var linkUrl = $(this).attr('href'); 

            if (currentUrl === linkUrl) {
                $(this).parent('li').addClass('active'); 
            }
        });
    });
</script>

</body>
</html>
