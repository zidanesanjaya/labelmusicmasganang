<footer class="footer pt-2">
    <div class="row d-flex align-items-center justify-content-center">
        <div class="col-sm-12 text-center">
            <h3>GNG Music Production</h3>
        </div>
    </div>
    <div class="dropdown-divider"></div>
    <div class="container d-flex justify-content-center">
        <div class="row d-flex align-items-center justify-content-center text-center w-50">
            <div class="col-xl-4 col-md-4 col-sm-4 col-12">
                <h4>
                    <a class="text-light" href="#">
                        About
                    </a>
                </h4>
            </div>
            <div class="col-xl-4 col-md-4 col-sm-4 col-12">
                <h4>
                    <a class="text-light" href="#">
                        Services
                    </a>
                </h4>
            </div>
            <div class="col-xl-4 col-md-4 col-sm-4 col-12">
                <h4>
                    <a class="text-light" href="#">
                        Contact
                    </a>
                </h4>
            </div>
        </div>
    </div>
    <div class="container d-flex justify-content-center pt-2">
        <div class="dropdown-divider"></div>
        <div class="row d-flex align-items-center justify-content-center text-center">
            @foreach($social_media AS $key)
            <div class="col-xl-4 col-md-4 col-sm-4 col-4">
                <h3>
                    <a class="text-light" href="{{$key->text}}">
                        <i class="{{$key->var1}}" aria-hidden="true"></i>
                    </a>
                </h3>
            </div>
            @endforeach
        </div>
    </div>
    <div class="copyrightspan row d-flex justify-content-center align-items-center pb-2">
        <span>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>
                document.write(new Date().getFullYear());
            </script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        </span>
    </div>
</footer>