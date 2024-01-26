<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Star Admin2 </title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="/star-admin/vendors/feather/feather.css">
  <link rel="stylesheet" href="/star-admin/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="/star-admin/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="/star-admin/vendors/typicons/typicons.css">
  <link rel="stylesheet" href="/star-admin/vendors/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="/star-admin/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="/star-admin/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="/star-admin/images/favicon.png" />
  <script src="https://cdn.jsdelivr.net/npm/lottie-web@5.7.4/build/player/lottie.min.js"></script>
  <style>
    #alertNotification{
        position: absolute;
        bottom: 0;
        right: 0;
        z-index: 1000;
    }
  </style>
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0" style="background-color:#000;">
        <div class="row w-100 mx-0">
          <div class="col-lg-5 mx-auto  d-none d-lg-block">
            <div class="text-left py-5 px-4 px-sm-5">
              <div style="background-color:#000;" id="lottie"></div>
            </div>
          </div>
          <div class="col-lg-7 mx-auto mt-5">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5 rounded">
              <div class="brand-logo">
                <img src="/star-admin/images/logo.svg" alt="logo">
              </div>
              <h4>Lets Go Grow Up With Our Music</h4>
              <h6 class="fw-light">Sign in to continue.</h6>
              <form class="pt-3" method="post" action="{{route('login')}}">
                @csrf
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Username" name="username">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password" name="password">
                </div>
                <div class="mt-3">
                  <button class="btn btn-block btn-danger btn-lg font-weight-medium auth-form-btn" type="submit">SIGN IN</button>
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  @if(Session::has('error'))
    <p id="alertNotification"  class="alert alert-danger">{{ Session::get('error') }}</p>
  @endif
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script>
    setTimeout(function() {
        document.getElementById('alertNotification').style.display = 'none';
    }, 4000);
</script>

  <script src="/star-admin/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="/star-admin/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="/star-admin/js/off-canvas.js"></script>
  <script src="/star-admin/js/hoverable-collapse.js"></script>
  <script src="/star-admin/js/template.js"></script>
  <script src="/star-admin/js/settings.js"></script>
  <script src="/star-admin/js/todolist.js"></script>
  <!-- endinject -->
</body>

<script>
    var animationPath = '/star-admin/lottie/login.json';
    var container = document.getElementById('lottie');

    var animation = lottie.loadAnimation({
    container: container,
    renderer: 'svg',
    loop: true, 
    autoplay: true,
    path: animationPath,
  });
</script>

</html>
