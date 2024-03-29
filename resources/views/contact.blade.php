<!DOCTYPE html>
<html lang="en">

<head>
    <title>Contact</title>
    @include('layouts.user.head')
    <link rel="stylesheet" type="text/css" href="{{ url('mixtape-master/styles/contact.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('mixtape-master/styles/contact_responsive.css') }}">
</head>

<body>

    <div class="super_container">

        @include('layouts.user.menu')
        <!-- end::menu -->

        <!-- Home -->
        @if(Session::has('error'))
        <div id="alertNotification" class="alert alert-danger fixed-bottom" role="alert">
            {{ Session::get('error') }}
        </div>
        @endif

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
                            <form action="{{route('post.mail_user')}}" class="contact_form" method="post">
                                @csrf
                                <input type="text" class="contact_input" placeholder="Full Name" required="required" name="full_name">
                                <input type="text" class="contact_input" placeholder="Phone Number" name="phone">
                                <input type="email" class="contact_input" placeholder="E-mail" required="required" name="email">
                                <textarea class="contact_input contact_textarea" placeholder="Message" required="required" name="message"></textarea>
                                <button class="contact_button" type="submit">Send Message</button>
                            </form>
                        </div>
                    </div>

                    <!-- Contact Info -->
                    <div class="col-lg-6 contact_col">
                        <div class="contact_info">
                            <div class="contact_title">Find Us</div>
                            <div class="contact_maps">
                                <iframe class="w-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126438.2861801199!2d112.5493808251497!3d-7.9786372047923715!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd62822063dc2fb%3A0x78879446481a4da2!2sMalang%2C%20Kota%20Malang%2C%20Jawa%20Timur!5e0!3m2!1sid!2sid!4v1703850821773!5m2!1sid!2sid" width="500" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                            <div class="social">
                                @foreach($contact AS $key)
                                <div class="row">
                                    <a href="{{$key->text}}" target="_blank">
                                        <i class="{{$key->var1}}" aria-hidden="true">
                                            <span>{{$key->var2}}</span>
                                        </i>
                                    </a>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- container-scroller -->
        <!-- plugins:js -->
        <script>
            setTimeout(function() {
                document.getElementById('alertNotification').style.display = 'none';
            }, 4000);
        </script>
        @include('layouts.user.footer')
    </div>

    <script src="https://kit.fontawesome.com/3f31db6242.js" crossorigin="anonymous"></script>
    @include('layouts.user.js')
</body>

</html>